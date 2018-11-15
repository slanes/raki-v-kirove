<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>@yield('title')</title>
		<meta name="description" content="@yield('description')">
		<meta name="keywords" content="@yield('keywords')">
		<meta name="robots" content="index, follow"/>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- Scripts -->
		  <script src="{{ asset('js/app.js') }}" defer></script>

		<!-- Styles -->
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	</head>
	<body>
		@yield('header')
		@yield('main')
		@include('template.layouts.blocks.footer')
	</body>
</html>