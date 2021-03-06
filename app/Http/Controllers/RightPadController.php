<?php
namespace App\Http\Controllers;


class RightPadController extends ApiController
{
    protected $serviceTitle = 'Right Pad';

    public function getDefault($input, $length){
        if (!ctype_digit($length) || !is_numeric($length)){ return $this->error('Length must be an integer'); }
        if (($length > 4096) || (strlen($input) > 4096)){ return $this->error('Input size too large, please contact us for pricing'); }

        $output = $input;
        while (strlen($output) < $length){ $output .= " "; }

        return $this->success($output);
    }

    public function getCustom($input, $length, $char){
        if (!ctype_digit($length) || !is_numeric($length)){ return $this->error('Length must be an integer'); }
        if (strlen($char) != 1){ return $this->error('You must specift a single character for padding'); }
        if (($length > 4096) || (strlen($input) > 4096)){ return $this->error('Input size too large, please contact us for pricing'); }

        $output = $input;
        while (strlen($output) < $length){ $output .= $char; }
    
        return $this->success($output);
    }
}
