<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\API\SemakPemilihController as SemakPemilihController;

class HomeController extends SemakPemilihController
{

    private $api_url;

    public function __construct()
    {
        $this->api_url = \URL::to('api/V1/semak-pemilih/');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        if($request->isMethod('post')){

            $request->validate([
                'ic.*' => 'required|numeric|min:12',
            ]);

            foreach ($request->ic as $key => $value) {
                $parsed[] = array(
                                'ic'        => $value, 
                                'result'    => $this->fetch_data($value),
                          );
            }

            swal()->success('Berjaya','Senarai Rekod',[]);
        }else{
            swal()->button('Saya Faham')->message('PENGAKUAN','Segala rekod anda tidak disimpan ke dalam sistem ini.Sistem ini hanya alternatif semakan selain laman rasmi SPR','info'); 
        }

        return view('pages.home.index',compact('parsed'));
    }

    public function fetch_data($ic){

        $url_api = $this->api_url.'/'.$ic;
        $getdata = file_get_contents($url_api);

        return json_decode($getdata,true);
    }

}
