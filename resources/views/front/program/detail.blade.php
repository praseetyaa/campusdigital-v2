@extends('template.main')

@section('title', $program->program_title.' - Program | ')

@section('content')

<div id="program">
<section class="page-top-section pb-0">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb bg-light p-2 px-3 rounded-2">
				<li class="breadcrumb-item"><a href="{{ route('site.home') }}">Beranda</a></li>
				<li class="breadcrumb-item"><a href="{{ route('site.program.index', ['category' => $program->slug]) }}">{{ $program->kategori }}</a></li>
				<li class="breadcrumb-item active" aria-current="page">{{ $program->program_title }}</li>
			</ol>
		</nav>
	</div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-7 order-2 order-lg-1">
        <div class="card rounded-2 border-0">
          <div class="card-body">
            <h1 class="mb-3">{{ $program->program_title }}</h1>
            <div class="ql-snow">
              <div class="ql-editor">{!! html_entity_decode($program->konten) !!}</div>
            </div>
            <br>
            <form id="form-registration" method="post" action="{{ route('site.program.register', ['permalink' => $program->program_permalink]) }}">
              @csrf
              @if(Session::get('message'))
              <div class="alert alert-success">{{ Session::get('message') }}</div>
              @endif
              <input type="hidden" name="id_program" value="{{ $program->id_program }}">
              <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control {{ $errors->has('nama_lengkap') ? 'border-danger' : '' }}" value="{{ old('nama_lengkap') }}">
                @if($errors->has('nama_lengkap'))
                <div class="text-danger">{{ $errors->first('nama_lengkap') }}</div>
                @endif
              </div>
              <div class="mb-3">
                <label class="form-label">Nama Panggilan</label>
                <input type="text" name="nama_panggilan" class="form-control {{ $errors->has('nama_panggilan') ? 'border-danger' : '' }}" value="{{ old('nama_panggilan') }}">
                @if($errors->has('nama_panggilan'))
                <div class="text-danger">{{ $errors->first('nama_panggilan') }}</div>
                @endif
              </div>
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control {{ $errors->has('email') ? 'border-danger' : '' }}" value="{{ old('email') }}">
                @if($errors->has('email'))
                <div class="text-danger">{{ $errors->first('email') }}</div>
                @endif
              </div>
              <div class="mb-3">
                <label class="form-label">No HP / WhatsApp</label>
                <input type="text" name="nomor_hp" class="form-control {{ $errors->has('nomor_hp') ? 'border-danger' : '' }}" value="{{ old('nomor_hp') }}">
                @if($errors->has('nomor_hp'))
                <div class="text-danger">{{ $errors->first('nomor_hp') }}</div>
                @endif
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-5 order-1 order-lg-2">
        <div class="sticky-sidebar">
          <div>
            <img class="rounded-1 img-fluid" src="{{ image('assets/images/program/'.$program->program_gambar, 'program') }}">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

@endsection

@section('js-extra')

@if(count($errors) > 0 || Session::get('message'))
<script>
  $("html, body").animate({ scrollTop: $("#form-registration").prop("scrollHeight")}, 500);
</script>
@endif

@endsection

@section('css-extra')

<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<style type="text/css">
  /* Quill */
  #program{min-height: calc(100vh - 20rem);}
  .ql-editor {padding: 0}
  .ql-editor h2 {margin-bottom: 1rem!important; font-weight: 600!important;}
  .ql-editor h3 {margin-bottom: 1rem!important; font-weight: 600!important;}
  .ql-editor ol {padding-left: 30px!important;}
  .ql-editor ol li {font-size: 14px!important; color: #74757f!important; padding-left: 5px!important;}
  .ql-editor ol {margin-bottom: 1rem!important;}
  .ql-editor p {margin-bottom: 1rem!important;}
  .card-img-top{border-radius: 0}
  @media (min-width: 768px) {
    .card-img-top{border-radius: 1em}
  }
  @media (min-width: 992px) {
    .card-img-top{border-radius: 1em 1em 0 0}
  }
</style>

@endsection