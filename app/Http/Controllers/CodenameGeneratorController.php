<?php
namespace App\Http\Controllers;


class CodenameGeneratorController extends ApiController
{
    private function parsePage($page){
        $match = preg_match('/3"><b>([^<].*?)</si', $page, $groups);
        return ($match)?(trim(str_replace("\n", ' ', $groups[1]))):(false);
    }

    public function getDefault(){
        $curl = curl_init();
        curl_setopt_array(
            $curl,
            [
                CURLOPT_RETURNTRANSFER  => true,
                CURLOPT_URL             => 'http://www.codenamegenerator.com/',
                CURLOPT_USERAGENT       => 'Many-Things-as-a-Service',
                CURLOPT_TIMEOUT         => 1,
            ]
        );

        $page = curl_exec($curl);
        if ($page === false){ return $this->error('This service is temporarily unavailable'); }

        $match = $this->parsePage($page);
        if (!$match){ return $this->error('This service is temporarily unavailable'); }

        return $this->success($match);
    }

    public function getCustom($prefix, $dictionary, $suffix){
        $curl = curl_init();
        curl_setopt_array(
            $curl,
            [
                CURLOPT_RETURNTRANSFER  => true,
                CURLOPT_URL             => 'http://www.codenamegenerator.com/',
                CURLOPT_USERAGENT       => 'Many-Things-as-a-Service',
                CURLOPT_TIMEOUT         => 1,
                CURLOPT_POST            => true,
                CURLOPT_POSTFIELDS      => [
                    'prefix'        => $prefix,
                    'dictionary'    => $dictionary,
                    'suffix'        => $suffix
                ]
            ]
        );

        $page = curl_exec($curl);
        if ($page === false){ return $this->error('This service is temporarily unavailable'); }

        $match = $this->parsePage($page);
        if (!$match){ return $this->error('This service is temporarily unavailable'); }

        return $this->success($match);
    }

    public function getCategories(){
        $curl = curl_init();
        curl_setopt_array(
            $curl,
            [
                CURLOPT_RETURNTRANSFER  => true,
                CURLOPT_URL             => 'http://www.codenamegenerator.com/',
                CURLOPT_USERAGENT       => 'Many-Things-as-a-Service',
                CURLOPT_TIMEOUT         => 1,
            ]
        );

        $page = curl_exec($curl);
        if ($page === false){ return $this->error('This service is temporarily unavailable'); }

        $prefixMatch = preg_match('/<select name="prefix">(.*?)<\/select>/si', $page, $prefixGroups);
        if (!$prefixMatch){ return $this->error('This service is temporarily unavailable'); }
        $prefixAll = preg_replace('/<option\s*value="|">.*?n>|" .*?n>/i', '', trim($prefixGroups[1]));
        $prefixes = explode("\n", $prefixAll);

        $dictionaryMatch = preg_match('/<select name="dictionary">(.*?)<\/select>/si', $page, $dictionaryGroups);
        if (!$dictionaryMatch){ return $this->error('This service is temporarily unavailable'); }
        $dictionaryAll = preg_replace('/<option\s*value="|">.*?n>|" .*?n>/i', '', trim($dictionaryGroups[1]));
        $dictionaries = explode("\n", $dictionaryAll);

        $suffixMatch = preg_match('/<select name="suffix">(.*?)<\/select>/si', $page, $suffixGroups);
        if (!$suffixMatch){ return $this->error('This service is temporarily unavailable'); }
        $suffixAll = preg_replace('/<option\s*value="|">.*?n>|" .*?n>/i', '', trim($suffixGroups[1]));
        $suffixes = explode("\n", $suffixAll);

        if ((count($prefixes) < 1) || (count($dictionaries) < 1) || (count($suffixes) < 1)){ return $this->error('This service is temporarily unavailable'); }

        return $this->success([
            'prefix'        => $prefixes,
            'dictionary'    => $dictionaries,
            'suffix'        => $suffixes
        ]);
    }
}
