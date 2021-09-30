@extends('template.main')

@section('title', 'Kontak Kami | ')

@section('content')

<section class="page-top-section pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-4 text-center">
        <h1 class="mb-3 mb-lg-0">Kontak Kami</h1>
        <div class="card py-2 px-3">
          <div class="card-body">
            <div class="row align-items-center text-center text-md-start">
              <div class="col-md-6">
                <a href="/"><img class="mb-3" src="{{ asset('assets/images/logo/logo-dark.png')}}" width="200" alt="logo-campusdigital"></a>
              </div>
              <div class="col-md-6">
                <ul class="list-unstyled">
                  <li class="mb-2 d-flex align-items-center"><i class="fa fa-envelope-o me-2" style="font-size: 20px; color: #33B6E7"></i><a class="text-body" href="mailto:{{ setting('site.email') }}">{{ setting('site.email') }}</a></li>
                  <li class="mb-2 d-flex align-items-center"><i class="fa fa-whatsapp me-2" style="font-size: 22px; color: #1AD03F"></i><a class="text-body" href="https://wa.me/{{ setting('site.whatsapp') }}" target="_blank">{{ setting('site.whatsapp') }}</a></li>
                  <li></li>
                  <li class="mb-2 d-flex align-items-center"><i class="fa fa-instagram me-2" style="font-size: 22px; color: #912EB9;"></i><a class="text-body" href="https://instagram.com/campusdigital.id" target="_blank">campusdigital.id</a></li>
                  <li></li>
                  <li class="mb-2 d-flex align-items-center"><i class="fa fa-facebook-square me-2" style="font-size: 22px; color: #1773EA;"></i><a class="text-body" href="https://www.facebook.com/campusdigital.id/?ref=py_c" target="_blank">campusdigital</a></li>
                  <li></li>
                  <li class="mb-2 d-flex align-items-center"><i class="fa fa-youtube-play me-2" style="font-size: 22px; color: #F70000;"></i><a class="text-body" href="https://www.youtube.com/channel/UCz6opXZW_HqPU6RQlfxOS9w" target="_blank">Campus Digital</a></li>
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
  </div>
</section>

@endsection