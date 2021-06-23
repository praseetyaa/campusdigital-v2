@extends('template.main')

@section('title', 'Cabang | ')

@section('content')

<!-- Page top Section end -->
<section class="page-top-section set-bg ">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 order-2 order-lg-1 text-center text-lg-left">
        <h1>Cabang</h1>
        <h4 class="font-weight-normal">Cabang kami yang tersebar<br>di seluruh Kota Semarang</h4>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 mb-3 mb-lg-0 text-center">
        <img class="h-auto mb-3 mb-lg-0 img-header" src="{{asset('assets/images/illustration/min/5469.png')}}" alt="banner">
      </div>
    </div>
  </div>
</section>
<!-- Page top Section end -->

<!-- Info Section -->
<section class="info-section spad pt-5">
  <div class="container">
    <div class="row">
        @if(count($cabang)>0)
            @foreach($cabang as $data)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white">{{ $data->nama_cabang }}</div>
                    <div class="card-body">
                        <p class="card-text mb-0"><i class="fa fa-home mr-2"></i>{{ $data->alamat_cabang }}</p>
                        <p class="card-text mb-0"><i class="fa fa-whatsapp mr-2"></i><a href="https://wa.me/{{ $data->nomor_telepon_cabang }}" target="_blank">Hubungi Cabang</a></p>
                        <p class="card-text mb-0"><i class="fa fa-instagram mr-2"></i><a href="https://instagram.com/{{ $data->instagram_cabang }}" target="_blank">{{ $data->instagram_cabang }}</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        @endif
    </div>
  </div>
</section>
<!-- Info Section end -->

@endsection

@section('css-extra')

<style type="text/css">
  .info-text {padding-top: 0;}
</style>

@endsection