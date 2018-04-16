@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h2 class="text-center">SILA MASUKKAN NOMBOR KAD PENGENALAN </h2>
	</div>
	
	<div class="col-md-8 col-md-offset-2">
		 						
        {!! Form::open(['route' => 'semakan.multiple', 'class' => 'contact-form' , 'method'=>'POST'] ) !!}
		
		<div class="field_wrapper">
            <div class="row">
		            <div class="col-md-11">
		                <div class="form-group label-floating is-empty">
							<label class="control-label"> No Kad Pengenalan (tanpa "-" atau "space")</label>
	                        <input id="ic" type="text" class="form-control{{ $errors->has('ic') ? ' is-invalid' : '' }}" name="ic[]" required autofocus>
							<span class="material-input"></span>
						</div>
		            </div>

	        <div class="col-md-1">
	            	<div class="form-group label-floating is-empty">
	            		<a href="javascript:void(0);" class="btn btn-info btn-sm addMore"><i class="fa fa-plus"></i></a>
	            	</div>
	            </div>
            </div>
        </div>


            <div class="row">
                <div class="col-md-11 text-center">
                    <button class="btn btn-primary btn-raised btn-md btn-block" type="submit">
						Semak
					</button>
                </div>
            </div>
        {!! Form::close() !!}

        @if(Request::isMethod('post'))
			
			@component('components.tables', [
	                'data_multiple' => true,
	                'parsed' => $parsed,
	            ])
			@endcomponent
		
    	@endif

    </div>
</div>

@endsection

@section('after_scripts')
<script type="text/javascript">
	$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addMoreButton = $('.addMore'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="row"><div class="col-md-11"><div class="form-group label-floating is-empty"><label class="control-label"> No Kad Pengenalan (tanpa "-" atau "space")</label><input id="ic" type="text" class="form-control" name="ic[]" required autofocus><span class="material-input"></span></div></div><div class="col-md-1"><div class="form-group label-floating is-empty"><a href="javascript:void(0);" class="btn btn-danger btn-sm removeBtn"><i class="fa fa-trash"></i></a></div></div></div>';
    var x = 1; //Initial field counter is 1
    $(addMoreButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
        }
    });
    $(wrapper).on('click', '.removeBtn', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent().parent().parent().remove();
        x--;
    });
});
</script>
@endsection