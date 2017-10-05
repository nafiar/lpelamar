<!DOCTYPE html>
<html>
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	    <meta name="theme-color" content="#2196F3">

	   	<title>
			@yield('title')
		</title>
		<link rel="icon" type="image/png" href="{{asset('image/logo.png')}}">
	    <link href="{{ url('css/materialize.css')}}" type="text/css" rel="stylesheet">
	    <link href="{{ url('assets/material')}}/min/plugin-min.css" type="text/css" rel="stylesheet">
	    <link href="{{ url('assets/material')}}/min/custom-min.css" type="text/css" rel="stylesheet" >
	    <link href="{{ url('assets/css/ghpages-materialize.css') }}" type="text/css" rel="stylesheet">
	    <link href="{{ url('assets/css/icon/icon.css') }}" rel="stylesheet">

	</head>
	<body id="top" class="scrollspy">

		@include('layouts.navbar')

			@yield('page-content')

		@include('layouts.footer')
		<!--  Scripts-->
		<script src="{{ url('assets/material')}}/min/plugin-min.js"></script>
		<script src="{{ url('assets/material')}}/min/custom-min.js"></script>

		@yield('custom-scripts')

	</body>
</html>
