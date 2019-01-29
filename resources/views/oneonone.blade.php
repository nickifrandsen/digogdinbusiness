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
					<h1 class="text-center pb-4 font-normal text-xl uppercase">Sparringsforløb og sessions<br><span class="font-black uppercase text-5xl" style="line-height: 1;">1-on-1 Sparring</span></h1>
					<p class="text-center text-2xl">Tilpasset til dig og den specifikke situation du befinder dig i.</p>
				</div>

				<div class="pb-6 is-content">
					<p>Offentliggøres snarest.</p>
				</div>


			</div>
		</div>
	</section>

</article>

@endsection
