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
					<h1 class="text-center font-black uppercase text-5xl">Om</h1>
					<p class="text-center text-2xl"></p>
				</div>

				<div class="pb-6 is-content">
					<p>For flere og flere er det at drive sin egen business blevet et alternativ til det traditionelle 8-16 job, hvor du månedligt betales dedikere din tid til arbejdspladsen. Når du har din egen business, så vælger du derimod at dedikere din tid til dig selv og de kunder DU servicerer. Du bestemmer selv, hvad der skal prioriteres og hvordan både din business og dit liv skal indrettes.</p>

					<p>Men...</p>

					<p>Ofte sker der det, at du har din egen business og pludselig arbejder du mere end nogensinde før. Du bruger mindre tid på de ting du gerne vil bruge tid på. Og i det hele taget er drømmen om din egen busines ikke meget anderledes end den verden du kom fra som lønmodtager.</p>

					<p>Det er her Dig & Din Business kommer ind i billedet. Det handler om at identificere, hvad der vigtigt for dig ikke kun når det kommer til business, men i det hele taget. Når du er bevidst om dette, så kan du indarbejde disse prioriterer i din forretningsmodel. Det handler ikke altid om at være større og tjene flere penge, med nærmest altid om, hvordan der kan skabes en bedre forretning som du trives i, ikke bare professionelt, men også personligt.</p>

					<p>Dig & Din Business arbejder på at give dig værktøjerne til at skabe en bedre business ved at have fokus på:</p>

					<ul>
						<li><b>Dig</b> - lyt til dig selv</li>
						<li><b>Dine kunder</b> - lyt til dine kunder</li>
						<li><b>Dine processer</b> - forstå dine processer</li>
						<li><b>Dine omgivelser</b> - find vej i landskabet</li>
						<li><b>Din business</b> - styr din business</li>
					</ul>

					
					<p>Dette arbejder Dig & Din Business på gennem følgende aktiviteter:</p>

					<ul>
						<li><b>Workshops</b></li>
						<li><b>Vidensdeling</b></li>
						<li><b>Business Intelligence</b></li>
						<li><b>1-til-1 sparring</b></li>
					</ul>

					<p>Ingen kender og ingen kan nogensinde komme til at kende din business ligeså godt som dig, derfor er det vigtigste for Dig & Din Business, at du har de rette værktøjer og den fornødne viden, så du altid ved, hvordan du skal navigere i din business. På den måde undgår du at bruge unødvendige penge på eksterne kræfter, fordi de ikke forstår din business.</p>
				</div>


			</div>
		</div>
	</section>

</article>

@endsection
