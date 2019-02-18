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

	<section class="mb-12 py-24">

		<div class="container">

			<div class="w-full">

				<div class="pb-6 text-center">
					<p>Hej {{ $attendee->first_name }}, <br>
					Her er dit betalingslink til {{ $attendee->workshop->title }} på {{ $attendee->workshop->unit_price }} DKK</p>
					<p>
						Med venlig hilsen <br>
						Nicki Frandsen <br>
						Dig & Din Business
					</p>
				 	<checkout-form email="{{ $attendee->email }}"></checkout-form>
				</div>

				<div class="pb-6 is-content">
				</div>



			</div>
		</div>
	</section>

</article>

@endsection
@section('scripts')
<script src="https://js.stripe.com/v3/"></script>
@endsection
