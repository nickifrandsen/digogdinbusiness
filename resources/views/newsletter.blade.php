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

				<div class="pb-6">
					
					<h1 class="font-bold uppercase text-5xl text-center">
						<span class="pb-4 font-normal text-xl uppercase">Nyhedsbrev</span><br>
						Dig & Din Business Insider
					</h1>
				</div>

				<div class="pb-6 is-content">
					<div class="flex flex-wrap py-12 pb-24">
						<section class="w-full sm:w-2/3 sm:pr-24">
							<p>Skriv dig op til Dig & Din Business Insider, så får du to gange månedligt tips, tricks, værktøjer og artikler som du kan bruge til at skabe en business som du trives med og som passer til det liv du gerne vil leve.</p>
							<p>Hvert nyhedsbrev indeholder en artikel samt en række links ideer og værktøjer som jeg finder inspirerende og som jeg gerne vil dele med dig. </p>
						</section>
						<section class="w-full sm:w-1/3 newsletter-form">
							<form action="https://digogdinbusiness.us20.list-manage.com/subscribe/post?u=9c05a6b2e7024f82f412a839f&amp;id=e2c44c68fd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								<input type="hidden" name="SOURCE" value="{{ URL::current() }}">
								<div class="form-field">
									<label for="mce-FNAME" class="sr-only">Fornavn  <span class="asterisk">*</span></label>
									<input type="text" value="" name="FNAME" class="required" id="mce-FNAME" placeholder="Indtast dit fornavn...">
								</div>
								<div class="form-field">
									<label for="mce-EMAIL" class="sr-only">E-mail  <span class="asterisk">*</span></label>
									<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Indtast din email...">
								</div>
								<div id="mce-responses" class="clear">
									<div class="response" id="mce-error-response" style="display:none"></div>
									<div class="response" id="mce-success-response" style="display:none"></div>
								</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_9c05a6b2e7024f82f412a839f_e2c44c68fd" tabindex="-1" value=""></div>

								<button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn">Tilmeld dig her</button>
							</form>
						</section>
					</div>
				</div>

			</div>
		</div>
	</section>

</article>

@endsection
