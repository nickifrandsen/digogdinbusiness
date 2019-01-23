<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('_meta.base')

	<link rel="stylesheet" href="/css/app.css">

<body>

	<div id="app">
		
		@include('_partials.header')
		
		<section id="page-content">
			@yield('content')
		</section>
		
		@include('_partials.footer')

	</div>
	
	<script src="/js/app.js"></script>
	<script src="https://js.stripe.com/v3"></script>

	@yield('scripts')

</body>
</html>
