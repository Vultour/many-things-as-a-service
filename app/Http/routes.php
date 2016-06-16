<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', 'HomepageController@show');


$app->group(['prefix' => 'random', 'namespace' => 'App\Http\Controllers'], function() use ($app){
    $app->get('',               'RandomController@getDefault');
    $app->get('{min}/{max}',    'RandomController@getRange');
    $app->get('secure',         'RandomController@getSecure');
});


$app->group(['prefix' => 'leftpad', 'namespace' => 'App\Http\Controllers'], function() use ($app){
    $app->get('{input}/{length}',        'LeftPadController@getDefault');
    $app->get('{input}/{length}/{char}', 'LeftPadController@getCustom');
});


$app->group(['prefix' => 'rightpad', 'namespace' => 'App\Http\Controllers'], function() use ($app){
    $app->get('{input}/{length}',        'RightPadController@getDefault');
    $app->get('{input}/{length}/{char}', 'RightPadController@getCustom');
});

$app->group(['prefix' => 'loading', 'namespace' => 'App\Http\Controllers'], function() use ($app){
    $app->get('{done}',                                                     'LoadingBarController@getDefault');
    $app->get('{done}/{length}',                                            'LoadingBarController@getLength');
    $app->get('{done}/{length}/{loadedChar}/{loadingChar}/{borderChar}',    'LoadingBarController@getCustom');
});

$app->group(['prefix' => 'codename', 'namespace' => 'App\Http\Controllers'], function() use ($app){
    $app->get('',                               'CodenameGeneratorController@getDefault');
    $app->get('categories',                     'CodenameGeneratorController@getCategories');
    $app->get('{prefix}/{dictionary}/{suffix}', 'CodenameGeneratorController@getCustom');
});

$app->group(['prefix' => 'bofh-excuses', 'namespace' => 'App\Http\Controllers'], function() use ($app){
    $app->get('',   'BOFHExcusesController@getDefault');
});
