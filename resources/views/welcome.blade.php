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

			<div class="w-full">
			
				<p class="text-5xl leading-tight">Kend dig selv<br>Kend dine kunder <br><b>Kend din business</b><br><span class="text-3xl leading-none"> - så øger du chancerne for success både for dig og din business</span></p>

			</div>

			<div class="flex flex-wrap">
				<div class="sm:w-1/4">
					<h3>Workshops</h3>
					<p></p>
					<a href="">Se alle worshops...</a>
				</div>
				<div class="sm:w-1/4">
					<h3>1:1 Sparring</h3>
					<p>Til dig der gerne vil have individuel og skræddersyet sparring på din business. Det kan være et længere forløb eller enkelt sessions.</p>
					<a href="">Læs mere...</a>
				</div>
				<div class="sm:w-1/4">
					<h3>Masterminds</h3>
				</div>
				<div class="sm:w-1/4">
					<h3>Artikler</h3>
					<p>Find inspiration</p>
					<a href="">Læs mere...</a>
				</div>
			</div>
	</section>

</article>

@endsection