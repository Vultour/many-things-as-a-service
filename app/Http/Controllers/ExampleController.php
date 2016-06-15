<?php
namespace App\Http\Controllers;


class ExampleController extends ApiController
{
    public function __construct()
    {
        //
    }

    public function getDefault(){
        return $this->success('example');
    }
}
