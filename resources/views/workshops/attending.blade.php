@extends('_layouts.app')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

<article class="container article-content is-content">

	<section class="mb-12 py-12">

		<div class="container">

			<div class="w-full">

				<div class="pb-6 text-center">
					
					<h1 class="text-3xl">Sådan! <span class="font-normal">du er nu tilmeldt workshoppen</span></h1>
					<p>Du modtager inden for kort tid en bekræftelse på din tilmelding.</p>
					<small>Skulle du mod forventning ikke have modtaget en mail inden for de næste 15 minutter, så skriv til <a href="mailto:info@digogdinbusiness.dk">info@digogdinbusiness.dk</a></small>
				</div>

				<div class="pb-6 is-content">
				</div>



			</div>
		</div>
	</section>

</article>

@endsection
