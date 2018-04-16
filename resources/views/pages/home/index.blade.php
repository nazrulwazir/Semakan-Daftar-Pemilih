@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h2 class="text-center">SILA MASUKKAN NOMBOR KAD PENGENALAN </h2>
	</div>
	
	<div class="col-md-8 col-md-offset-2">
		 						
        {!! Form::open(['route' => 'semakan.index', 'class' => 'contact-form' , 'method'=>'POST'] ) !!}
            <div class="row">
                <div class="col-md-12">
					<div class="form-group label-floating is-empty">
						<label class="control-label"> No Kad Pengenalan (tanpa "-" atau "space")</label>
                        <input id="ic" type="text" class="form-control{{ $errors->has('ic') ? ' is-invalid' : '' }}" name="ic" required autofocus>
					<span class="material-input"></span></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <button class="btn btn-primary btn-raised btn-md btn-block" type="submit">
						Semak
					</button>
                </div>
            </div>
        {!! Form::close() !!}

        @if(Request::isMethod('post'))

			@component('components.tables', [
	                'data_multiple' => 0,
	                'parsed' => $parsed,
	            ])
			@endcomponent

    	@endif

    </div>
</div>

@endsection

