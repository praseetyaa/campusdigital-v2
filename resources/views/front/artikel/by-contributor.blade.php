@extends('template.main')

@section('title', 'Artikel | ')

@section('content')

<section class="page-top-section set-bg">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 order-2 order-lg-1 text-center text-lg-left">
        <h1>Artikel</h1>
        <h4 class="font-weight-normal">Oleh {{ $user->kontributor }}</h4>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 mb-3 mb-lg-0 text-center">
        <img class="h-auto img-header" src="{{asset('assets/images/illustration/min/8778.png')}}" alt="banner">
      </div>
    </div>
  </div>
</section>

<section class="info-section spad">
  <div class="container">
    <div class="row">
      @foreach($artikel as $data)
      <div class="col-lg-3 col-md-6 mb-3">
        <div class="card border-0 shadow-sm">
          <a href="{{ route('site.artikel.detail', ['permalink' => $data->blog_permalink ]) }}">
          <img class="card-img-top" src="{{ image('assets/images/blog/'.$data->blog_gambar, 'blog') }}" alt="Card image cap">
          </a>
          <div class="card-body">
             <p class="card-title font-weight-bold"><a class="text-body" href="{{ route('site.artikel.detail', ['permalink' => $data->blog_permalink ]) }}">{{ $data->blog_title }}</a></p>
          </div>
          <div class="card-footer bg-white d-flex justify-content-between align-items-center">
            <div>
              <p class="m-0"><small class="text-muted"><i class="fa fa-clock-o mr-1"></i>{{ generate_time_elapsed($data->blog_at) }}</small></p>
              <p class="m-0"><small class="text-muted"><i class="fa fa-user mr-1"></i><a class="text-link" href="{{ $data->blog_kontributor != 0 ? route('site.artikel.by-contributor', ['username' => $data->slug]) : route('site.artikel.by-author', ['username' => $data->username]) }}">{{ $data->blog_kontributor != '' ? $data->kontributor : $data->nama_user }}</a></small></p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row mt-3" id="pagination">
      {!! $artikel->links() !!}
    </div>
  </div>
</section>

@endsection

@section('js-extra')

<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script type="text/javascript">
     $(function() {
       var print = function(msg) {
         alert(msg);
       };

       var setInvisible = function(elem) {
         elem.css('visibility', 'hidden');
       };
       var setVisible = function(elem) {
         elem.css('visibility', 'visible');
       };

       var elem = $("#elem");
       var items = elem.children();

       // Inserting Buttons
       elem.prepend('<a href="#"><div class="shadow-sm" id="right-button" style="visibility: hidden;"><i class="fa fa-chevron-left"></i></div></a>');
       elem.append('<a href="#"><div class="shadow-sm" id="left-button"><i class="fa fa-chevron-right"></i></div></a>');

       // Inserting Inner
       items.wrapAll('<div id="inner" />');

       // Inserting Outer
       debugger;
       elem.find('#inner').wrap('<div id="outer"/>');

       var outer = $('#outer');

       var updateUI = function() {
         var maxWidth = outer.outerWidth(true);
         var actualWidth = 0;
         $.each($('#inner >'), function(i, item) {
           actualWidth += $(item).outerWidth(true);
         });

         if (actualWidth <= maxWidth) {
           setVisible($('#left-button'));
         }
       };
       updateUI();



       $('#right-button').click(function() {
         var leftPos = outer.scrollLeft();
         outer.animate({
           scrollLeft: leftPos - 200
         }, 800, function() {
           debugger;
           if ($('#outer').scrollLeft() <= 0) {
             setInvisible($('#right-button'));
           }
         });
       });

       $('#left-button').click(function() {
         setVisible($('#right-button'));
         var leftPos = outer.scrollLeft();
         outer.animate({
           scrollLeft: leftPos + 200
         }, 800);
       });

       $(window).resize(function() {
         updateUI();
       });
     });

</script>

@endsection

@section('css-extra')

<style type="text/css">
.info-text {padding-top: 0;}
.info-text p {margin-bottom: 1rem!important;}
p{line-height: 1.5}
#pagination nav {margin-right: auto; margin-left: auto;}

.ql-align-left {text-align: left!important;}
.ql-align-right {text-align: right!important;}
.ql-align-center {text-align: center!important;}
.ql-align-justify {text-align: justify!important;}
.page-item.active .page-link {
  color: #fff;
  background-color: #46157a;
  border-color: #46157a;}
.page-link{color: #46157a}
.page-link:hover{color: #46157a}

.card-body {padding-top: 1rem; padding-bottom: 1rem;}
.card-title {margin-bottom: 0; line-height: 22px; height: 44px; display: -webkit-box !important; -webkit-line-clamp: 2; -moz-line-clamp: 2; -ms-line-clamp: 2; -o-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical; -ms-box-orient: vertical; -o-box-orient: vertical; box-orient: vertical; overflow: hidden; text-overflow: ellipsis;}
#outer {float: left; width: 100%; overflow: hidden; white-space: nowrap; display: inline-block; padding: .5em;}
.hide {display: none;}
#left-button, #right-button {
    display: flex;
    width: 30px;
    text-align: center;
    background-color: var(--white);
    border-radius: 100%;
    width: 40px;
    height: 40px;
    justify-content: center;
    align-items: center;
}
.custom-shape-divider-top-1619270856 {
    top: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
}

.custom-shape-divider-top-1619270856 svg {
    position: relative;
    display: block;
    width: calc(100% + 1.3px);
    height: 150px;
}

.custom-shape-divider-top-1619270856 .shape-fill {
    fill: #46157A;
}
</style>

@endsection
