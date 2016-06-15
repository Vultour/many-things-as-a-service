<?php
namespace App\Http\Controllers;


class ApiController extends Controller
{
    protected function createResponse($output, $status){
        // TODO
        return response()
                ->json(['status' => $status, 'data' => $output]);
    }

    protected function success($output){ return $this->createResponse($output, 200); }
    protected function error($error){ return $this->createResponse($error, 400); }
}
