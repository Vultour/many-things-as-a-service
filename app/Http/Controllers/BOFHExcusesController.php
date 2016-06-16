<?php
namespace App\Http\Controllers;


class BOFHExcusesController extends ApiController
{
    public function getDefault(){
        $curl = curl_init();
        curl_setopt_array(
            $curl,
            [
                CURLOPT_RETURNTRANSFER  => true,
                CURLOPT_URL             => 'http://pages.cs.wisc.edu/~ballard/bofh/bofhserver.pl',
                CURLOPT_USERAGENT       => 'Many-Things-as-a-Service',
                CURLOPT_TIMEOUT         => 1,
            ]
        );
        $page = curl_exec($curl);
        if ($page === false){ return $this->error('This service is temporarily unavailable'); }
        $match = preg_match('/2">([^<].*?)</si', $page, $groups);
        if ($match == false){ return $this->error('This service is temporarily unavailable'); }
        return $this->success($groups[1]);
    }
}
