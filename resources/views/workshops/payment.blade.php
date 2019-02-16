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
					<form action="/charge" method="post" id="payment-form">
						<div class="form-row">
							<label for="card-element">
								Credit or debit card
							</label>
							<div id="card-element">
								<!-- A Stripe Element will be inserted here. -->
							</div>

							<!-- Used to display form errors. -->
							<div id="card-errors" role="alert"></div>
						</div>

						<button>Submit Payment</button>
					</form>
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
