@extends('template.main')

@section('content')

<!-- Hero Section end -->
<section class="hero-section">
  <div class="container text-left h-100">
    <div class="row align-items-center h-100">
      <div class="col-lg-5">
        <div class="">
          <div class="text-center text-lg-left">
          	<h1>Let's Join Us!</h1>
		  	    <h2 class="mb-3"><span style="color: var(--primary);">Digital</span> Technology<br>& Business Class</h2>
          </div>
<!--     			<div class="row d-none d-md-flex">
    				<div class="col-6"><p class="text-body"><i class="fa fa-check mr-2"></i>Digital Marketing</p></div>
    				<div class="col-6"><p class="text-body"><i class="fa fa-check mr-2"></i>Programmer</p></div>
    				<div class="col-6"><p class="text-body"><i class="fa fa-check mr-2"></i>Web Developer</p></div>
    				<div class="col-6"><p class="text-body"><i class="fa fa-check mr-2"></i>Game Developer</p></div>
    				<div class="col-6"><p class="text-body"><i class="fa fa-check mr-2"></i>Operator Komputer</p></div>
    				<div class="col-6"><p class="text-body"><i class="fa fa-check mr-2"></i>Multimedia</p></div>
    				<div class="col-6"><p class="text-body"><i class="fa fa-check mr-2"></i>Graphic Designer</p></div>
    			</div> -->
          <div class="text-center text-lg-left">
      			<p class="mb-3">Mari bergabung bersama kami untuk<br>mendapatkan ilmunya!</p>
      			<p><a href="{{ route('auth.register') }}" class="btn btn-primary rounded-15 px-5 shadow-sm font-weight-bold">Daftar</a></p>
          </div>
        </div>
    </div>
    <div class="col-lg-7 text-center">
        <div class="card shadow border-0 front-card-zoom">
          <div class="card-header d-flex align-items-center justify-content-end">
            <i class="fa fa-circle px-1 text-success"></i>
            <i class="fa fa-circle px-1 text-warning"></i>
            <i class="fa fa-circle px-1 text-danger"></i>
          </div>
          <div class="overflow-hidden">
            <a class="popup-youtube" href="https://www.youtube.com/watch?v=AfGz0Z9HGfU">
              <div class="banner-video" style="background-image: url({{asset('assets/images/background/banner.gif')}})">
                <div class="overlay-banner text-center"><i class="fa fa-youtube-play overlay-galery-content"></i></div>
              </div>
            </a>
          </div>
        </div>
    </div>
  </div>
</section>

<section class="mt-3 mt-lg-0">
  <div class="container">
    <div class="d-flex" style="overflow-x: auto;">
      <div class="mr-2" style="white-space: nowrap;">
        <i class="fa fa-check p-1 rounded" style="
        color: var(--green);
        background-color: var(--green-s);">
        </i> 
        <span>Digital Marketing</span>
      </div>
      <div class="mr-2" style="white-space: nowrap;">
        <i class="fa fa-check p-1 rounded" style="
        color: var(--green);
        background-color: var(--green-s);">
        </i> 
        <span>Programmer</span>
      </div>
      <div class="mr-2" style="white-space: nowrap;">
        <i class="fa fa-check p-1 rounded" style="
        color: var(--green);
        background-color: var(--green-s);">
        </i> 
        <span>Web Developer</span>
      </div>
      <div class="mr-2" style="white-space: nowrap;">
        <i class="fa fa-check p-1 rounded" style="
        color: var(--green);
        background-color: var(--green-s);">
        </i> 
        <span>Game Developer</span>
      </div>
      <div class="mr-2" style="white-space: nowrap;">
        <i class="fa fa-check p-1 rounded" style="
        color: var(--green);
        background-color: var(--green-s);">
        </i> 
        <span>Operator Komputer</span>
      </div>
      <div class="mr-2" style="white-space: nowrap;">
        <i class="fa fa-check p-1 rounded" style="
        color: var(--green);
        background-color: var(--green-s);">
        </i> 
        <span>Multimedia</span>
      </div>
      <div class="mr-2" style="white-space: nowrap;">
        <i class="fa fa-check p-1 rounded" style="
        color: var(--green);
        background-color: var(--green-s);">
        </i> 
        <span>Graphic Designer</span>
      </div>
    </div>
  </div>
</section>

<section class="why-section spad pb-0">
  <div class="container">
    <div class="text-center mb-5">
      <h2 >Materi yang Diajarkan</h2>
    </div>
    <div class="row">
      <div class="col-6 col-md-4"  >
        <div class="icon-box-item text-center text-sm-left">
          <div class="ib-icon rounded-15 mx-auto ml-lg-0 mr-lg-4">
           <img src="{{asset('assets/images/icon/analyze.svg')}}" alt="icon">
          </div>
          <div class="ib-text">
            <h5 class="m-0">Riset</h5>
            <p>Bagaimana cara untuk melakukan riset pasar dan produk.</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4"  >
        <div class="icon-box-item text-center text-sm-left">
          <div class="ib-icon rounded-15 mx-auto ml-lg-0 mr-lg-4">
            <img src="{{asset('assets/images/icon/online-shop.svg')}}" alt="icon">
          </div>
          <div class="ib-text">
            <h5 class="m-0">Social Media Marketing</h5>
            <p>Bagaimana menggunakan social media untuk aktivitas marketing.</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4"  >
        <div class="icon-box-item text-center text-sm-left">
          <div class="ib-icon rounded-15 mx-auto ml-lg-0 mr-lg-4">
            <img src="{{asset('assets/images/icon/merchant.svg')}}" alt="icon">
          </div>
          <div class="ib-text">
            <h5 class="m-0">Marketplace</h5>
            <p>Bagaimana berjualan menggunakan marketplace.</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4"  >
        <div class="icon-box-item text-center text-sm-left">
          <div class="ib-icon rounded-15 mx-auto ml-lg-0 mr-lg-4">
            <img src="{{asset('assets/images/icon/marketing.svg')}}" alt="icon">
          </div>
          <div class="ib-text">
            <h5 class="m-0">FB/IG Ads</h5>
            <p>Bagaimana beriklan di Facebook dan Instagram.</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4"  >
        <div class="icon-box-item text-center text-sm-left">
          <div class="ib-icon rounded-15 mx-auto ml-lg-0 mr-lg-4">
            <img src="{{asset('assets/images/icon/analysis.svg')}}" alt="icon">
          </div>
          <div class="ib-text">
            <h5 class="m-0">SEO Dasar</h5>
            <p>Bagaimana agar website nomor satu di halaman Search Engine.</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4"  >
        <div class="icon-box-item text-center text-sm-left">
          <div class="ib-icon rounded-15 mx-auto ml-lg-0 mr-lg-4">
            <img src="{{asset('assets/images/icon/arts.svg')}}" alt="icon">
          </div>
          <div class="ib-text">
            <h5 class="m-0">Desain Web</h5>
            <p>Bagaimana membuat website dan landing page untuk promosi.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="why-section spad">
  <div class="container">
    <div class="text-center mb-5">
      <h2 >Program Kami</h2>
      <p>Program yang disediakan oleh Campus Digital</p>
    </div>
    <div>
      <div class="row">
        <div class="col-6 col-lg-3">
          <div class="card border-0 shadow-sm mb-3">
            <img src="{{asset('assets/images/program/1.jpg')}}" class="card-img-top">
            <div class="card-body">
              <p class="font-weight-bold m-0 text-truncate d-block">Pelatihan Digital Marketing Reguler</p>
              <p class="text-truncate-3 d-none d-md-box">Digital Marketing menjadi hal yang sangat dibutuhkan dalam perkembangan bisnis di era teknologi</p>
              <a href="/program-pelatihan-digital-marketing-reguler" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="card border-0 shadow-sm mb-3">
            <img src="{{asset('assets/images/program/2.jpg')}}" class="card-img-top">
            <div class="card-body">
              <p class="font-weight-bold m-0 text-truncate">Paket Pelatihan dan Sertifikasi Digital Marketing</p>
              <p class="text-truncate-3 d-none d-md-box">Bekerjasama dengan LSP Teknologi Digital mengadakan Program Pelatihan dan Sertifikasi Digital Marketing BNSP</p>
              <a href="/program-paket-pelatihan-dan-sertifikasi-digital-marketing" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="card border-0 shadow-sm mb-3">
            <img src="{{asset('assets/images/program/3.jpg')}}" class="card-img-top">
            <div class="card-body">
              <p class="font-weight-bold m-0 text-truncate">Pelatihan PKDM (Program Kerjasama)</p>
              <p class="text-truncate-3 d-none d-md-box">Peningkatan Kompetensi Digital Marketing bagi tenaga pendidik untuk bekal dalam kegiatan belajar mengajar</p>
              <a href="/program-pelatihan-pkdm-program-kerjasama" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="card border-0 shadow-sm mb-3">
            <img src="{{asset('assets/images/program/4.jpg')}}" class="card-img-top">
            <div class="card-body">
              <p class="font-weight-bold m-0 text-truncate">Praktek Kerja Industri (PRAKERIN Online)</p>
              <p class="text-truncate-3 d-none d-md-box">Peserta yang mengikuti paktek kerja industri Digital Marketing akan diajarkan dan praktek materi Digital Marketing</p>
              <a href="/program-praktek-kerja-industri-prakerin-online" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="card border-0 shadow-sm mb-3">
            <img src="{{asset('assets/images/program/5.jpg')}}" class="card-img-top">
            <div class="card-body">
              <p class="font-weight-bold m-0 text-truncate">Kelas Industri Digital Marketing</p>
              <p class="text-truncate-3 d-none d-md-box">Peserta yang mengikuti kelas industri Digital Marketing akan diajarkan materi sesuai dengan standar dari BNSP</p>
              <a href="/program-kelas-industri-digital-marketing" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="card border-0 shadow-sm mb-3">
            <img src="{{asset('assets/images/program/6.jpg')}}" class="card-img-top">
            <div class="card-body">
              <p class="font-weight-bold m-0 text-truncate">Training Of Trainer</p>
              <p class="text-truncate-3 d-none d-md-box">Pelatihan yang dirancang untuk melatih peserta menjadi trainer Digital Marketing yang handal</p>
              <a href="/program-training-of-trainer" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="card border-0 shadow-sm mb-3">
            <img src="{{asset('assets/images/program/7.jpg')}}" class="card-img-top">
            <div class="card-body">
              <p class="font-weight-bold m-0 text-truncate">Uji Kompetensi Keahlian Digital Marketing (UKK SMK)</p>
              <p class="text-truncate-3 d-none d-md-box">Peserta yang mengikuti Uji Kompetensi Keahlian Digital Marketing akan diuji sesuai dengan standar BNSP</p>
              <a href="/program-uji-kompetensi-keahlian-digital-marketing-ukk-smk" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="card border-0 shadow-sm mb-3">
            <img src="{{asset('assets/images/program/8.jpg')}}" class="card-img-top">
            <div class="card-body">
              <p class="font-weight-bold m-0 text-truncate">Beasiswa</p>
              <p class="text-truncate-3 d-none d-md-box">Mau belajar strategi marketing secara digital? Cara membuat konten digital, menganalisa data digital, mengetahui pemasaran berbasis website? Semua akan dikupas di Campus Digital</p>
              <a href="/program-beasiswa" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="feature-section bg-light pt-5">
  <div class="container">
    <div class="text-center">
      <h2 >Mentor Kami</h2>
      <p>Campus Digital memiliki mentor yang ahli di bidangnya</p>
    </div>
    <div class="feature-item" >
      <div class="owl-carousel owl-theme" id="mentor">
			  @foreach($mentor as $data)
				<div class="card border-0 shadow-sm text-center">
				  <img style="max-width: 120px; position: relative; top: -3rem" src="{{ asset('assets/images/mentor/'.$data->foto_mentor) }}" class="rounded-circle shadow" alt="Mentor Campusdigital">
          <div class="card-body" style="margin-top: -2rem">
  				  <div class="h5">{{ $data->nama_mentor }}</div>
  				  <p>{{ $data->profesi_mentor }}</p>
          </div>
				</div>
			  @endforeach
      </div>
    </div>
  </div>
</section>

<section class="info-section spad">
  <div class="container">
    <div class="heading text-center" style="margin-bottom: 6em">
      <h2 >Privat dan Kursus Internet Marketing</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-12">
      <div class="accordion" id="accordionExample">

        <div class="row">
          <div class="col-lg-6">
            <div class="card border-0 shadow-sm mb-4">
              <div class="card-header rounded-15 border-0" style="background-color: var(--primary-s);" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left d-flex align-items-center justify-content-between btn-collapse collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Anda Pegawai, Karyawan, Pengusaha Atau Siapapun Yang Ingin Menambah Penghasilan?
                  <i class="fa fa-angle-up"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  Kami ada solusinya!! Belajar Online Marketing bersama kami di Campus Digital, di program Kursus Digital Marketing. Jadikan Bisnis Online sebagai sumber penghasilan Anda!!
                </div>
              </div>
            </div>            
          </div>
          <div class="col-lg-6">
            <div class="card border-0 shadow-sm mb-4">
              <div class="card-header rounded-15 border-0" style="background-color: var(--green-s);" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left d-flex align-items-center justify-content-between btn-collapse collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Anda Ingin Belajar Bisnis Online<br>Tapi Tidak Cukup Waktu?
                  <i class="fa fa-angle-up"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  Kami siapkan SOLUSInya!!! Kursus Digital Marketing yang kami adakan ini sudah kita siapkan untuk Anda yang sibuk. Pegawai, Karyawan, Mahasiswa, atau siapapun yang memiliki keterbatasan waktu. Kita desain sederhana tapi sangat efektif.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="card border-0 shadow-sm mb-4">
              <div class="card-header rounded-15 border-0" style="background-color: var(--red-s);" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left d-flex align-items-center justify-content-between btn-collapse collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Anda Ingin Usaha Sambilan, Tapi Tidak Punya Cukup Waktu? Atau Malah Tidak Cukup Modal?
                  <i class="fa fa-angle-up"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  Campus Digital punya jawabannya!!! Bisnis Online. Bisa dikerjakan paruh waktu dan modal yang relatif terjangkau. Dan bisa dikerjakan siapapun dan di manapun.
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card border-0 shadow-sm mb-4">
              <div class="card-header rounded-15 border-0" style="background-color: var(--blue-s);" id="headingFour">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left d-flex align-items-center justify-content-between btn-collapse collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Anda Bingung Kepada Siapa Belajar Online Marketing? Apakah Belajar Online Marketing Harus Mahal?
                  <i class="fa fa-angle-up"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                  Tidak usah BINGUNG!! Pengajar di Kursus Digital Marketing ini merupakan pengajar pilihan. Merupakan mentor dan supervisor terpilih dari Campus Digital. Pengajar kami bukan hanya mumpuni secara TEORI tapi juga bisnis onlinenya berjalan dan terbukti MENGHASILKAN.
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
  </div>
</section>
<!-- Info Section end -->

<!-- Feature Section -->
<div class="custom-shape-divider-bottom-1619236286">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,0V7.23C0,65.52,268.63,112.77,600,112.77S1200,65.52,1200,7.23V0Z" class="shape-fill"></path>
    </svg>
</div>
<section class="mitra-section bg-light">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="h-100 d-flex text-center" style="justify-content: center; align-items: center; width: 100%;">
          <span >
            <h2 class="mb-3">Mitra Kami</h2>
            <span>Campus Digital telah dipercaya sebagai lembaga pelatihan digital marketing<br>dengan melahirkan SDM yang memiliki kompetensi.</span>
          </span>
        </div>
      </div>
      <div class="col-12">
        <div class="feature-item">
          <div >
            <div class="owl-carousel owl-theme" id="mitra">
      			  @foreach($mitra as $data)
      				<div data-toggle="tooltip" data-placement="bottom" title="{{ $data->nama_mitra }}">
        				<img src="{{ asset('assets/images/mitra/'.$data->logo_mitra) }}" alt="Mitra Campusdigital">
      				</div>
      			  @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Feature Section end -->

<!-- Feature Section -->
<section class="feature-section spad pb-0">
  <div class="container">
    <div class="text-center">
      <h2 >Testimoni</h2>
      <p >Apa yang mereka katakan tentang kami?</p>
      <div class="bg-feature">
        <span style="position: absolute; left: 0em; font-size: 18rem; color: rgba(0,0,0,.2);">❝</span>
        <span style="position: absolute; right: 0em; font-size: 18rem; color: rgba(0,0,0,.2);">❞</span>
      </div>
    </div>
    <div class="feature-item">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-theme" id="testimoni">

            <div class="card front-card-zoom">
              <div class="overflow-hidden">
                <a class="popup-youtube" href="https://www.youtube.com/watch?v=k-QpsCmXNX4">
                  <div style="height: 200px; background-position: center; background-size: cover; background-image: url({{asset('assets/images/background/testimoni1.gif')}})">
                    <div class="overlay-galery text-center"><i class="fa fa-youtube-play overlay-galery-content"></i></div>
                  </div>
                </a>
              </div>
            </div>

            <div class="card front-card-zoom">
              <div class="overflow-hidden">
                <a class="popup-youtube" href="https://www.youtube.com/watch?v=9or8bE9KxPc">
                  <div style="height: 200px; background-position: center; background-size: cover; background-image: url({{asset('assets/images/background/testimoni2.gif')}})">
                    <div class="overlay-galery text-center"><i class="fa fa-youtube-play overlay-galery-content"></i></div>
                  </div>
                </a>
              </div>
            </div>

            <div class="card front-card-zoom">
              <div class="overflow-hidden">
                <a class="popup-youtube" href="https://www.youtube.com/watch?v=AfGz0Z9HGfU">
                  <div style="height: 200px; background-position: center; background-size: cover; background-image: url({{asset('assets/images/background/banner.gif')}})">
                    <div class="overlay-galery text-center"><i class="fa fa-youtube-play overlay-galery-content"></i></div>
                  </div>
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Feature Section end -->

<!-- CTA Section end -->
<section class="cta-section set-bg">
  <div class="container d-block d-lg-flex">
    <div class="mr-0 mr-lg-4 mb-3 mb-lg-0 text-center text-lg-left">
      <img src="{{asset('assets/images/illustration/5127311.png')}}" alt="img" width="400">
    </div>
    <div class="text-center text-lg-left">
      <h2  >Hubungi Kami</h2>
      <p >Customer Service Kami Siap Membantu Anda untuk Mendapatkan Informasi Lebih Lanjut Mengenai Program-Program Campus Digital</p>
      <a href="#" onClick="window.open('https://api.whatsapp.com/send?phone={{ setting('site.whatsapp') }}&text=Halo Campus Digital, saya butuh informasi tentang layanan Campus Digital...', '_blank')" class="btn btn-lg btn-success px-4"><i class="fa fa-whatsapp mr-2" style="font-size: 20px;"></i> Hubungi Kami via WhatsApp</a>
    </div>
  </div>
</section>
<!-- CTA Section end -->
@endsection

@section('js-extra')

<script type="text/javascript">
  $(document).ready(function(){
	 $('.hero-slider').owlCarousel({
		loop: true,
		nav: false,
		dots: true,
		mouseDrag: true,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		items: 1,
		autoplay: false
	});
	  
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

    $("#mitra").owlCarousel({
      loop:true,
      autoplay:true,
      autoplayTimeout:2000,
      autoplayHoverPause:true,
      margin:0,
      dots:true,
      responsiveClass:true,
      responsive:{
          0:{
              items:3,
          },
          576:{
              items:4,
          },
          768:{
              items:5,
          },
          992:{
              items:10,
          }
      }
    });

    $('#testimoni').owlCarousel({
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
              items:2,
              nav:false,
              loop:true,
          },
          1024:{
              items:3,
              nav:false,
              loop:true,
          },
      }
    });
  });

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js" integrity="sha512-+m6t3R87+6LdtYiCzRhC5+E0l4VQ9qIT1H9+t1wmHkMJvvUQNI5MKKb7b08WL4Kgp9K0IBgHDSLCRJk05cFUYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('.popup-youtube').magnificPopup({
    type: 'iframe'
  });
});
</script>
@endsection

@section('css-extra')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css" integrity="sha512-nIm/JGUwrzblLex/meoxJSPdAKQOe2bLhnrZ81g5Jbh519z8GFJIWu87WAhBH+RAyGbM4+U3S2h+kL5JoV6/wA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style type="text/css">
	#popupModal .close {position: absolute; right: -15px; top: -15px; background-color: #340369; color: #fdd100; width: 25px; height: 25px; opacity: 1!important;}
	.hero-section {padding-top: 5em; padding-bottom: 0; height: 600px;}
	.hs-text {padding-top: 0; padding-right: 0;}
	.hs-text h2 {font-size: 70px; margin-bottom: 0;}
	.hs-text h3 {font-size: 55px; margin-bottom: 0;}
	.hs-text p {font-size: 20px; margin-bottom: 0; margin-left: 20px;}
	@media only screen and (max-width: 767px) {
		.hs-text {padding-top: 0; margin-bottom: 0;}
		.hs-text h2 {font-size: 50px; margin-bottom: 0;}
		.hs-text h3 {font-size: 35px; margin-bottom: 0;}
		.hs-text p {margin-left: 0;}
	}
	@media only screen and (min-width: 768px) and (max-width: 991px) {
		.hs-text {padding-top: 0; margin-bottom: 0;}
		.hs-text h2 {font-size: 60px; margin-bottom: 0;}
		.hs-text h3 {font-size: 45px; margin-bottom: 0;}
		.hs-text p {margin-left: 0;}
	}
</style>

@endsection