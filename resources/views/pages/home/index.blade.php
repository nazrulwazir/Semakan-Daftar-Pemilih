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
		
		@if($getData['code'] == 200)						
		        <table class="table table-striped table-bordered">
					<thead class="thead-dark"><tr><th colspan="2"> MAKLUMAT PERIBADI PEMILIH</th></tr></thead>
						<tbody>        
								
								<tr>
								  <th scope="row" width="30%">Nama Penuh</th>
								  <td>{{ $getData['data']['name'] }}</td>
								</tr>                               
								<tr>
								  <th scope="row">No. Kad Pengenalan</th>
								  <td>{{ $getData['data']['ic_no'] }}</td>
								</tr>                               
								<tr>
								  <th scope="row">Tarikh Lahir</th>
								  <td>{{ $getData['data']['dob'] }}</td>
								</tr>                           
								<tr>
									<th scope="row">Jantina</th>
									<td>{{ $getData['data']['gender'] }}</td>
								</tr>     
							</tbody>                               
				</table>

				<table class="table table-striped table-bordered">                          
				<thead class="thead-dark"><tr><th colspan="2"> DAFTAR PEMILIH YANG TELAH DISAHKAN </th></tr></thead>                            
					<tbody>  
						<tr>
						  <th scope="row" width="30%">PENERANGAN</th>
						  <td>PILIHAN RAYA UMUM KE-14</td>
						</tr>                            
						<tr>
						  <th scope="row" width="30%">Lokaliti</th>
						  <td>{{ $getData['data']['lokaliti'] }}</td>
						</tr>                               
						<tr>
						  <th scope="row">Daerah Mengundi </th>
						  <td>{{ $getData['data']['daerah'] }}</td>
						</tr>                               
						<tr>
						  <th scope="row">DUN</th>
						  <td>{{ $getData['data']['dun'] }}</td>
						</tr>                           
						<tr>
							<th scope="row">Parlimen</th>
							<td>{{ $getData['data']['parlimen'] }}</td>
						</tr>
						<tr>
							<th scope="row">Negeri</th>
							<td>{{ $getData['data']['negeri'] }}</td>
						</tr>
						<tr>
							<th scope="row">Pusat Mengundi</th>
							<td>{{ $getData['data']['pusat_mengundi'] }}</td>
						</tr>
						<tr>
							<th scope="row">Saluran</th>
							<td>{{ $getData['data']['saluran'] }}</td>
						</tr>
						<tr>
							<th scope="row">Masa Mengundi</th>
							<td>{{ $getData['data']['masa_mengundi'] }}</td>
						</tr>
						<tr>
							<th scope="row">No Siri</th>
							<td>{{ $getData['data']['no_siri'] }}</td>
						</tr>
															<tr>
							<td colspan="2" class="text-center muted">{{ $getData['data']['info'] }}</td>
						</tr>
					</tbody>                                
			</table>
		@elseif($getData['code'] == 204)
				
				Rekod Tidak Ditemui.

		@endif
		
    @endif

    </div>
</div>

@endsection

