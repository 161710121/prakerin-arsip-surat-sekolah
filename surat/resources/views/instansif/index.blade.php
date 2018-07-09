@extends('layouts.admin')
@section('content')
		<section class="content">
			<div class="row">
			  <div class="col-12">
				<div class="card">
				  <div class="card-header">
					<h3 class="card-title">Data Table Instansi</h3>
					<div class="card-title pull-right">
							<a href="{{route('instansi.create')}}">Tambah Data</a>
						</div>
				  </div>
				  <!-- /.card-header -->
				  <div class="card-body">
					<div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
					<div class="row">
						<div class="col-sm-6">
							<div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
								<div class="row">
									<div class="col-sm-6">
										<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
					  
								<thead>
									<tr role="row">
										<th class="sorting" tabindex="0" aria-controls="example1" aria-label="No: activate to sort column ascending" style="width: 5px;">No</th>

										<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Nama Instansi: activate to sort column descending" style="width: 250px;" aria-sort="ascending">Nama Instansi</th>

										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Kab Kota: activate to sort column ascending" style="width: 165px;">Kab Kota</th>

										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Telp: activate to sort column ascending" style="width: 250px;">Telp</th>

										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="E-mail: activate to sort column ascending" style="width: 250px;">E-mail</th>

										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Alamat: activate to sort column ascending" style="width: 250px;">Alamat</th>

										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Kepala: activate to sort column ascending" style="width: 250px;">Kepala</th>

										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="NIP Kepala: activate to sort column ascending" style="width: 250px;">NIP Kepala</th>
										
										<th colspan="3"  tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 250px;">Action</th>
									</tr>
					  </thead>
					  <tbody>
							@php
							$no = 1;
						@endphp
						@foreach ($instansi as $data)
					  
					<tr role="row" class="odd">
						<td class="sorting_1">{{ $no++ }}</td>
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
								<button type="submit" class="btn btn-danger">Delete</button>
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
		</div>
		</section>

  @endsection