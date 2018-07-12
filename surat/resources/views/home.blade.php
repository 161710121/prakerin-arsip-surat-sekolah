@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $sm }}</h3>
      
                    <p>Surat Masuk</p>
                </div>
     
                <div class="icon">
                    <i class="ion ion-email"></i>
                </div>
                    <a href="{{ route('surat_masuk.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $sk }}</h3>
              
                            <p>Surat Keluar</p>
                        </div>
             
                        <div class="icon">
                            <i class="fa fa-envelope-open"></i>
                        </div>
                            <a href="{{ route('surat_keluar.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->

                    <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{ $in }}</h3>
                      
                                    <p>Instansi</p>
                                </div>
                     
                                <div class="icon">
                                    <i class="fa fa-building"></i>
                                </div>
                                    <a href="{{ route('instansi.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->

                            <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-primary">
                                        <div class="inner">
                                            <h3>{{ $us }}</h3>
                              
                                            <p>User</p>
                                        </div>
                             
                                        <div class="icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                            <a href="{{ route('user.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
        </div>
    
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as {{ Auth::user()->name }}!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
