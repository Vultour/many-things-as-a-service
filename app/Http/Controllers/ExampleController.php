<?php
namespace App\Http\Controllers;


class ExampleController extends ApiController
{
    protected $serviceTitle = 'Service';

    public function __construct()
    {
        //
    }

    public function getDefault(){
        return $this->success('example');
    }
}
