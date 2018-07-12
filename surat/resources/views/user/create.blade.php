@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="card card-primary">
	<div class="card-header">
	  <h3 class="card-title">Tambah Data User</h3>
		<a class="card-title pull-right" href="{{route('user.index')}}">Kembali</a>
	</div>
					</div>
	<!-- /.card-header -->
	<!-- form start -->
	<div class="panel-body">
		<form action="{{ route('user.store') }}" method="post">
			{{ csrf_field() }}

			<div class="form-group row">
					<label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

					<div class="col-md-6">
						<input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

						@if ($errors->has('username'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('username') }}</strong>
							</span>
						@endif
					</div>
				</div>
				
			<div class="form-group row">
					<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>

					<div class="col-md-6">
						<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

						@if ($errors->has('name'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('name') }}</strong>
							</span>
						@endif
					</div>
				</div>

				<div class="form-group row">
						<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
	
						<div class="col-md-6">
							<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required autofocus>
	
							@if ($errors->has('password'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
							@endif
						</div>
					</div>

					<div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
				
			<div class="form-group row">
					<label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Avatar') }}</label>

					<div class="col-md-6">
						<input id="avatar" type="file" class="form-control{{ $errors->has('avatar') ? ' is-invalid' : '' }}" name="avatar" value="{{ old('avatar') }}" required autofocus>

						@if ($errors->has('avatar'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('avatar') }}</strong>
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
				</div>
			</div>
		</div>
	</div>
  @endsection