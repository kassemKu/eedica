<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="rtl" class="uk-background-secondary uk-height-viewport">

<head>
	@include('client.partials.head')
</head>

<body class="{{ Request::url() === url('/') ? ' uk-background-secondary' : ' uk-background-muted' }}  uk-height-viewport">
	<div id="app">
    @include('client.partials.navs.topNav')

		<div class="ee-content">
			@yield('content')
		</div>
		<div class="ee-footer uk-container-expand uk-margin">
			@include('client.partials.footer')
		</div>
	</div>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
	@yield('scripts')
</body>

</html>