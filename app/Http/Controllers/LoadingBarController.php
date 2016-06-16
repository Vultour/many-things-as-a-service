<?php
namespace App\Http\Controllers;


class LoadingBarController extends ApiController
{
    public function generateLoadingBar($done, $length, $loadedChar, $loadingChar, $borderChar){
        if (($done < 0) || ($done > 100) || (strlen($loadedChar) != 1) || (strlen($loadingChar) != 1) || (strlen($borderChar) != 1)){ return "ERROR"; }

        $output = "";
        for ($i = 0; $i < floor($length * ($done / 100)); $i++){ $output .= $loadedChar; }
        if ($done < 100){ $output .= $loadingChar; }
        for ($i = 0; $i < (($length - floor($length * ($done / 100))) - 1); $i++){ $output .= ' '; }
        $output = $borderChar . $output . $borderChar;

        return $output;
    }

    public function getDefault($done){
        if (($done < 0) || ($done > 100)){ return $this->error('Done % has to be between 0 and 100'); }
        return $this->success($this->generateLoadingBar($done, 20, '=', '>', '|'));
    }

    public function getLength($done, $length){
        if (($done < 0) || ($done > 100)){ return $this->error('Done % has to be between 0 and 100'); }
        if (($length < 1) || ($length > 4096)){ return $this->error('Invalid length, allowed values are between 1 and 4096, contact us for pricing if you need larger loading bars'); }
        return $this->success($this->generateLoadingBar($done, $length, '=', '>', '|'));
    }

    public function getCustom($done, $length, $loadedChar, $loadingChar, $borderChar){
        if (($done < 0) || ($done > 100)){ return $this->error('Done % has to be between 0 and 100'); }
        if (($length < 1) || ($length > 4096)){ return $this->error('Invalid length, allowed values are between 1 and 4096, contact us for pricing if you need larger loading bars'); }
        if ((strlen($loadedChar) != 1) || (strlen($loadingChar) != 1) || (strlen($borderChar) != 1)){ return $this->error('You must only specify 1 character for each custom character'); }

        return $this->success($this->generateLoadingBar($done, $length, $loadedChar, $loadingChar, $borderChar));
    }
}
