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
					
					<p class="text-center text-2xl"></p>
				</div>

				<div class="pb-6 is-content">
					

					<div class="flex flex-wrap">
						<section class="w-full sm:w-2/3">
							<h1 class="font-black uppercase text-5xl">
								<span class="pb-4 font-normal text-xl uppercase">Dig & Din Business</span><br>
								Nyhedsbrev
							</h1>
						</section>
						<section class="w-full sm:w-1/3 newsletter-form">
							<form action="https://digogdinbusiness.us20.list-manage.com/subscribe/post?u=9c05a6b2e7024f82f412a839f&amp;id=e2c44c68fd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<input type="hidden" name="SOURCE" value="{{ URL::current() }}">
							<div class="form-field">
								<label for="mce-FNAME">Fornavn  <span class="asterisk">*</span></label>
								<input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
							</div>
							<div class="form-field">
								<label for="mce-EMAIL">E-mail  <span class="asterisk">*</span></label>
								<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
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

					<!--End mc_embed_signup-->
				</div>

			</div>
		</div>
	</section>

</article>

@endsection
