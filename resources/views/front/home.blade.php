@extends('template.main')

@section('content')

<!-- Hero Section end -->
<section class="hero-section" style="background: #F6F3FE">
  <div class="container text-left h-100">
    <div class="row h-100">
      <div class="col-lg-12 my-auto">
        <div class="" data-aos="fade-right">
          <div class="text-center text-md-left">
          	<h1 style="color: var(--primary);">Let's Join Us!</h1>
		  	    <h2 class="mb-3" style="color: var(--primary);"><span class="">Digital Technology<br>& Business Class</span></h2>
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
          <div class="text-center text-md-left">
      			<p class="mb-3">Mari bergabung bersama kami untuk<br>mendapatkan ilmunya!</p>
      			<p><a href="{{ route('auth.register') }}" class="btn btn-primary px-5 shadow-sm font-weight-bold" style="background-color: var(--primary-s); color: var(--primary); border-color: var(--primary-s); border-radius: .5rem;">Daftar</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Hero Section end -->

<!-- Why Section end -->
<section class="why-section spad">
  <div class="container">
    <div class="row">
      <div class="col-md-4"  data-aos="fade-down">
        <div class="icon-box-item text-center text-sm-left">
          <div class="ib-icon mx-auto ml-lg-0 mr-lg-4">
            <i class="flaticon-004-assistance"></i>
          </div>
          <div class="ib-text">
            <h5>Riset</h5>
            <p>Bagaimana cara untuk melakukan riset pasar dan produk.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4"  data-aos="fade-down">
        <div class="icon-box-item text-center text-sm-left">
          <div class="ib-icon mx-auto ml-lg-0 mr-lg-4">
            <i class="flaticon-024-laptop"></i>
          </div>
          <div class="ib-text">
            <h5>Social Media Marketing</h5>
            <p>Bagaimana menggunakan social media untuk aktivitas marketing.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4"  data-aos="fade-down">
        <div class="icon-box-item text-center text-sm-left">
          <div class="ib-icon mx-auto ml-lg-0 mr-lg-4">
            <i class="flaticon-032-placeholder"></i>
          </div>
          <div class="ib-text">
            <h5>Marketplace</h5>
            <p>Bagaimana berjualan menggunakan marketplace.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4"  data-aos="fade-down">
        <div class="icon-box-item text-center text-sm-left">
          <div class="ib-icon mx-auto ml-lg-0 mr-lg-4">
            <i class="flaticon-006-smartphone-2"></i>
          </div>
          <div class="ib-text">
            <h5>FB/IG Ads</h5>
            <p>Bagaimana beriklan di Facebook dan Instagram.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4"  data-aos="fade-down">
        <div class="icon-box-item text-center text-sm-left">
          <div class="ib-icon mx-auto ml-lg-0 mr-lg-4">
            <i class="flaticon-016-smartphone"></i>
          </div>
          <div class="ib-text">
            <h5>SEO Dasar</h5>
            <p>Bagaimana agar website nomor satu di halaman Search Engine.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4"  data-aos="fade-down">
        <div class="icon-box-item text-center text-sm-left">
          <div class="ib-icon mx-auto ml-lg-0 mr-lg-4">
            <i class="flaticon-037-responsive"></i>
          </div>
          <div class="ib-text">
            <h5>Desain Web</h5>
            <p>Bagaimana membuat website dan landing page untuk promosi.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Why Section end -->

<!-- CTA Section end -->
<!-- <section class="cta-section set-bg" data-setbg="{{ asset('templates/campusdigital/img/cta-bg.jpg') }}">
  <div class="container" data-aos="fade-down">
    <h2>Materi yang Diajarkan</h2>
    <h5>Materi Internet Marketing disampaikan oleh Praktisi Bisnis Online dan Trainer di Campus Digital.</h5>
    <a href="{{ route('site.halaman.detail', ['permalink' => 'beasiswa']) }}" class="site-btn sb-big">Lihat Selengkapnya</a>
  </div>
</section>
 --><!-- CTA Section end -->

<!-- Help Section -->
<!-- <section class="help-section spad">
  <div class="container">
    <div class="feature-item">
      <div class="row">
        <div class="col-lg-6 text-center mb-4">
          <img src="{{ asset('assets/images/illustration/undraw_book_lover_mkck.svg') }}" style="max-width: 80%;" alt=""  data-aos="fade-down">
        </div>
        <div class="col-lg-6">
          <div class="feature-text text-center text-lg-left" data-aos="fade-down">
            <h2 class="text-white">Program Beasiswa Campus Digital</h2>
            <p class="text-light">Telah dibuka kembali Program Beasiswa Belajar Digital Marketing di Campus Digital. Gabung Segera!!!</p>
            <a href="{{ route('site.halaman.detail', ['permalink' => 'beasiswa']) }}" class="btn-register-2 rounded-2">Detail dan Persyaratan</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- Help Section end -->

<!-- Feature Section -->
<section class="feature-section spad bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 data-aos="fade-down">Mentor Kami</h2>
    </div>
    <div class="feature-item" data-aos="fade-down">
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
</section>
<!-- Feature Section end -->

<!-- Info Section -->
<section class="info-section spad">
  <div class="container">
    <div class="heading text-center" style="margin-bottom: 6em">
      <h2 data-aos="fade-down">Privat dan Kursus Internet Marketing</h2>
    </div>
    <div class="row">
      <div class="col-12 col-lg-4 d-lg-block d-none">
        <img data-aos="fade-down"  class="img-fluid" src="{{asset('assets/images/illustration/undraw_social_thinking_7ule.svg')}}">
      </div>
      <div class="col-12 col-lg-8" style="overflow-x: hidden">
        <div class="content-info">
          <div class="media mb-4" data-aos="fade-right">
            <img width="80" src="{{ asset('assets/images/illustration/icon/computer.svg') }}" class="mr-3 p-2 rounded-3 bg-light shadow" alt="img">
            <div class="media-body bg-theme-1 text-white shadow px-4 py-3" style="border-radius: 2em 2em 2em 0em">
              <span class="m-0 font-weight-bold info-message">Anda Pegawai, Karyawan, Pengusaha Atau Siapapun Yang Ingin Menambah Penghasilan?</span><br>
              <span class="text-white-50 info-message">Kami ada solusinya!! Belajar Online Marketing bersama kami di Campus Digital, di program Kursus Digital Marketing. Jadikan Bisnis Online sebagai sumber penghasilan Anda!!</span>
            </div>
          </div>
          <div class="media mb-4" data-aos="fade-left">
            <div class="media-body bg-light shadow px-4 py-3" style="border-radius: 2em 2em 0em 2em">
              <span class="m-0 font-weight-bold text-dark info-message">Anda Ingin Belajar Bisnis Online Tapi Tidak Cukup Waktu?</span><br>
              <span class="text-muted info-message">Kami siapkan SOLUSInya!!! Kursus Digital Marketing yang kami adakan ini sudah kita siapkan untuk Anda yang sibuk. Pegawai, Karyawan, Mahasiswa, atau siapapun yang memiliki keterbatasan waktu. Kita desain sederhana tapi sangat efektif.</span>
            </div>
            <img width="80" src="{{ asset('assets/images/illustration/icon/computer.svg') }}" class="ml-3 p-2 rounded-3 bg-light shadow" alt="img">
          </div>
          <div class="media mb-4" data-aos="fade-right">
            <img width="80" src="{{ asset('assets/images/illustration/icon/computer.svg') }}" class="mr-3 p-2 rounded-3 bg-light shadow" alt="img">
            <div class="media-body bg-theme-1 text-white shadow px-4 py-3" style="border-radius: 2em 2em 2em 0em">
              <span class="m-0 font-weight-bold info-message">Anda Ingin Usaha Sambilan, Tapi Tidak Punya Cukup Waktu? Atau Malah Tidak Cukup Modal?</span><br>
              <span class="text-white-50 info-message">Campus Digital punya jawabannya!!! Bisnis Online. Bisa dikerjakan paruh waktu dan modal yang relatif terjangkau. Dan bisa dikerjakan siapapun dan di manapun.</span>
            </div>
          </div>
          <div class="media mb-4" data-aos="fade-left">
            <div class="media-body bg-light shadow px-4 py-3" style="border-radius: 2em 2em 0em 2em">
              <span class="m-0 font-weight-bold text-dark info-message">Anda Bingung Kepada Siapa Belajar Online Marketing? Apakah Belajar Online Marketing Harus Mahal?</span><br>
              <span class="text-muted m-0 info-message">Tidak usah BINGUNG!! Pengajar di Kursus Digital Marketing ini merupakan pengajar pilihan. Merupakan mentor dan supervisor terpilih dari Campus Digital. Pengajar kami bukan hanya mumpuni secara TEORI tapi juga bisnis onlinenya berjalan dan terbukti MENGHASILKAN.</span>
            </div>
            <img width="80" src="{{ asset('assets/images/illustration/icon/computer.svg') }}" class="ml-3 p-2 rounded-3 bg-light shadow" alt="img">
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
<section class="mitra-section spad bg-light" style="padding-top: 0">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="h-100 d-flex text-center" style="justify-content: center; align-items: center; width: 100%;">
          <span data-aos="fade-down">
            <h2 class="mb-3">Mitra Kami</h2>
            <span>Campus Digital telah dipercaya sebagai lembaga pelatihan digital marketing<br>dengan melahirkan SDM yang memiliki kompetensi.</span>
          </span>
        </div>
      </div>
      <div class="col-12">
        <div class="feature-item">
          <div data-aos="fade-down">
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


<!-- CTA Section end -->
<section class="cta-section set-bg" data-setbg="{{ asset('templates/campusdigital/img/score-bg.jpg') }}">
  <div class="container">
    <h2 class="text-white"  data-aos="fade-down">Hubungi Kami</h2>
    <h5  data-aos="fade-down" style="color: #9e9fa5;">Daftar privat kursus internet marketing sekarang, atau hubungi kami untuk info lebih lanjut.</h5>
    <div data-aos="fade-down">
      <a href="#" onClick="window.open('https://api.whatsapp.com/send?phone={{ setting('site.whatsapp') }}&text=Halo Campus Digital, saya butuh informasi tentang layanan Campus Digital...', '_blank')" class="site-btn sb-whatsapp sb-big"><i class="fa fa-whatsapp mr-2" style="font-size: 20px;"></i> Hubungi Kami via WhatsApp</a>
    </div>
  </div>
</section>
<!-- CTA Section end -->

<!-- Feature Section -->
<section class="feature-section spad">
  <div class="container">
    <div class="text-center mb-5">
      <h2 data-aos="fade-down">Testimoni</h2>
      <h5 class="text-muted" data-aos="fade-down">Apa yang mereka katakan tentang kami?</h5>
      <div class="bg-feature">
        <span style="position: absolute; left: 0em; font-size: 18rem; color: rgba(0,0,0,.2);">❝</span>
        <span style="position: absolute; right: 0em; font-size: 18rem; color: rgba(0,0,0,.2);">❞</span>
      </div>
    </div>
    <div class="feature-item">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-theme" id="testimoni">
            <div class="card shadow border-0 mx-2" data-aos="fade-down">
              <div class="card-header mx-4 text-center bg-white">
                <div class="container-image w-100 mb-2 mt-5">
                  <div class="fake-image bg-theme-1 rounded-circle p-4" style="width: 100px; margin: 0 auto; position: absolute; top: -3em; left: 0; right: 0; margin-left: auto; margin-right: auto;">
                    <span class="text-white" style="font-size: 2em;">A</span>
                  </div>
                </div>
                <h5>Adiyatma</h5>
              </div>
              <div class="card-body px-4" style="min-height: 10em; max-height: 14em">
                <p>Pembelajaran di kelas ini sangat menyenangkan karena metode diajari step by step sehingga saya mudah sekali memahami.</p>
              </div>      
            </div>
            <div class="card shadow border-0 mx-2" data-aos="fade-down">
              <div class="card-header mx-4 text-center bg-white">
                <div class="container-image w-100 mb-2 mt-5">
                  <div class="fake-image bg-theme-1 rounded-circle p-4" style="width: 100px; margin: 0 auto; position: absolute; top: -3em; left: 0; right: 0; margin-left: auto; margin-right: auto;">
                    <span class="text-white" style="font-size: 2em;">M</span>
                  </div>
                </div>
                <h5>Mila</h5>
              </div>
              <div class="card-body px-4" style="min-height: 10em; max-height: 14em">
                <p>Mentornya sabar mengajari kita-kita yang masih pemula sekali hingga bisa. Saya sarankan bila ingin bisa marketing online mengikuti kelas ini.</p>
              </div>      
            </div>
            <div class="card shadow border-0 mx-2" data-aos="fade-down">
              <div class="card-header mx-4 text-center bg-white">
                <div class="container-image w-100 mb-2 mt-5">
                  <div class="fake-image bg-theme-1 rounded-circle p-4" style="width: 100px; margin: 0 auto; position: absolute; top: -3em; left: 0; right: 0; margin-left: auto; margin-right: auto;">
                    <span class="text-white" style="font-size: 2em;">D</span>
                  </div>
                </div>
                <h5>Dafid</h5>
              </div>
              <div class="card-body px-4" style="min-height: 10em; max-height: 14em">
                <p>Setelah mengikuti kelas ini saya bisa memahami A sampai Z bagaimana memasarkan produk online, diajari secara teknis dan komplit.</p>
              </div>      
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Feature Section end -->

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

@endsection

@section('css-extra')

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
	/*.hero-section {border-top: 5px solid #fdd100!important;}*/
	.hero-section .owl-dots {display: none!important;}
	.help-section {background-color: #46157a;}
	.accordion .card {border-width: 0; border-bottom: 1px solid #e5e5e5!important;}
	.accordion .card .card-header {background-color: rgba(0,0,0,0); padding-left: .5rem; padding-right: .5rem;}
	.feature-text {padding-top: 0;}
</style>

@endsection