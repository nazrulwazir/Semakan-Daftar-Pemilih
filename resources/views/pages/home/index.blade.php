@extends('layouts.master')

@section('content')
<style type="text/css">
	.modal-backdrop {
	  z-index: -1;
	}
</style>
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h2 class="text-center">SILA MASUKKAN NOMBOR KAD PENGENALAN </h2>
	</div>
	
	<div class="col-md-8 col-md-offset-2">
		 						
        {!! Form::open(['route' => 'semakan.index', 'class' => 'contact-form form' , 'method'=>'POST'] ) !!}

        <div class="field_wrapper">
        	<div class="row">
                <div class="form-group label-floating is-empty">
			            <div class="col-md-11">
			            	<label class="control-label col-md-8" for="phone_mobile">No Kad Pengenalan (tanpa "-" atau "space")</label>
			                <div class="input-icon right">
			                    <input id="ic" type="text" class="form-control{{ $errors->has('ic') ? ' is-invalid' : '' }}" maxlength="12" oninput="ValNoAlpha(this)" name="ic[]" required autofocus>
			                    <span class="material-input"></span>
			                </div>
			            </div>
			            <div class="col-md-1">
			            	<a href="javascript:void(0);" class="btn btn-info btn-sm addMore"><i class="fa fa-plus"></i></a>
			            </div>
                </div>
            </div>
       	</div>


            <div class="row">
                <div class="col-md-11 text-center">
                    <button class="btn btn-primary btn-raised btn-md btn-block btnSubmit" type="submit">
						Semak
					</button>
                </div>
            </div>
        {!! Form::close() !!}

        @if(Request::isMethod('post'))
			
			@component('components.tables', [
	                'parsed' => $parsed,
	            ])
			@endcomponent
		
    	@endif

    </div>
</div>

<!-- Modal Core -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Cara guna API</h4>
      </div>
      <div class="modal-body">
      	<h4>Untuk dapatkan data semakan</h4>
        <pre>https://semakan.nazrulwazir.com/api/V1/semak-pemilih/<span class="text-danger">{ic_num}</span> <b>ATAU</b> fork melalui <a href="https://github.com/nazrulwazir/Semakan-Daftar-Pemilih-API" target="_blank">Github</a>
		</pre>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

@endsection