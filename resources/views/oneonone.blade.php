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

			<div class="w-full mx-auto lg:w-2/3">

				<div class="pb-6">
					<h1 class="text-center pb-4 font-normal text-xl uppercase">Sparringsforløb og sessions<br><span class="font-bold uppercase text-5xl">1:1 Sparring</span></h1>
					<p class="text-center text-2xl">Individuelle sparringsforløb tilpasset til dig og den specifikke situation du og din business står i.</p>
				</div>

				<div class="pb-6 is-content">
					<p>Send en mail til <a href="mailto:info@digogdinbusiness">info@digogdinbusiness.dk</a>, hvor du beskriver din konkrete situation, og hvilke udfordringer du står overfor, så tilrettelægger vi sammen et sparringsforløb, der passer til dine behov.</p>
				</div>
			</div>
		</div>
	</section>

</article>

@endsection
