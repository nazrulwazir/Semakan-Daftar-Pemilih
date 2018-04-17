@extends('layouts.master')

@section('content')

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

@endsection