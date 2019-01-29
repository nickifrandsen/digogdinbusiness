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

				<div class="">
					<h1 class="text-center font-black uppercase text-5xl">Gratis masterminds</h1>
					<p class="text-center text-2xl">
						Vi lancerer snart gratis mastermindsessions. <br>Følg med her på siden.
					</p>
				</div>

				<div class="pb-6 is-content">
					<p>Sidder du og kæmper med en beslutning eller et problem i din business, som du gerne vil have sparring på, som er vores mastermindsessions svaret. Her får du muligheden for at få andres business-ejeres syn på din problemstilling, ligesom du får muligheden for at give tilbage til netværket ved at dele dine erfaringer.</p>
					<p>Mere info følger snarest...</p>
				</div>


			</div>
		</div>
	</section>

</article>

@endsection
