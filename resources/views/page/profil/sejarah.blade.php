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