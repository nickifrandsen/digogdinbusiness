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
					<h1 class="text-center pb-4 font-normal text-xl uppercase">Online workshop<br><span class="font-black uppercase text-5xl" style="line-height: 1;">Dig & din<br>business</span></h1>
					<p class="text-center text-2xl">Sådan skaber du en business, der er i tråd med dine værdier, og hvor hverdagen macther dine drømme om frihed og fleksibilitet.</p>
				</div>

				<div class="pb-6">
					<p>Har du mistet overblikket over din business, er du kørt sur i livet som selvstændig, eller overvejer du at starte din egen business, så er <i>Dig & Din Business</i> den online workshop som du har ventet på.</p>

					<p>Drømmer du om en business, der matcher dit liv. Et liv, hvor der er plads til at gøre de ting du elsker og drømmer om. Ikke bare når du holder fri, men hver eneste dag fra du vågner til du går i seng. Så er du kommet til det rette sted. <i>Dig & Din Business</i> er et workshop-forløb for dig der gerne vil drive en business i tråd med andre områder af dit liv. En business, hvor dine værdier vægter højere end jagten på årlig økonomisk vækst. En business, hvor du og din kunde er i centrum. Og en business, som understøtter den måde du gerne vil arbejde på. </p><p>Det er et opgør med illusionenen om, at en større business er en bedre business. En bedre business er en business, der passer bedre til det liv du gerne vil leve. En bedre business er en livsstil, hvor arbejde og fritid smelter sammen på en mere harmonisk måde.</p>
					<p>Det er muligt - og det er muligt for dig.</p>
				</div>

				<h2>Workshoppens Indhold</h2>
				<p>I løbet af 6 uger får du konkrete værktøjer til, hvordan du kan skabe en business, som du trives med. En business, hvor der er plads til dig og dine drømme - både professionelt og personligt.</p>
				<p></p>

				<section id="modules" class="py-6">
					<h3 class="py-1 mt-2 text-base">Modul 1: Kend dig selv - dine værdier</h3>
					<p>Indledningsvist tager vi fat på mennesket bag forretningen - ja dig. Din business skal understøtte det liv du gerne vil leve og ikke diktere det. Du lærer at sætte ord på, hvad der er vigtigt for dig som individ og dermed både i og uden for din business. Derudfra laver vi et kompas, der kommer til at påvirke hvilke beslutning du træffer samt, hvordan du evaluerer din business.</p>

					<h3 class="py-1 mt-4 text-base">Modul 2: Kend din kunde - identificering og præcisering</h3>
					<p>Vi stiller i andet modul skarpt på dine kunder. Vi arbejder med at præcisere, hvem dine kunde er, hvordan de ser ud og hvordan du kan hjælpe dem. Du lærer ganske enkelt at lytte til, ikke bare hvad kunderne siger, men hvad de mener. Du får værktøjerne til at sætte denne viden i system og sætte ansigt på kunden, så du kan bedre kan levere værdi.</p>

					<h3 class="py-1 mt-4 text-base">Modul 3: Kend din kunde - den gode oplevelse</h3>
					<p>Vi forsætter med at kigge på dine kunder, men i denne uge ligger fokus på oplevelsen. Hvordan kunden interagerer med din business og hvordan du kan identificere eventuelle bump på vejen. Vi kigger samtidig på, hvordan du kan bruge denne viden til at designe den gode oplevelse.</p>

					<h3 class="py-1 mt-4 text-base">Modul 4: Kend din business - effektivitet og prioritering</h3>
					<p>I denne uge ser vi nærmere på, hvordan du undgår at bruge dyrebar tid på ligegyldige opgaver. Du lærer at dokumentere din arbejdsgang og analysere, hvordan du bruger din tid. Dernæst introduceres du for et værktøj, som kan hjælpe dig med at prioritere store som små opgaver derigenmmen optimere dine processer og forretningsgange.</p>

					<h3 class="py-1 mt-4 text-base">Modul 5: Kend din business - nøgletal</h3>
					<p>Du lærer i denne uge at forstå de vigtigste tal i din business, således du konstant har et overblik over, hvorvidt du tjener penge eller ej. Du bliver ikke kastet igennem regnskabsteknik, men du får istedet en række konkrete værktøjer til at forstå de vigtigeste tal i forhold til at tage pulsen på din business.</p>

					<h3 class="py-1 mt-4 text-base">Modul 6: Dig & Din business - strategi</h3>
					<p>Med udgangspunkt i de foregående 5 moduler tegner vi et kort over din forretning, som du til en hver tid kan trække frem og gøre brug af, når du føler, at du eller din business er faret vild. Kortet kommer således til at tage udgangspunkt i dig og den værdi du leverer til dine kunder. Derudover vil det give dig et overblik over, hvor dine muligheder og udfordringer ligger.</p>
				</section>

				<div class="text-center py-6">
					<p class="font-bold">Workshoppen starter 1. marts 2019 og varer 6 uger</p>
					<p class="text-grey-dark font-normal text-base">Pris <span class="text-4xl text-black tracking-wide">1.500</span> DKK</p>
					<button type="button" id="sign-up" class="btn text-sm tracking-wide uppercase rounded" @click="toggleModal">Tilmeld dig nu</button>
				</div>

				<div v-if="modal" @click.self="toggleModal" class="modal animated fadeIn">
					<div class="modal-body animated fadeInUp">
						<header class="modal-body-header">
							<p class="text-xl uppercase"><span class="font-black tracking-wide">Online workshop</span><span class="font-normal "> - Tilmeldingsformular </span></p>
						</header>

						<section>						
							<form action="/workshops/1/tilmelding" method="post" id="workshop-signup">

								{{ csrf_field() }}

								<div class="form-field">
									<label for="workshop_id" class="sr-only">Vælg workshop  <span class="asterisk">*</span></label>
									<select name="workshop_id" class="required" id="workshop_id">
										<option value="1" selected="selected">Dig & Din Business (1.500 DKK)</option>
									</select>
								</div>

								<div class="form-field">
									<label for="email" class="sr-only">E-mail  <span class="asterisk">*</span></label>
									<input type="email" value="" name="email" class="required email" id="email" placeholder="E-mail">
								</div>

								<div class="form-field flex flex-wrap">
									<div class="w-full md:w-1/2 md:pr-2 mb-4 md:mb-0">
										<label for="first_name" class="sr-only">Fornavn  <span class="asterisk">*</span></label>
										<input type="text" value="" name="first_name" class="required" id="first_name" placeholder="Fornavn">
									</div>

									<div class="w-full md:w-1/2 md:pl-2">
										<label for="last_name" class="sr-only">Efternavn  <span class="asterisk">*</span></label>
										<input type="text" value="" name="last_name" class="required" id="last_name" placeholder="Efternavn">
									</div>
								</div>
								<div class="form-field">
									<label for="questions[your_expectations]" class="sr-only">Hvad er dine forventninger til workshoppen?<span class="asterisk">*</span></label>
									<input type="text" value="" name="questions[your_expectations]" class="required" id="questions[your_expectations]" placeholder="Hvad er dine forventninger til workshoppen?">
								</div>
								<div class="form-field has-radio">
									<input type="radio" value="1" name="has_business" id="has_business_1"> 
									<label for="has_business_1">Jeg har allerede en business</label>
								</div>
								<div class="form-field has-radio">
									<input type="radio" value="0" name="has_business" id="has_business_2"> 
									<label for="has_business_2">Jeg overvejer at starte en business</label>
								</div>

								<div class="py-4">
									<button type="submit" value="Tilmeld" name="attend" id="attend" class="btn text-sm tracking-wide uppercase rounded">Tilmeld mig workshoppen</button>
								</div>

								<p class="text-sm">Efter du har tilmeldt dig via formularen her, så modtager du en mail med betalingslink (obs. der kan gå op til 24 timer). Når du har betalt denne er du tilmeldt workshoppen.</p>
								{{-- //og vil løbene bliv holdt opdateret pr. mail. Et par dage før workshoppens start modtager du en invitation til et lukket fora, hvor du kan stille spørgsmål og netværke med andre deltagere. --}}

							</form>
						</section>


						<span @click="toggleModal" class="absolute pin-t pin-r pt-4 px-4">
							<button type="button" title="Luk"><i class="ionicons ion-ios-close"></i></button>
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>



	<script src="https://js.stripe.com/v3/"></script>

{{-- 	<form action="/purchases" method="POST">
		{{ csrf_field() }}
		<button type="submit">Tilmeld mig nu</button>
	</form> --}}

</article>

@endsection

@section('scripts')

<script>
	let stripe = StripeCheckout.configure({
		key: "{{ config('services.stripe.key') }}",
		image: '',
		locale: 'auto'
	});

	document.querySelector('button').addEventListener('click', function () {
		stripe.open({
			name: 'Dig & Din Business',
			description: 'Online workshop',
			amount: 150000,
			currency: 'dkk'
		})
	});
</script>

@endsection