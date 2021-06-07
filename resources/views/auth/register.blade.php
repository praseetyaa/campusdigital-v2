@extends('template.main')

@section('title', 'Daftar | ')

@section('content')

<!-- Info Section -->
<section class="info-section spad pt-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="info-text">
					<div class="card shadow border-0">
						<div class="card-header text-center border-0 bg-white pb-0">
							<img src="{{ asset('assets/images/logo/'.setting('site.logo')) }}" height="100" alt="logo" /></a>
							<h3 class="mb-0 mt-4">Form Registrasi</h3>
						</div>
						<form id="registration-form" method="post" action="{{ route('auth.postregister') }}">
							<div class="card-body py-0">
								  <hr>
								  {{ csrf_field() }}
								  <input type="hidden" name="ref" value="{{ $_GET['ref'] }}">
								  <div class="mb-3 text-center">
										<a href="{{ asset('assets/docs/TUTORIAL PENDAFTARAN MEMBER CAMPUS DIGITAL.pdf') }}" target="_blank" class="btn btn-theme-1 btn-block"><i class="fa fa-download mr-2"></i>Download Tutorial Pendaftaran Member Campus Digital</a>
								  </div>
								  <div class="alert alert-success text-center">
									<strong>Biaya Aktivasi:</strong><br><del class="h5 text-danger">Rp {{ number_format(setting('site.harga_dicoret'),0,'.','.') }}</del><br><span class="h4">Rp {{ number_format(setting('site.biaya_aktivasi'),0,'.','.') }}</span>
								  </div>
								  <div class="alert alert-warning text-center">
									<strong>Sponsor:</strong> {{ sponsor($_GET['ref']) }}
								  </div>
								  <p class="h6 text-center font-weight-bold mb-3 mt-5">Identitas Pendaftar</p>
								  <div class="form-row">
									<div class="form-group col-md-12">
										<label>Nama Lengkap <span class="text-danger">*</span></label>
										<input type="text" name="nama_lengkap" class="form-control {{ $errors->has('nama_lengkap') ? 'border-danger' : '' }}" value="{{ old('nama_lengkap') }}" placeholder="Masukkan Nama Lengkap">
										@if($errors->has('nama_lengkap'))
										<div class="small text-danger mt-1">{{ ucfirst($errors->first('nama_lengkap')) }}</div>
										@endif
									</div>
									<div class="form-group col-md-12">
										<label>Tanggal Lahir <span class="text-danger">*</span></label>
										<input type="text" name="tanggal_lahir" class="form-control {{ $errors->has('tanggal_lahir') ? 'border-danger' : '' }}" value="{{ old('tanggal_lahir') }}" placeholder="Masukkan Tanggal Lahir (Format: dd/mm/yyyy)" autocomplete="off">
										@if($errors->has('tanggal_lahir'))
										<div class="small text-danger mt-1">{{ ucfirst($errors->first('tanggal_lahir')) }}</div>
										@endif
									</div>
									<div class="form-group col-md-12">
										<label>Jenis Kelamin <span class="text-danger">*</span></label>
										<div class="form-row">
											<div class="col-sm-12">
												<div class="form-check">
												  <input class="form-check-input" type="radio" name="jenis_kelamin" id="gender-1" value="L" {{ old('jenis_kelamin') == 'L' ? 'checked' : '' }}>
												  <label class="form-check-label" for="gender-1">
													Laki-Laki
												  </label>
												</div>
												<div class="form-check">
												  <input class="form-check-input border-danger" type="radio" name="jenis_kelamin" id="gender-2" value="P" {{ old('jenis_kelamin') == 'P' ? 'checked' : '' }}>
												  <label class="form-check-label" for="gender-2">
													Perempuan
												  </label>
												</div>
											</div>
										</div>
										@if($errors->has('jenis_kelamin'))
										<div class="small text-danger mt-1">{{ ucfirst($errors->first('jenis_kelamin')) }}</div>
										@endif
									</div>
									<div class="form-group col-md-12">
										<label>Nomor HP <span class="text-danger">*</span></label>
										<input type="text" name="nomor_hp" class="form-control {{ $errors->has('nomor_hp') ? 'border-danger' : '' }}" value="{{ old('nomor_hp') }}" placeholder="Masukkan Nomor HP">
										@if($errors->has('nomor_hp'))
										<div class="small text-danger mt-1">{{ ucfirst($errors->first('nomor_hp')) }}</div>
										@endif
									</div>
								  </div>
								  <p class="h6 text-center font-weight-bold mb-3 mt-5">Akun Pendaftar</p>
								  <div class="form-row">
									<div class="form-group col-md-12">
										<label>Email <span class="text-danger">*</span></label>
										<input type="email" name="email" class="form-control {{ $errors->has('email') ? 'border-danger' : '' }}" value="{{ old('email') }}" placeholder="Masukkan Email">
										@if($errors->has('email'))
										<div class="small text-danger mt-1">{{ ucfirst($errors->first('email')) }}</div>
										@endif
									</div>
									<div class="form-group col-md-12">
										<label>Username <span class="text-danger">*</span></label>
										<input type="text" name="username" class="form-control {{ $errors->has('username') ? 'border-danger' : '' }}" value="{{ old('username') }}" placeholder="Masukkan Username">
										@if($errors->has('username'))
										<div class="small text-danger mt-1">{{ ucfirst($errors->first('username')) }}</div>
										@endif
									</div>
									<div class="form-group col-md-12">
										<label>Password <span class="text-danger">*</span></label>
					                          <div class="input-group">
										  	<input type="password" name="password" class="form-control {{ $errors->has('password') ? 'border-danger' : '' }}" placeholder="Masukkan Password">
					                              <div class="input-group-append">
					                                  <a href="#" class="input-group-text btn btn-toggle-password {{ $errors->has('password') ? 'bg-danger' : 'btn-theme-1' }}"><i class="fa fa-eye"></i></a>
					                              </div>
					                          </div>
										@if($errors->has('password'))
										<div class="small text-danger mt-1">{{ ucfirst($errors->first('password')) }}</div>
										@endif
									</div>
									<div class="form-group col-md-12">
										<label>Ulangi Password <span class="text-danger">*</span></label>
					                          <div class="input-group">
									  		<input type="password" name="password_confirmation" class="form-control {{ $errors->has('password') ? 'border-danger' : '' }}" placeholder="Ulangi Password">
					                              <div class="input-group-append">
					                                  <a href="#" class="input-group-text btn btn-toggle-password {{ $errors->has('password') ? 'bg-danger' : 'btn-theme-1' }}"><i class="fa fa-eye"></i></a>
					                              </div>
					                          </div>
									</div>
								  </div>
								  <hr>
							</div>
							<div class="card-footer bg-white border-0 pt-0 pb-3">
								<button type="submit" id="btn-submit" class="btn btn-sm btn-theme-1"><i class="fa fa-check mr-1"></i> Submit</button>
							</div>
						</form>
					</div>
        </div>
      </div>
      <div class="col-lg-6 d-none d-lg-block">
        <div class="image-login info-text sticky-top">
            <img src="{{ asset('assets/images/illustration/undraw_Login_re_4vu2.svg') }}" alt="register" style="padding-top: 5rem">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Info Section end -->

@endsection

@section('js-extra')

<script src="{{ asset('templates/vali-admin/js/plugins/bootstrap-datepicker.min.js') }}"></script>
<script>
	// Datepicker
	$(document).ready(function(){
		$("input[name=tanggal_lahir]").datepicker({
			format: 'dd/mm/yyyy',
			todayHighlight: true,
			autoclose: true,
		});
	});
	
    // Button Submit
    $(document).on("click", "#btn-submit", function(e){
        $("#registration-form").submit();
    });

	// Button Toggle Password
	$(document).on("click", ".btn-toggle-password", function(e){
		e.preventDefault();
		if(!$(this).hasClass("show")){
			$(this).parents(".form-group").find("input[type=password]").attr("type","text");
			$(this).find(".fa").removeClass("fa-eye").addClass("fa-eye-slash");
			$(this).addClass("show");
		}
		else{
			$(this).parents(".form-group").find("input[type=text]").attr("type","password");
			$(this).find(".fa").removeClass("fa-eye-slash").addClass("fa-eye");
			$(this).removeClass("show");
		}
	});
</script>

@endsection

@section('css-extra')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style type="text/css">
  .header-section {background: #340369!important;}
  .info-section {padding-top: 126px!important}
  #registration-form .h6:before, #registration-form .h6:after {content: '---';}
  label {font-size: .875rem;}
</style>

@endsection
