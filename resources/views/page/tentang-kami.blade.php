@extends('template.main')

@section('title', 'Tentang Kami | ')

@section('content')

<section class="page-top-section pb-0">
  <div class="container">
    <div class="header-one">
      {{-- <div class="col-lg-6 order-2 order-lg-1 text-center text-lg-start"> --}}
      <div class="section_about mb-4 row align-items-center">
        <div class="col-12 mb-3">
          <div class="text-center"><img src="{{ asset('assets/images/logo/'.setting('site.logo')) }}" alt="logo-campusdigital" class="logoCdProfile"></div>
        </div>
        <div class="col-12">
          <p>&emsp;&emsp;Era Digital memberi pengaruh terhadap perkembangan teknologi yang sangat cepat. Perkembangan teknologi mendorong setiap pribadi untuk selalu siap berubah dan bertumbuh. Persaingan dunia usaha dan dunia industri di era digital juga semakin ketat. Hadirnya persaingan yang ketat di dunia usaha dan industri menuntut dukungan sumber daya manusia yang professional dan kompeten. Kebutuhan akan SDM yang professional dan kompeten melahirkan  Campus Digital untuk menyajikan program pendidikan dan pelatihan dalam rangka peningkatan kompetensi sumber daya manusia yang unggul.</p>
          <p>&emsp;&emsp;Campus Digital merupakan Lembaga Pendidikan dan Pelatihan di bidang bisnis dan teknologi digital. Campus Digital adalah salah satu unit bisnis pada PT Campus Data Media, sebuah perusahaan yang bergerak di bidang Jasa Teknologi Informasi yang beraktifitas sejak tahun 2001.</p>
          <p>&emsp;&emsp;Selaras dengan program pemerintah dalam upaya mempersiapkan SDM Unggul. Campus Digital hadir untuk turut serta memberikan pilihan terbaik bagi masyarakat agar bisa mendapatkan akses pendidikan dan pelatihan yang sesuai dengan kebutuhan Industri, Dunia Usaha dan Kerja (IDUKA).</p>
          <p>&emsp;&emsp;Campus Digital bekerjasama dengan instansi pemerintah maupun swasta serta beberapa Industri, Dunia Usaha dan Kerja (IDUKA) dan sekolah. Hal ini terus diupayakan agar sistem pembelajaran terjadi link and Match antara lembaga pendidikan dengan Industri, Dunia Usaha dan Kerja (IDUKA). Dengan begitu, akan terbentuk SDM-SDM Unggul yang mempunyai kompetensi sesuai dengan kebutuhan Industri, Dunia Usaha dan Kerja (IDUKA).</p>
        </div>
      </div>  
      <div class="section_visi mb-5">
        <div style="background-color: var(--primary-s); border-radius: 1rem 1rem 0 0;" class="py-4 text-center">
          <h2>Campus Digital</h2>
          <h5 class="fw-normal">The House Of Profesional Digital Technopreneur</h5>
        </div>
        <div class="bg-light p-4" style="border-radius: 0 0 1rem 1rem;">
          <div class="row">
            <div class="col-lg-6">
              <h1>Visi</h1>
              <p>Menjadi perusahaan yang unggul dan terpercaya dalam pelayanan jasa Pendidikan dan Pelatihan di bidang Teknologi Digital dan Bisnis</p>
            </div>
            <div class="col-lg-6">
              <h1>Misi</h1>
              <ul>
                <li>Menyediakan layanan program Pendidikan dan pelatihan yang berkualitas</li>
                <li>Membangun karakter sumber daya manusia yang kompeten dan profesional</li>
                <li>Membangun tim yang solid, unggul, dan amanah</li>
                <li>Menyajikan solusi bagi semua mitra bisnis untuk meraih cita-cita mulianya</li>
                <li>Menjadi model pengelolaan bisnis yang menguntungkan dan mensejahterakan</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="section_budaya mb-5">
          <div class="heading text-center">
            <h1>Budaya Kerja</h1>
          </div>
          <div class="row justify-content-center mt-4">
            <div class="col-md-6 col-lg-4 mb-3 d-flex align-items-stretch">
              <div class="service-item d-flex align-items-start p-3">
                <img class="bg-light p-1 mb-2 me-3 rounded-circle" src="https://image.flaticon.com/icons/svg/3736/3736600.svg" width="80">
                <div>
                  <h5>Commitment (Memegang Teguh Komitmen)</h5>
                  <p>Memegang teguh komitmen yang telah kami buat., amanah, bertanggung jawab dan saling percaya satu sama lain.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3 d-flex align-items-stretch">
              <div class="service-item d-flex align-items-start p-3">
                <img class="bg-light p-1 mb-2 me-3 rounded-circle" src="https://image.flaticon.com/icons/svg/2786/2786583.svg" width="80">
                <div>
                  <h5>Add Value (Menambah Nilai)</h5>
                  <p>Selalu memberikan nilai tambah bagi pelanggan, bagi mitra bisnis, bagi lingkungan  sekitar dan masyarakat dunia.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3 d-flex align-items-stretch">
              <div class="service-item d-flex align-items-start p-3">
                <img class="bg-light p-1 mb-2 me-3 rounded-circle" src="https://image.flaticon.com/icons/svg/5170/5170221.svg" width="80">
                <div>
                  <h5>Mutual Respect (Saling Menghormati dan Menghargai)</h5>
                  <p>Selalu saling menghargai hasil usaha kontribusi pihak lain. Keterbukaan dan kejelasan informasi dan komunikasi sangat penting, selalu saling membuka diri untuk perbaikan kualitas kinerja kami.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3 d-flex align-items-stretch">
              <div class="service-item d-flex align-items-start p-3">
                <img class="bg-light p-1 mb-2 me-3 rounded-circle" src="https://image.flaticon.com/icons/svg/5170/5170063.svg" width="80">
                <div>
                  <h5>Professional (Menjaga Sikap Profesionalisme)</h5>
                  <p>Memanfaatkan keahlian untuk pencapaian target-target perusahaan secara efektif, efisien dan optimal, selalu berfikir, bersikap dan bertindak hati-hati.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3 d-flex align-items-stretch">
              <div class="service-item d-flex align-items-start p-3">
                <img class="bg-light p-1 mb-2 me-3 rounded-circle" src="https://image.flaticon.com/icons/svg/5156/5156874.svg" width="80">
                <div>
                  <h5>Ultimate (Unggul)</h5>
                  <p>Sadar bahwa untuk menjadi yang terbaik dan memberikan yang terbaik, memutuskan untuk melakukan sesuatu melebihi standard dan rata-rata orang lain.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3 d-flex align-items-stretch">
              <div class="service-item d-flex align-items-start p-3">
                <img class="bg-light p-1 mb-2 me-3 rounded-circle" src="https://image.flaticon.com/icons/svg/5156/5156788.svg" width="80">
                <div>
                  <h5>Service Excellent ( Pelayanan yang Bermutu)</h5>
                  <p>Memberikan pelayanan yang bermutu, bekerja dan melayani dengan baik saja tidak cukup, harus bekerja dengan predikat yang luar biasa.</p>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="section_kelebihan mb-5">
        <div class="heading text-center mb-4">
          <h1>Kelebihan Campus Digital</h1>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <li>Instruktur yang tersertifikasi</li>
            <li>Video Pembelajaran yang aplikatif</li>
            <li>Peluang berkarir di Perusahaan mitra</li>
            <li>Pengelola dan instruktur tersertifikasi</li>
            <li>Modul Pembelajaran selalu up to date</li>
          </div>
          <div class="col-lg-6">
            <li>Lokasi yang strategis dan mudah dijangkau</li>
            <li>Kerjasama dengan instansi pemerintah maupun swasta</li>
            <li>Peserta berkesempatan mendapatkan sertifikasi kompetensi</li>
            <li>Waktu belajar yang fleksibel bisa belajar kapan dan dimana saja</li>
            <li>Program affiliate yang memberi potensi penghasilan langsung  peserta</li>
            <li>Mentor dan instruktur merupakan praktisi bisnis dan teknologi digital tersertifikasi</li>
          </div>
        </div>
      </div>
      <div class="section_fasilitas mb-5">
        <div class="text-center">
          <h1>Fasilitas dan Sarana</h1>
        </div>
        <ol>
          <li>Musholla</li>
          <li>LED Proyektor</li>
          <li>Komputer dan Internet</li>
          <li>Ruangan yang nyaman dan ber-AC</li>
          <li>Materi e-book dan video pembelajaran</li>
        </ol>
      </div>
      <div class="section_why d-flex align-items-center bg-light py-3 px-4 rounded-1">
        <img src="https://image.flaticon.com/icons/svg/5375/5375522.svg" width="80" class="bg-white rounded-circle p-1 me-3" alt="">
        <div>
          <h1>Mengapa Kami?</h1>
          <p>Dengan memiliki mentor yang ahli di bidangnya, lulusan Campus Digital kami harap akan menjadi tenaga kerja baru di bidang teknologi digital marketing atau menjadi wirausaha yang memiliki marketing online yang handal.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="contact-section spad pt-0">
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
</section>

@endsection

@section('css-extra')

<style type="text/css">
  .info-text {padding-top: 0;}
  .header-one{margin-bottom: 8rem;}
  .header-one p, .header-one li{text-align: justify;}
  .section_kelebihan li{margin-bottom: .5rem;}
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