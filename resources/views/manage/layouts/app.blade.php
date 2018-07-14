<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="rtl">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Eedica') }}/@yield('title')</title>

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	{{-- Fonts --}}
	<link rel="stylesheet" href="//www.fontstatic.com/f=bein" />
</head>

<body class="uk-background-muted uk-height-viewport">
	<div id="app">
		@include('manage.partials.navs.topNav')
		<div class="uk-grid-collapse" uk-grid uk-height-viewport>
			<div class="uk-width-1-5">
				@include('manage.partials.navs.sideNav')
			</div>
			<div class="uk-width-4-5 uk-overflow-auto" style="height: 87vh">
				@yield('content')
			</div>
		</div>
	</div>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
	@yield('scripts')
</body>

</html>