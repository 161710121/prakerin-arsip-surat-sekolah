@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="card card-primary">
	<div class="card-header">
	  <h3 class="card-title">Edit Data Disposisi</h3>
		<a class="fa fa-arrow-circle-left card-title pull-right" href="{{route('disposisi.index')}}"> Kembali</a>
	</div>
					</div>
	<!-- /.card-header -->
	<!-- form start -->
	<div class="panel-body">
			<form action="{{ route('disposisi.update',$disposisi->id) }}" method="post">
					<input name="_method" type="hidden" value="PATCH">
			{{ csrf_field() }}

			<div class="form-group row">
					<label for="disposisi" class="col-md-4 col-form-label text-md-right">{{ __('Disposisi') }}</label>

					<div class="col-md-6">
						<input id="disposisi" type="text" class="form-control{{ $errors->has('disposisi') ? ' is-invalid' : '' }}" name="disposisi" value="{{ $disposisi->disposisi }}" >

						@if ($errors->has('disposisi'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('disposisi') }}</strong>
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