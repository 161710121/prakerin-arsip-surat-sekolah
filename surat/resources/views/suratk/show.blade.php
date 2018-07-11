@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="panel-title">Lihat Data Surat Keluar</h3>
							<a class="fa fa-arrow-circle-left pull-right" href="{{route('surat_keluar.index')}}" style="font-size:20px"> Kembali</a>
					</div>
				</div>
<!-- /.card-header -->
<!-- form start -->
<div class="panel-body">
	
		<input name="_method" type="hidden" value="PATCH">
			{{ csrf_field() }}

			<div class="form-group row">
				<label for="no_surat" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Surat') }}</label>

					<div class="col-md-6">
						<input id="no_surat" type="text" class="form-control{{ $errors->has('no_surat') ? ' is-invalid' : '' }}" name="no_surat" value="{{ $surat_keluar->no_surat }}" readonly>

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
						<input id="tgl_surat" type="date" class="form-control{{ $errors->has('tgl_surat') ? ' is-invalid' : '' }}" name="tgl_surat" value="{{ $surat_keluar->tgl_surat }}" readonly>

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
						<input id="pengirim" type="text" class="form-control{{ $errors->has('pengirim') ? ' is-invalid' : '' }}" name="pengirim" value="{{ $surat_keluar->pengirim }}" readonly>

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
						<input id="perihal" type="text" class="form-control{{ $errors->has('perihal') ? ' is-invalid' : '' }}" name="perihal" value="{{ $surat_keluar->perihal }}" readonly>

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
						<input id="tertuju" type="text" class="form-control{{ $errors->has('tertuju') ? ' is-invalid' : '' }}" name="tertuju" value="{{ $surat_keluar->tertuju }}" readonly>

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
						@foreach($instansi as $data)
							<input id="id_instansis" type="text" class="form-control{{ $errors->has('id_instansis') ? ' is-invalid' : '' }}" name="id_instansis" value="{{ $data->nama_instansi }}" readonly>
						@endforeach
					

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
						<input id="alamat" type="text" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat" value="{{ $surat_keluar->alamat }}" readonly>

						@if ($errors->has('alamat'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('alamat') }}</strong>
							</span>
						@endif
					</div>
			</div>

				<div class="form-group row">
					<label for="id_disposisi" class="col-md-4 col-form-label text-md-right">{{ __('Disposisi') }}</label>
	
						<div class="col-md-6">
							@foreach($disposisi as $data)
								<input id="id_disposisi" type="text" class="form-control{{ $errors->has('id_disposisi') ? ' is-invalid' : '' }}" name="id_disposisi" value="{{ $data->disposisi }}" readonly>
							@endforeach
	
							@if ($errors->has('id_disposisi'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('id_disposisi') }}</strong>
								</span>
							@endif
						</div>
				</div>

					<div class="form-group row">
						<label for="ket_disposisi" class="col-md-4 col-form-label text-md-right">{{ __('Keterangan Disposisi') }}</label>
		
							<div class="col-md-6">
								<input id="ket_disposisi" type="text" class="form-control{{ $errors->has('ket_disposisi') ? ' is-invalid' : '' }}" name="ket_disposisi" value="{{ $surat_keluar->ket_disposisi }}" readonly>
		
								@if ($errors->has('ket_disposisi'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('ket_disposisi') }}</strong>
									</span>
								@endif
							</div>
					</div>

						<div class="form-group row">
							<label for="file" class="col-md-4 col-form-label text-md-right">{{ __('File') }}</label>
			
								<div class="col-md-6">
									<input id="file" type="text" class="form-control{{ $errors->has('file') ? ' is-invalid' : '' }}" name="file" value="{{ $surat_keluar->file }}" readonly>
			
									@if ($errors->has('file'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('file') }}</strong>
										</span>
									@endif
								</div>
						</div>
						<!-- /.card-body -->
					
		</form>
	</div>
</div>
</div>
</div>
</div>
@endsection