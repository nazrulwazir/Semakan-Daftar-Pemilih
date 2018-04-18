
	@foreach($parsed as $key=>$getData)
		@php
			$index = $key+1;
		@endphp

			<h2 class="text-center">SEMAKAN {{ $index }} : {{ $getData['ic'] }}  </h2>	

			@if($getData['result']['error'] == '')						
			        <table class="table table-hover table-striped table-bordered">
						<thead class="thead-dark"><tr><th colspan="2"> MAKLUMAT PERIBADI PEMILIH</th></tr></thead>
							<tbody>        
									
									<tr>
									  <th scope="row" width="30%">Nama Penuh</th>
									  <td>{{ $getData['result']['name'] }}</td>
									</tr>                               
									<tr>
									  <th scope="row">No. Kad Pengenalan</th>
									  <td>{{ $getData['result']['ic_no'] }}</td>
									</tr> 
								@if(empty($getData['result']['tran']['jenis']))                              
									<tr>
									  <th scope="row">Tahun Lahir</th>
									  <td>{{ $getData['result']['dob'] }}</td>
									</tr> 
								@endif                          
									<tr>
										<th scope="row">Jantina</th>
										<td>{{ $getData['result']['gender'] }}</td>
									</tr>     
								</tbody>                               
					</table>
				
					@if(!empty($getData['result']['tran']['jenis']))
							
							<table class="table table-hover table-striped table-bordered">
								<thead class="thead-dark"><tr><th colspan="2"> PERMOHONAN BARU / TUKAR ALAMAT / TUKAR KATEGORI SEDANG DIPROSES</th></tr></thead>
									<tbody>        
											
											<tr>
											  <th scope="row" width="30%">Jenis</th>
											  <td> {{ $getData['result']['tran']['jenis'] }}</td>
											</tr>                               
											<tr>
											  <th scope="row">Status</th>
											  <td>{{ $getData['result']['tran']['status'] }}</td>
											</tr> 
										</tbody>                               
							</table>
					@else
							<table class="table table-hover table-striped table-bordered">                          
								<thead class="thead-dark">
									<tr>
										<th colspan="2"> DAFTAR PEMILIH YANG TELAH DISAHKAN </th>
									</tr>
								</thead>                            
								<tbody>                         
									<tr>
									  <th scope="row" width="30%">Lokaliti</th>
									  <td>{{ $getData['result']['warta']['lokaliti'] }}</td>
									</tr>                               
									<tr>
									  <th scope="row">Daerah Mengundi </th>
									  <td>{{ $getData['result']['warta']['daerah'] }}</td>
									</tr>                               
									<tr>
									  <th scope="row">Dewan Undangan Negeri</th>
									  <td>{{ $getData['result']['warta']['dun'] }}</td>
									</tr>                           
									<tr>
										<th scope="row">Parlimen</th>
										<td>{{ $getData['result']['warta']['parlimen'] }}</td>
									</tr>
									<tr>
										<th scope="row">Negeri</th>
										<td>{{ $getData['result']['warta']['negeri'] }}</td>
									</tr>
									<tr>
										<th scope="row">Pusat Mengundi</th>
										<td>{{ $getData['result']['warta']['pusat'] }}</td>
									</tr>
									<tr>
										<th scope="row">Saluran</th>
										<td>{{ $getData['result']['warta']['saluran'] }}</td>
									</tr>
									<tr>
										<th scope="row">Masa Mengundi</th>
										<td>{{ $getData['result']['warta']['masa'] }}</td>
									</tr>
									<tr>
										<th scope="row">No Siri</th>
										<td>{{ $getData['result']['warta']['no_siri'] }}</td>
									</tr>
								</tbody>                                
							</table>
				@endif
			@else
					{{ $getData['result']['error'] }}
			@endif
	@endforeach
