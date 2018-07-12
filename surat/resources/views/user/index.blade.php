@extends('layouts.admin')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-12">
		  	<div class="card card-info">
				<div class="card-header">
					<h3 class="card-title">Data User</h3>
					<div class="card-title pull-right">
						<a href="{{route('user.create')}}">Tambah Data</a>
					</div>
				</div>
				
				<div class="card-body table-responsive p-0">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Username</th>
								<th>Nama Lengkap</th>
								<th>Hak Akses</th>
								<th>Avatar</th>
								<th colspan="3" style="text-align: center;">Action</th>
							</tr>
						</thead>
					
						<tbody>
							@php
							$no = 1;
							@endphp
							@foreach ($user as $data)
							<tr>
								<td>{{ $no++ }}</td>
								<td>{{ $data->username }}</td>
								<td>{{ $data->name }}</td>
								<td>
									@foreach($data->Role as $role)
										{{ $role->name }}
									@endforeach
								</td>
								<td>
								<img src="{{ asset('/assets/img/avatar/'.$data->avatar.'') }}" width="50" height="50">
								</td>
								<td>
									<a href="{{ route('user.edit', $data->id) }}" class="btn btn-warning">Edit</a>
								</td>
								<td>
									<form action="{{ route('user.destroy', $data->id) }}" method="post">
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