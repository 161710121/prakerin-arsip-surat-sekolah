@extends('layouts.admin')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-12">
		  	<div class="card card-info">
				<div class="card-header">
					<h3 class="card-title">Data Table Disposisi</h3>
					<div class="card-title pull-right">
						<a href="{{route('disposisi.create')}}">Tambah Data</a>
					</div>
				</div>
				
				<div class="card-body table-responsive p-0">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Disposisi</th>
								<th colspan="3" style="text-align: center;">Action</th>
							</tr>
						</thead>
					
						<tbody>
							@php
							$no = 1;
							@endphp
							@foreach ($disposisi as $data)
							<tr>
								<td>{{ $no++ }}</td>
								<td>{{ $data->disposisi }}</td>
								<td>
									<a href="{{ route('disposisi.edit', $data->id) }}" class="btn btn-warning">Edit</a>
								</td>
								<td>
									<a href="{{ route('disposisi.show', $data->id) }}" class="btn btn-success">Show</a>
								</td>
								<td>
									<form action="{{ route('disposisi.destroy', $data->id) }}" method="post">
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