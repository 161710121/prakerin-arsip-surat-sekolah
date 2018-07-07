@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="card card-primary">
	<div class="card-header">
	  <h3 class="card-title">Edit Data Instansi</h3>
		<a class="card-title pull-right" href="{{route('instansi.index')}}">Kembali</a>
	</div>
	<!-- /.card-header -->
	<!-- form start -->
	<div class="panel-body">
			<form action="{{ route('instansi.update',$instansi->id) }}" method="post">
					<input name="_method" type="hidden" value="PATCH">
			{{ csrf_field() }}

			<div class="form-group row">
					<label for="nama_instansi" class="col-md-4 col-form-label text-md-right">{{ __('Nama Instansi') }}</label>

					<div class="col-md-6">
						<input id="nama_instansi" type="text" class="form-control{{ $errors->has('nama_instansi') ? ' is-invalid' : '' }}" name="nama_instansi" value="{{ old('nama_instansi') }}" required autofocus>

						@if ($errors->has('nama_instansi'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('nama_instansi') }}</strong>
							</span>
						@endif
					</div>
				</div>
				
			<div class="form-group row">
					<label for="kab_kota" class="col-md-4 col-form-label text-md-right">{{ __('Kab Kota') }}</label>

					<div class="col-md-6">
						<input id="kab_kota" type="text" class="form-control{{ $errors->has('kab_kota') ? ' is-invalid' : '' }}" name="kab_kota" value="{{ old('kab_kota') }}" required autofocus>

						@if ($errors->has('kab_kota'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('kab_kota') }}</strong>
							</span>
						@endif
					</div>
				</div>
				
			<div class="form-group row">
					<label for="telp" class="col-md-4 col-form-label text-md-right">{{ __('Telp') }}</label>

					<div class="col-md-6">
						<input id="telp" type="text" class="form-control{{ $errors->has('telp') ? ' is-invalid' : '' }}" name="telp" value="{{ old('telp') }}" required autofocus>

						@if ($errors->has('telp'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('telp') }}</strong>
							</span>
						@endif
					</div>
				</div>
				
			<div class="form-group row">
					<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

					<div class="col-md-6">
						<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

						@if ($errors->has('email'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
						@endif
					</div>
				</div>
				
			<div class="form-group row">
					<label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

					<div class="col-md-6">
						<input id="alamat" aria-colspan="3" type="text" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat" value="{{ old('alamat') }}" required autofocus>

						@if ($errors->has('alamat'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('alamat') }}</strong>
							</span>
						@endif
					</div>
				</div>
				
			<div class="form-group row">
					<label for="kepala" class="col-md-4 col-form-label text-md-right">{{ __('Kepala') }}</label>

					<div class="col-md-6">
						<input id="kepala" type="text" class="form-control{{ $errors->has('kepala') ? ' is-invalid' : '' }}" name="kepala" value="{{ old('kepala') }}" required autofocus>

						@if ($errors->has('kepala'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('kepala') }}</strong>
							</span>
						@endif
					</div>
				</div>
				
			<div class="form-group row">
					<label for="nip_kepala" class="col-md-4 col-form-label text-md-right">{{ __('NIP Kepala') }}</label>

					<div class="col-md-6">
						<input id="nip_kepala" type="number" class="form-control{{ $errors->has('nip_kepala') ? ' is-invalid' : '' }}" name="nip_kepala" value="{{ old('nip_kepala') }}" required autofocus>

						@if ($errors->has('nip_kepala'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('nip_kepala') }}</strong>
							</span>
						@endif
					</div>
				</div>
				
	  <!-- /.card-body -->

	  <div class="card-footer">
		<button type="submit" class="btn btn-primary">Submit</button>
	  </div>
	</form>
  </div>
  @endsection