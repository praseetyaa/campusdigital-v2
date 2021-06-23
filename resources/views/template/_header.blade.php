Header Section -->
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
	<div class="container ">
		
		<button class="navbar-toggler mr-2" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fa fa-bars py-2 px-1"></i>
		</button>
		<a class="navbar-brand mr-auto" href="{{ route('site.home') }}">
			<img src="{{ asset('assets/images/logo/'.setting('site.logo')) }}" alt="logo-campusdigital">
		</a>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item {{ Request::path() == '/' ? 'active' : '' }}">
					<a class="nav-link" href="{{ route('site.home') }}">Beranda</a>
				</li>
				<li class="nav-item dropdown {{ strpos(Request::url(), '/program-') ? 'active' : '' }}">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  Program
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item {{ strpos(Request::url(), '/program-pelatihan-digital-marketing-reguler') ? 'active' : '' }}" href="{{ route('site.halaman.detail', ['permalink' => 'program-pelatihan-digital-marketing-reguler']) }}">Pelatihan Digital Marketing Reguler</a>
					  <!-- <div class="dropdown-divider"></div> -->
					  <a class="dropdown-item text-wrap {{ strpos(Request::url(), 'program-paket-pelatihan-dan-sertifikasi-digital-marketing') ? 'active' : '' }}" href="{{ route('site.halaman.detail', ['permalink' => 'program-paket-pelatihan-dan-sertifikasi-digital-marketing']) }}">Paket Pelatihan dan Sertifikasi Digital Marketing</a>
					  <!-- <div class="dropdown-divider"></div> -->
					  <a class="dropdown-item {{ strpos(Request::url(), '/program-pelatihan-pkdm-program-kerjasama') ? 'active' : '' }}" href="{{ route('site.halaman.detail', ['permalink' => 'program-pelatihan-pkdm-program-kerjasama']) }}">Pelatihan PKDM (Program Kerjasama)</a>
					  <!-- <div class="dropdown-divider"></div> -->
					  <a class="dropdown-item {{ strpos(Request::url(), '/program-praktek-kerja-industri-prakerin-online') ? 'active' : '' }}" href="{{ route('site.halaman.detail', ['permalink' => 'program-praktek-kerja-industri-prakerin-online']) }}">Praktek Kerja Industri (PRAKERIN Online)</a>
					  <!-- <div class="dropdown-divider"></div> -->
					  <a class="dropdown-item {{ strpos(Request::url(), '/program-kelas-industri-digital-marketing') ? 'active' : '' }}" href="{{ route('site.halaman.detail', ['permalink' => 'program-kelas-industri-digital-marketing']) }}">Kelas Industri Digital Marketing</a>
					  <!-- <div class="dropdown-divider"></div> -->
					  <a class="dropdown-item {{ strpos(Request::url(), '/program-training-of-trainer') ? 'active' : '' }}" href="{{ route('site.halaman.detail', ['permalink' => 'program-training-of-trainer']) }}">Training Of Trainer</a>
					  <!-- <div class="dropdown-divider"></div> -->
					  <a class="dropdown-item text-wrap {{ strpos(Request::url(), 'program-uji-kompetensi-keahlian-digital-marketing-ukk-smk') ? 'active' : '' }}" href="{{ route('site.halaman.detail', ['permalink' => '/program-uji-kompetensi-keahlian-digital-marketing-ukk-smk']) }}">Uji Kompetensi Keahlian Digital Marketing (UKK SMK)</a>
					  <!-- <div class="dropdown-divider"></div> -->
					  <a class="dropdown-item {{ strpos(Request::url(), '/program-beasiswa') ? 'active' : '' }}" href="{{ route('site.halaman.detail', ['permalink' => 'program-beasiswa']) }}">Beasiswa</a>
					</div>
				</li>
				<li class="nav-item {{ is_int(strpos(Request::url(), route('site.halaman.detail', ['permalink' => 'afiliasi']))) ? 'active' : '' }}">
					<a class="nav-link" href="{{ route('site.halaman.detail', ['permalink' => 'afiliasi']) }}">Afiliasi</a>
				</li>
				<li class="nav-item {{ is_int(strpos(Request::url(), route('site.artikel.index'))) ? 'active' : '' }}">
					<a class="nav-link" href="/artikel{{ Session::get('ref') != null ? '?ref='.Session::get('ref') : '' }}">Artikel</a>
				</li>
				<li class="nav-item {{ is_int(strpos(Request::url(), route('site.halaman.detail', ['permalink' => 'tentang-kami']))) ? 'active' : '' }}">
					<a class="nav-link" href="{{ route('site.halaman.detail', ['permalink' => 'tentang-kami']) }}">Tentang Kami</a>
				</li>
				<li class="nav-item {{ is_int(strpos(Request::url(), route('site.cabang.index'))) ? 'active' : '' }}">
					<a class="nav-link" href="{{ route('site.cabang.index') }}">Cabang</a>
				</li>
			</ul>
			<ul class="navbar-nav mt-2 mt-lg-0">
		        @if(Auth::guest())
				<li class="nav-item">
		          <a class="nav-link font-weight-bold mb-3 mb-lg-0" href="{{ route('auth.login') }}" style="color: var(--primary);">Masuk</a>
		        </li>
				<li class="nav-item">
		          <a class="btn btn-s font-weight-bold rounded-15 btn-block mb-3 mb-lg-0" href="{{ route('auth.register') }}">Daftar</a>
		        </li>
				@else


				<li class="nav-item dropdown">
					<a class="nav-link account dropdown-toggle d-flex align-items-center p-0 pb-2 pb-lg-0" href="#" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
					  <img src="{{ Auth::user()->foto != '' ? asset('assets/images/users/'.Auth::user()->foto) : asset('assets/images/default/user.jpg') }}" alt="user" class="rounded-circle pt-lg-1 mr-2" width="31">
					  <span class="d-lg-none">{{ Auth::user()->nama_user }}</span>
					</a>
					<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarScrollingDropdown">
					  <li><a class="dropdown-item" href="{{ Auth::user()->is_admin == 1 ? route('admin.dashboard') : route('member.dashboard') }}">Dashboard</a></li>
					  <li><a class="dropdown-item" href="{{ Auth::user()->is_admin == 1 ? route('admin.profile') : route('member.profile') }}">Profil</a></li>
					  @if(Auth::user()->is_admin == 0)
					  <li><a class="dropdown-item" href="{{ route('member.afiliasi.carajualan') }}">Afiliasi</a></li>
					  @endif
					  <li><hr class="dropdown-divider"></li>
					  <li><a class="dropdown-item" href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Keluar</a></li>
						<form id="form-logout" method="post" action="{{ Auth::user()->is_admin == 1 ? route('admin.logout') : route('member.logout') }}">
					        {{ csrf_field() }}
					    </form>
					</ul>
				</li>
				@endif

			</ul>
			<!-- <a class="btn btn-navbar btn-login d-lg-inline-block d-none" href="{{ route('auth.login') }}">Login</a>
			<a class="btn btn-navbar btn-register d-lg-inline-block d-none" href="{{ route('auth.register') }}">Daftar</a> -->
			<!-- <li class="nav-item"> -->
			<button class="btn btn-theme-1 rounded-2 ms-2 d-none">
				<a class="content-btn-nav" href="{{ route('auth.login') }}">Masuk</a>
				<span class="content-btn-nav" >|</span>
				<a class="content-btn-nav" href="{{ route('auth.register') }}">Daftar</a>
			</button>

	        <!-- </li> -->
		</div>
	</div>
</nav>
<!-- Header Section end