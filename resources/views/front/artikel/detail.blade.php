@extends('template.main')

@section('title', $blog->blog_title.' - Artikel | ')

@section('content')

<section class="info-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 order-2 order-lg-1 mb-3 mb-lg-0">
        <div class="left-side pt-3 pt-lg-0">
          <div class="bg-light rounded-circle mb-2 d-flex align-items-center justify-content-center mx-auto" style="width: 70px; height: 70px"><i class="fa fa-user" style="font-size: 1.7rem"></i></div>
          <div class="text-center">
            <p class="text-body font-weight-bold m-0">{{ $blog->blog_kontributor != 0 ? $blog->kontributor : $blog->nama_user }}</p>
            <p class="m-0"><small><i class="fa fa-bookmark"></i> {{ $blog->blog_kontributor != 0 ? 'Kontributor' : role($blog->role) }}</small></p>
            <p class="m-0"><small> {{$blog->kategori}}</small></p>
            <p class="m-0"><small><i class="fa fa-clock-o"></i> {{ generate_time_elapsed($blog->blog_at) }}</small></p>
          </div>
          <hr>
          <div style="overflow: auto;">
            @foreach($blog_tags as $tag)
            <span class="badge badge-primary">{{ substr($tag->tag,0,1) == '#' ? $tag->tag : '#'.$tag->tag }}</span>
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-lg-7 order-1 order-lg-2"> 

        <div class="rounded-2 bg-light py-2 px-4 mb-3">
          <nav class="site-breadcrumb">
            <a class="sb-item text-" href="{{ route('site.home') }}">Home</a>
            <a class="sb-item text-" href="{{ route('site.artikel.index') }}">Artikel</a>
          </nav>
        </div>

        <article>
          <h2 class="mb-lg-3">{{ $blog->blog_title }}</h2>
          <p class="d-block d-lg-none"><small>{{ generate_time_elapsed($blog->blog_at) }} - By {{ $blog->blog_kontributor != 0 ? $blog->kontributor : $blog->nama_user }}</small></p>
    			<img src="{{ image('assets/images/blog/'.$blog->blog_gambar, 'blog') }}" class="img-fluid rounded">
          <div class="ql-snow mt-2"><div class="ql-editor">{!! html_entity_decode($blog->konten) !!}</div></div>
        </article>
      </div>
      <div class="col-lg-3 order-3 order-lg-3">
        <div class="kategori mb-4">
          <div class="heading">
            <h5 class="m-0">Kategori</h5>
            <hr>
          </div>
          @foreach($kategori as $data)
          <ul class="list-unstyled">
		        <li class="mb-2"><i class="fa fa-angle-right"></i> <a class="text-body" href="{{ route('site.artikel.by-category', ['permalink' => $data->slug]) }}">{{$data->kategori}}</a></li>
          </ul>
          @endforeach
        </div>
        <div class="last-post">
          <div class="heading">
            <h5 class="m-0">Artikel Lainnya</h5>
            <hr>
          </div>
          <div class="row">
            @foreach($recents as $data)
            <div class="col-12 col-md-6 col-lg-12 mb-3">
              <a href="{{ route('site.artikel.detail', ['permalink' => $data->blog_permalink ]) }}">
                <img src="{{ image('assets/images/blog/'.$data->blog_gambar, 'blog') }}" class="img-fluid rounded mb-2">   
                <p class="m-0" style="line-height: 1.5">{{$data->blog_title}}</p>
              </a>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

@section('css-extra')

<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<style type="text/css">
  article {padding-top: 0;}
  article p {margin-bottom: 1rem!important;}
  .site-breadcrumb .sb-item,
  .site-breadcrumb .sb-item:after{color: #000;}
  .site-breadcrumb .sb-item:hover{color: var(--primary); text-decoration: underline;}
  .left-side{position: sticky; top: 7rem; border-right: 1px solid #dee2e6}
  @media (max-width: 991.98px) {
    .left-side{border-right: unset; border-top: 1px solid #dee2e6;}
  }
  /* Quill */
  .ql-editor h2 {margin-bottom: 1rem!important; font-weight: 600!important;}
  .ql-editor h3 {margin-bottom: 1rem!important; font-weight: 600!important;}
  .ql-editor ol {padding-left: 30px!important;}
  .ql-editor ol li {font-size: 14px!important; color: #74757f!important; padding-left: 5px!important;}
</style>

@endsection
