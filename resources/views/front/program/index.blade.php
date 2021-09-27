@extends('template.main')

@section('title', $kategori.' | ')

@section('content')

<section id="breadcrumb-container">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('site.home') }}"><i data-feather="home"></i></a></li>
				<li class="breadcrumb-item active" aria-current="page">{{ $kategori }}</li>
			</ol>
		</nav>
	</div>
</section>
<section class="container position-relative">
	<div class="rounded-2 bg-white p-3 shadow-sm">
		<div class="d-flex align-items-center justify-content-between">
			<div>
				<h1 class="m-0">{{ $kategori }}</h1>
				<p class="m-0">{{ $kategori }} dari {{ setting('site.name') }}.</p>
			</div>
			<img style="width: 50px!important; transform: scaleX(-1);" src="{{asset('assets/images/category/book.svg')}}">
		</div>
	</div>
</section>
<section class="mt-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="info-text">
			<div class="row">
				@if(count($program)>0)
					@foreach($program as $data)
					<div class="col-lg-3 col-md-6 mb-3">
					<div class="card border-0 shadow-sm rounded-2">
							<a href="{{ route('site.program.detail', ['permalink' => $data->program_permalink]) }}">
								<img class="card-img-top" src="{{ image('assets/images/program/'.$data->program_gambar, 'program') }}" alt="Sampul Program">
							</a>
							<div class="card-body">
								<a class="link-primary" href="{{ route('site.program.detail', ['permalink' => $data->program_permalink]) }}"><h5 class="card-title">{{ $data->program_title }}</h5></a>
								<p class="card-text">{!! substr(strip_tags(html_entity_decode($data->konten)),0,100) !!}... <a class="link-primary" style="display: inline;" href="{{ route('site.program.detail', ['permalink' => $data->program_permalink]) }}">Selengkapnya ></a></p>	
							</div>
						</div>
					</div>
					@endforeach
				@else
				<div class="col-12">
					<div class="alert alert-danger text-center">Belum ada {{ $kategori }} tersedia.</div>
				</div>
				@endif
			</div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection