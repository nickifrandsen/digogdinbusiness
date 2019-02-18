<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('_meta.base')

	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">

	<script>
		var Business = {
			csrfToken: "{{ csrf_token() }}",
			stripeKey: "{{ config('services.stripe.key') }}"
		}
	</script>

<body>

	<div id="app">
		
		@include('_partials.header')
		
		<section id="page-content">
			@yield('content')
		</section>
		
		@include('_partials.footer')

	</div>
	<script src="https://checkout.stripe.com/checkout.js"></script>
	<script src="{{ mix('/js/app.js') }}"></script>
	
	@yield('scripts')

	<script id="mcjs" async>!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/9c05a6b2e7024f82f412a839f/faf61c151f4c9fad9a51eb72f.js");</script>

</body>
</html>
