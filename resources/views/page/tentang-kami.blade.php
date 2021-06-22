@extends('template.main')

@section('title', 'Tentang Kami | ')

@section('content')

<section class="page-top-section">
  <div class="container">
    <div class="row align-items-center header-one">
      <div class="col-lg-6 order-2 order-lg-1 text-center text-lg-left">
        <h1>Tentang Kami</h1>
        <p class="mb-0">Era digital telah berkembang pesat, kebutuhan terhadap tenaga digital marketing semakin tinggi dalam melaksanakan marketing di dunia online dan digital. Oleh karena itu kami hadir untuk melahirkan SDM yang memiliki kompetensi di bidang digital marketing.</p>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 mb-3 mb-lg-0 text-center">
        <img class="h-auto img-header" src="{{asset('assets/images/illustration/min/7747.png')}}" alt="banner">
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-6 order-2 mb3 mb-lg-0 text-center text-lg-left">
        <h1>Mengapa Kami?</h1>
        <p class="mb-0">Dengan memiliki mentor yang ahli di bidangnya, lulusan Campus Digital kami harap akan menjadi tenaga kerja baru di bidang teknologi digital marketing atau menjadi wirausaha yang memiliki marketing online yang handal.</p>
      </div>
      <div class="col-lg-6 order-1 text-center">
        <img class="h-auto img-header" src="{{asset('assets/images/illustration/min/5237.png')}}" alt="banner">
      </div>
    </div>
  </div>
</section>
<section class="info-section spad">
  <div class="container">
    <div class="info-text">
      <div class="heading mb-4 text-center">
        <h1>Mentor Kami</h1>
        <p>Campus Digital memiliki mentor yang ahli di bidangnya</p>
      </div>
      <div class="feature-item">
        <div class="owl-carousel owl-theme" id="mentor">
          @foreach($mentor as $data)
          <div class="text-center">
            <img src="{{ asset('assets/images/mentor/'.$data->foto_mentor) }}" class="mb-3 mx-auto" alt="Mentor Campusdigital" style="width: 150px!important; border-radius: 50%!important; border: 2px solid #340369;">
            <div class="h5">{{ $data->nama_mentor }}</div>
            <p>{{ $data->profesi_mentor }}</p>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
<section class="contact-section spad pt-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-4">
        <h1>Kontak Kami</h1>
        <div class="card py-2 px-3">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-md-6">
                <a href="/"><img class="mb-3" src="{{ asset('assets/images/logo/logo-dark.png')}}" width="200" alt="logo-campusdigital"></a>
              </div>
              <div class="col-md-6">
                <ul class="list-unstyled">
                  <li class="mb-2 d-flex align-items-center"><i class="fa fa-envelope-o mr-2" style="font-size: 20px; color: #33B6E7"></i><a class="text-body" href="mailto:{{ setting('site.email') }}">{{ setting('site.email') }}</a></li>
                  <li class="mb-2 d-flex align-items-center"><i class="fa fa-whatsapp mr-2" style="font-size: 22px; color: #1AD03F"></i><a class="text-body" href="https://wa.me/{{ setting('site.whatsapp') }}" target="_blank">{{ setting('site.whatsapp') }}</a></li>
                  <li></li>
                  <li class="mb-2 d-flex align-items-center"><i class="fa fa-instagram mr-2" style="font-size: 22px; color: #912EB9;"></i><a class="text-body" href="https://instagram.com/campusdigital.id" target="_blank">campusdigital.id</a></li>
                  <li></li>
                  <li class="mb-2 d-flex align-items-center"><i class="fa fa-facebook-square mr-2" style="font-size: 22px; color: #1773EA;"></i><a class="text-body" href="https://www.facebook.com/campusdigital.id/?ref=py_c" target="_blank">campusdigital</a></li>
                  <li></li>
                  <li class="mb-2 d-flex align-items-center"><i class="fa fa-youtube-play mr-2" style="font-size: 22px; color: #F70000;"></i><a class="text-body" href="https://www.youtube.com/channel/UCz6opXZW_HqPU6RQlfxOS9w" target="_blank">Campus Digital</a></li>
                  <li></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4 maps">
        {!! html_entity_decode(setting('site.google_maps')) !!}
      </div>
    </div>
</section>

@endsection

@section('css-extra')

<style type="text/css">
  .info-text {padding-top: 0;}
  .header-one{margin-bottom: 8rem;}
  @media (max-width: 991.98px) { .header-one{margin-bottom: 4rem;} .spad{padding: 3em 0} }
</style>

@endsection

@section('js-extra')

<script type="text/javascript">
$('#mentor').owlCarousel({
  loop:true,
  autoplay:true,
  autoplayTimeout:2000,
  autoplayHoverPause:true,
  margin:10,
  responsiveClass:true,
  responsive:{
      0:{
          items:1,
          nav:false,
          loop:true,
      },
      576:{
          items:2,
          nav:false,
          loop:true,
      },
      768:{
          items:3,
          nav:false,
          loop:true,
      },
      1024:{
          items:4,
          nav:false,
          loop:false,
          loop:true,
      },
      1440:{
          items:5,
          nav:false,
          loop:false,
          loop:true,
      },
  }
});
</script>

@endsection