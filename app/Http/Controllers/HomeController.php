<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\API\SemakPemilihController as SemakPemilihController;

class HomeController extends SemakPemilihController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {       
        
        if($request->isMethod('post')){

            $request->validate([
                'ic' => 'required|numeric|digits:12',
            ]);

            $getData = $this->ApiSpr($request->ic);

            if($getData['code'] == 200){
                swal()->button('OK','#9c27b0',false,'btn btn-primary')->success('Berjaya','Rekod Ditemui'); 
            }else{
                swal()->button('OK','#9c27b0',false,'btn btn-primary')->error('Kesalahan','Rekod Tidak Ditemui'); 
            }
        }else{
            swal()->button('Saya Faham','#9c27b0',false,'btn btn-primary')->info('Selamat Datang','Segala rekod anda tidak disimpan ke dalam sistem ini.Sistem ini hanya alternatif semakan selain laman rasmi SPR'); 
        }
        return view('pages.home.index',compact('getData'));
    }

}
