<?php

namespace App\Http\Controllers\API\V2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SemakPemilihController extends Controller
{

    private $base_url;

    public function __construct()
    {
        $this->base_url = "http://myspr.spr.gov.my/semak.php";
    }
    
    public function generateToken(){
        return base64_encode(time().'.'.str_random(5));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $ic
     * @return \Illuminate\Http\Response
     */
    public function ApiSpr($ic = null){
        
        $postdata = array(
                    'token' => $this->generateToken(),
                    'ic'    => $ic,
                );

        return $this->curl($postdata);
    }

    public function curl($postdata){

        $agent = 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1';
        $ch = curl_init(); // initialize curl object
        curl_setopt($ch, CURLOPT_URL, $this->base_url); // set url
        curl_setopt($ch, CURLOPT_POST, 1); // set option for POST data
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata); // set post data array
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // receive server response
        curl_setopt($ch, CURLOPT_USERAGENT, $agent);
        $result = curl_exec($ch); // execute curl, fetch webpage content
        $httpstatus = curl_getinfo($ch, CURLINFO_HTTP_CODE); // receive http response status
        $errormsg = (curl_error($ch)) ? curl_error($ch) : "No error"; // catch error message
        curl_close($ch);  // close curl

        return $result;
    }

}
