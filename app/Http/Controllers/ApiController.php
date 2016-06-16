<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ApiController extends Controller
{
    protected $serviceTitle = 'Service';
    protected $request;

    public function __construct(Request $request){
        $this->request = $request;
    }

    protected function htmlify($input){
        if (!is_array($input)){ return '<pre>' . str_replace(' ', '&nbsp;', $input) . '</pre>'; }

        $output = '<ul>';
        foreach ($input as $key => $value){
            $output .= "<li style='margin-left:15px;'><strong>$key</strong>: ";
            if (is_array($value)){
                $output .= $this->htmlify($value);
            } else{
                $output .= str_replace(' ', '&nbsp;', $value);
            }
            $output .= '</li>';
        }
        $output .= '</ul>';

        return $output;
    }

    protected function textify($input, $indent = 0){
        if (!is_array($input)){ return str_repeat(' ', $indent) . "$input\n"; }

        $output = '';
        foreach ($input as $key => $value){
            $output .= str_repeat(' ', $indent) . "$key\n";
            if (is_array($value)){
                $output .= $this->textify($value, $indent + 4);
            } else{
                $output .= str_repeat(' ', $indent + 4) . "$value\n";
            }
        }

        return $output;
    }

    protected function createResponse($output, $status){
        // TODO
        $accept = $this->request->header('Accept');

        if (strpos($accept, 'text/html') !== FALSE){
            return view('output', ['output' => $this->htmlify($output), 'serviceTitle' => $this->serviceTitle]);
        } else if (strpos($accept, 'text/plain') !== FALSE){
            return response($this->textify($output), $status)
                    ->header('Content-Type', 'text/plain');
        } else{
            return response()
                    ->json(['status' => $status, 'data' => $output]);
        }
    }

    protected function success($output){ return $this->createResponse($output, 200); }
    protected function error($error){ return $this->createResponse($error, 400); }
}
