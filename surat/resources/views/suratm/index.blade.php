@extends('layouts.admin')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-12">
		  	<div class="card card-info">
				<div class="card-header">
					<h3 class="card-title">Data Table Surat Masuk</h3>
					<div class="card-title pull-right">
						<a href="{{route('surat_masuk.create')}}">Tambah Data</a>
					</div>
				</div>
				
				<div class="card-body table-responsive p-0">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Nomor Surat</th>
								<th>Tanggal Surat</th>
								<th>Pengirim</th>
								<th>Perihal</th>
								<th>Instansi</th>
								<th>Disposisi</th>
								<th>Keterangan Disposisi</th>
								<th colspan="3" style="text-align: center;">Action</th>
							</tr>
						</thead>
					
						<tbody>
							@php
							$no = 1;
							@endphp
							@foreach ($surat_masuk as $data)
							<tr>
								<td>{{ $no++ }}</td>
								<td>{{ $data->no_surat }}</td>
								<td>{{ $data->tgl_surat }}</td>
								<td>{{ $data->pengirim }}</td>
								<td>{{ $data->perihal }}</td>
								<td>{{ $data->SMInstansi->nama_instansi }}</td>
								<td>{{ $data->SMDisposisi->disposisi }}</td>
								<td>{{ $data->ket_disposisi }}</td>
								<td>
									<a href="{{ route('surat_masuk.edit', $data->id) }}" class="btn btn-warning">Edit</a>
								</td>
								<td>
									<a href="{{ route('surat_masuk.show', $data->id) }}" class="btn btn-success">Show</a>
								</td>
								<td>
									<form action="{{ route('surat_masuk.destroy', $data->id) }}" method="post">
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
</section>
@endsection