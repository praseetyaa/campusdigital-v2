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
          </div>
        </div>
      </div>
      <div class="col-lg-5 order-1 order-lg-2">
        <div class="sticky-sidebar">
          <a class="popup-image" href="{{ image('assets/images/program/'.$program->program_gambar, 'program') }}">
            <img class="rounded-1 img-fluid" src="{{ image('assets/images/program/'.$program->program_gambar, 'program') }}">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

@endsection

@section('css-extra')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css" integrity="sha512-nIm/JGUwrzblLex/meoxJSPdAKQOe2bLhnrZ81g5Jbh519z8GFJIWu87WAhBH+RAyGbM4+U3S2h+kL5JoV6/wA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

@section('js-extra')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('assets/js/home.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js" integrity="sha512-+m6t3R87+6LdtYiCzRhC5+E0l4VQ9qIT1H9+t1wmHkMJvvUQNI5MKKb7b08WL4Kgp9K0IBgHDSLCRJk05cFUYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('.popup-image').magnificPopup({
    type: 'image'
  });
});
</script>
@endsection

@endsection