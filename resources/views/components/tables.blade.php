
	@foreach($parsed as $key=>$getData)
		@php
			$index = $key+1;
		@endphp

			<h2 class="text-center">CARIAN {{ $index }} : {{ $getData['ic'] }}  </h2>	

			@if($getData['result']['code'] == 200)						
		        <table class="table table-striped table-bordered">
					<thead class="thead-dark"><tr><th colspan="2"> MAKLUMAT PERIBADI PEMILIH</th></tr></thead>
						<tbody>        
								
								<tr>
								  <th scope="row" width="30%">Nama Penuh</th>
								  <td>{{ $getData['result']['data']['name'] }}</td>
								</tr>                               
								<tr>
								  <th scope="row">No. Kad Pengenalan</th>
								  <td>{{ $getData['result']['data']['ic_no'] }}</td>
								</tr>                               
								<tr>
								  <th scope="row">Tahun Lahir</th>
								  <td>{{ $getData['result']['data']['dob'] }}</td>
								</tr>                           
								<tr>
									<th scope="row">Jantina</th>
									<td>{{ $getData['result']['data']['gender'] }}</td>
								</tr>     
							</tbody>                               
				</table>

				<table class="table table-striped table-bordered">                          
					<thead class="thead-dark">
						<tr>
							<th colspan="2"> DAFTAR PEMILIH YANG TELAH DISAHKAN </th>
						</tr>
					</thead>                            
					<tbody>                         
						<tr>
						  <th scope="row" width="30%">Lokaliti</th>
						  <td>{{ $getData['result']['data']['lokaliti'] }}</td>
						</tr>                               
						<tr>
						  <th scope="row">Daerah Mengundi </th>
						  <td>{{ $getData['result']['data']['daerah'] }}</td>
						</tr>                               
						<tr>
						  <th scope="row">DUN</th>
						  <td>{{ $getData['result']['data']['dun'] }}</td>
						</tr>                           
						<tr>
							<th scope="row">Parlimen</th>
							<td>{{ $getData['result']['data']['parlimen'] }}</td>
						</tr>
						<tr>
							<th scope="row">Negeri</th>
							<td>{{ $getData['result']['data']['negeri'] }}</td>
						</tr>
						<tr>
							<th scope="row">Pusat Mengundi</th>
							<td>{{ $getData['result']['data']['pusat_mengundi'] }}</td>
						</tr>
						<tr>
							<th scope="row">Saluran</th>
							<td>{{ $getData['result']['data']['saluran'] }}</td>
						</tr>
						<tr>
							<th scope="row">Masa Mengundi</th>
							<td>{{ $getData['result']['data']['masa_mengundi'] }}</td>
						</tr>
						<tr>
							<th scope="row">Bil</th>
							<td>{{ $getData['result']['data']['bil'] }}</td>
						</tr>
															<tr>
							<td colspan="2" class="text-center muted">{{ $getData['result']['data']['info'] }}</td>
						</tr>
					</tbody>                                
				</table>
			@elseif($getData['result']['code'] == 204)
					Rekod Tidak Ditemui.
			@endif
	@endforeach
