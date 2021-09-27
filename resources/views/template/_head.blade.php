<title>@yield('title') {{ setting('site.name') }}</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="{{ setting('site.description') }}"/>
<meta name="keywords" content="{{ setting('site.keywords') }}"/>
<meta property="og:title" content="{{ setting('site.name') }}"/>
<meta property="og:description" content="{{ setting('site.description') }}"/>
<meta property="og:keywords" content="{{ setting('site.keywords') }}"/>

<link href="{{ asset('assets/images/icon/'.setting('site.icon')) }}" rel="shortcut icon"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('templates/campusdigital/css/owl.carousel.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('templates/campusdigital/css/flaticon.css') }}"/>
<link rel="stylesheet" href="{{ asset('templates/campusdigital/css/slicknav.min.css') }}"/>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
{{-- <link rel="stylesheet" href="{{ asset('templates/campusdigital/css/style.css') }}"/> --}}
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main_styles">

<script async src="https://www.googletagmanager.com/gtag/js?id=G-4TXEGEYSGG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-4TXEGEYSGG');
</script>

{!! html_entity_decode(setting('site.google_analytics')) !!}

