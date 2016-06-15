<?php
namespace App\Http\Controllers;


class RandomController extends ApiController
{
    public function getDefault(){
        return $this->success(mt_rand()/mt_getrandmax());
    }

    public function getRange($min, $max){
        if ((!ctype_digit($min)) || (!ctype_digit($max))){ return $this->error("The input values must be integers"); }
        if ($min > $max){ return $this->error("Minimum cannot be more than maximum"); }
        if (($min < 0) || ($max < 0) || ($max > mt_getrandmax())){ return $this->error("Invalid input"); }
        return $this->success(mt_rand($min, $max));
    }

    public function getSecure(){
        $source = explode(' ', microtime());
        return $this->success($source[1]*$source[0]);
    }
}
