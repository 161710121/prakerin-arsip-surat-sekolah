@extends('layouts.admin')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-12">
		  	<div class="card card-info">
				<div class="card-header">
					<h3 class="card-title">Data Instansi</h3>
					<div class="card-title pull-right">
						<a href="{{route('instansi.create')}}">Tambah Data <i class="fa fa-plus"></i></a>
					</div>
				</div>
				
				<div class="card-body table-responsive p-0">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Instansi</th>
								<th>Kab Kota</th>
								<th style="text-align: center;">Telp</th>
								<th>E-mail</th>
								<th style="text-align: center;">Alamat</th>
								<th>Kepala</th>
								<th>NIP Kepala</th>
								<th colspan="3" style="text-align: center;">Action</th>
							</tr>
						</thead>
					
						<tbody>
							@php
							$no = 1;
							@endphp
							@foreach ($instansi as $data)
							<tr>
								<td>{{ $no++ }}</td>
								<td>{{ $data->nama_instansi }}</td>
								<td>{{ $data->kab_kota }}</td>
								<td>{{ $data->telp }}</td>
								<td>{{ $data->email }}</td>
								<td>{{ $data->alamat }}</td>
								<td>{{ $data->kepala }}</td>
								<td>{{ $data->nip_kepala }}</td>
								<td>
									<a href="{{ route('instansi.edit', $data->id) }}" class="btn btn-warning">Edit</a>
								</td>
								<td>
									<a href="{{ route('instansi.show', $data->id) }}" class="btn btn-success">Show</a>
								</td>
								<td>
									<form action="{{ route('instansi.destroy', $data->id) }}" method="post">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="btn btn-danger" onClick="return confirm('Are You Absolutely Sure You Want to Delete the Data?')">Delete</button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection