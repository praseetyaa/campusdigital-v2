<title>@yield('title') {{ setting('site.name') }}</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="{{ setting('site.description') }}"/>
<meta name="keywords" content="{{ setting('site.keywords') }}"/>
<meta property="og:title" content="{{ setting('site.name') }}"/>
<meta property="og:description" content="{{ setting('site.description') }}"/>
<meta property="og:keywords" content="{{ setting('site.keywords') }}"/>

<!-- Favicon -->
<link href="{{ asset('assets/images/icon/'.setting('site.icon')) }}" rel="shortcut icon"/>

<!-- Google font -->
<!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,700"> -->

<!-- Stylesheets -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- 	<link rel="stylesheet" href="{{ asset('templates/campusdigital/css/bootstrap.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('templates/campusdigital/css/font-awesome.min.css') }}"/> -->
<link rel="stylesheet" href="{{ asset('templates/campusdigital/css/owl.carousel.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('templates/campusdigital/css/flaticon.css') }}"/>
<link rel="stylesheet" href="{{ asset('templates/campusdigital/css/slicknav.min.css') }}"/>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!-- Main Stylesheets -->
<link rel="stylesheet" href="{{ asset('templates/campusdigital/css/style.css') }}"/>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-4TXEGEYSGG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-4TXEGEYSGG');
</script>

<!-- Google Analytics -->
{!! html_entity_decode(setting('site.google_analytics')) !!}


<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
