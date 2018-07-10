@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="card card-primary">
	<div class="card-header">
	  <h3 class="card-title">Tambah Data Surat Keluar</h3>
		<a class="card-title pull-right" href="{{route('surat_keluar.index')}}">Kembali</a>
	</div>
	<!-- /.card-header -->
	<!-- form start -->
	<div class="panel-body">
		<form action="{{ route('surat_keluar.store') }}" method="post">
			{{ csrf_field() }}

			<div class="form-group row">
					<label for="no_surat" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Surat') }}</label>

					<div class="col-md-6">
						<input id="no_surat" type="text" class="form-control{{ $errors->has('no_surat') ? ' is-invalid' : '' }}" name="no_surat" value="{{ old('no_surat') }}" required autofocus>

						@if ($errors->has('no_surat'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('no_surat') }}</strong>
							</span>
						@endif
					</div>
				</div>
				
			<div class="form-group row">
					<label for="tgl_surat" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Surat') }}</label>

					<div class="col-md-6">
						<input id="tgl_surat" type="text" class="form-control{{ $errors->has('tgl_surat') ? ' is-invalid' : '' }}" name="tgl_surat" value="{{ old('tgl_surat') }}" required autofocus>

						@if ($errors->has('tgl_surat'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('tgl_surat') }}</strong>
							</span>
						@endif
					</div>
				</div>
				
			<div class="form-group row">
					<label for="pengirim" class="col-md-4 col-form-label text-md-right">{{ __('Pengirim') }}</label>

					<div class="col-md-6">
						<input id="pengirim" type="text" class="form-control{{ $errors->has('pengirim') ? ' is-invalid' : '' }}" name="pengirim" value="{{ old('pengirim') }}" required autofocus>

						@if ($errors->has('pengirim'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('pengirim') }}</strong>
							</span>
						@endif
					</div>
				</div>
				
			<div class="form-group row">
					<label for="perihal" class="col-md-4 col-form-label text-md-right">{{ __('Perihal') }}</label>

					<div class="col-md-6">
						<input id="perihal" type="text" class="form-control{{ $errors->has('perihal') ? ' is-invalid' : '' }}" name="perihal" value="{{ old('perihal') }}" required autofocus>

						@if ($errors->has('perihal'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('perihal') }}</strong>
							</span>
						@endif
					</div>
				</div>
				
			<div class="form-group row">
					<label for="tertuju" class="col-md-4 col-form-label text-md-right">{{ __('Tertuju') }}</label>

					<div class="col-md-6">
						<input id="tertuju" type="text" class="form-control{{ $errors->has('tertuju') ? ' is-invalid' : '' }}" name="tertuju" value="{{ old('tertuju') }}" required autofocus>

						@if ($errors->has('tertuju'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('tertuju') }}</strong>
							</span>
						@endif
					</div>
				</div>
				
			<div class="form-group row">
					<label for="id_instansis" class="col-md-4 col-form-label text-md-right">{{ __('Instansi') }}</label>

					<div class="col-md-6">
						<select name="id_instansis" class="form-control">
							@foreach($instansi as $a)
						<option value="{{ $a->id}}">{{$a->nama_instansi}}</option>
							@endforeach
						</select>

						@if ($errors->has('id_instansis'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('id_instansis') }}</strong>
							</span>
						@endif
					</div>
				</div>
				
			<div class="form-group row">
					<label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

					<div class="col-md-6">
						<input id="alamat" type="number" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat" value="{{ old('alamat') }}" required autofocus>

						@if ($errors->has('alamat'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('alamat') }}</strong>
							</span>
						@endif
					</div>
				</div>

				<div class="form-group row">
						<label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Disposisi') }}</label>
	
						<div class="col-md-6">
								<select name="id_disposisi" class="form-control">
										@foreach($disposisi as $a)
									<option value="{{ $a->id}}">{{$a->disposisi}}</option>
										@endforeach
									</select>
	
							@if ($errors->has('alamat'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('alamat') }}</strong>
								</span>
							@endif
						</div>
					</div>

					<div class="form-group row">
							<label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>
		
							<div class="col-md-6">
								<input id="alamat" type="number" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat" value="{{ old('alamat') }}" required autofocus>
		
								@if ($errors->has('alamat'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('alamat') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
								<label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>
			
								<div class="col-md-6">
									<input id="alamat" type="number" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat" value="{{ old('alamat') }}" required autofocus>
			
									@if ($errors->has('alamat'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('alamat') }}</strong>
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