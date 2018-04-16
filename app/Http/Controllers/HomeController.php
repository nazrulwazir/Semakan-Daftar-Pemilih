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
                swal()->success('Berjaya','Rekod Ditemui',[]);
            }else{
                swal()->info('Opps','Rekod Tidak Ditemui',[]);
            }
        }else{
            swal()->button('Saya Faham')->message('Selamat Datang','Segala rekod anda tidak disimpan ke dalam sistem ini.Sistem ini hanya alternatif semakan selain laman rasmi SPR','info'); 
        }
        return view('pages.home.index',compact('getData'));
    }

}
