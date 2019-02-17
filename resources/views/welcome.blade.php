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

			<div class="w-full md:w-3/4 md:mx-auto py-12 text-center">
				<h1 class="text-4xl font-normal leading-tight">
					Hvordan ser en <span class="font-extrabold">bedre</span> business ud for <span class="font-extrabold">dig</span>? <br>
				
				{{-- <br>
				<span class="text-3xl">Her handler det om dig og din business</span> --}}
				</h1>
				<p class="text-xl font-light">Lær at kortlægge dine værdier, forstå dine kunder og navigere din business hjælper vi dig med at skabe en business, som passer til det liv du gerne vil leve. <br><span>Her handler det om dig og din business.</b></p> 
				
					{{-- <br>Hvis det ikke handler om vækst for enhver pris, med derimod om frihed og fleksibilitet til at udleve dine drømme <b class="font-bold">hver dag</b>, så er du kommet til det rette sted. --}}
				
			</div>
			{{-- <div class="w-full">
				En business i vækst er et menneske i vækst og vækst er meget andet end flere ansatte og højere omsætning.
				Til dig der gerne vil drive en lille business, fordi den matcher dit liv bedre.
				En bedre business er ikke 
				Hvis du søger mere frihed og fleksibilitet, så er en større business ikke svaret, så
				Vi skaber ikke 

				Din business, dit liv 
				Hvor du er den vigtigste person i business er dit liv personlig udvikling, frihed og fleksiblitet er vigtigere end 
				<p class="">Stedet hvor en sund business er en business, hvor du vokser </p>
				
				<p class="text-5xl font-bold leading-tight tracking-tight">Skab en bedre business <br><span class="text-2xl leading-tight tracking-tight">- og få mere frihed og fleksibilitet til leve det liv du drømmer om</span></p>
			</div> --}}

			<div class="flex flex-wrap">
				<div class="sm:w-1/3 sm:pr-6">
					<h3>Workshops</h3>
					<p>Med et online workshop forløb er det ligemeget, hvor du befinder dig, så modtager du alle ressourcerne og øvelserne til at skabe en bedre business direkte i din indbakke.</p>
					<a href="/workshops">Se alle worshops...</a>
				</div>
				<div class="sm:w-1/3 sm:px-3">
					<h3>1:1 Sparring</h3>
					<p>Til dig der gerne vil have individuel og skræddersyet sparring på, hvordan skaber en bedre business som matcher dig. Det kan være et længere forløb eller enkelt sessions.</p>
					<a href="/sparring" class="">Skræddersyet sparring...</a>
				</div>
				<div class="sm:w-1/3 sm:pl-6">
					<h3>Nyhedsbrev</h3>
					<p>Modtag stof til eftertanke, inspiration og andet indhold, der sætter fokus på hvordan du gennem din business opnår frihed og fleksiblitet til at leve det liv, du drømmer om.</p>
					<a href="/nyhedsbrev">Bliv en del af fællesskabet...</a>
				</div>
			</div>
	</section>

</article>

@endsection