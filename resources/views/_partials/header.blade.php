<header id="page-header" class="bg-brand-black">
	<div class="container">
		<nav id="main-nav" class="navbar">
		  <div class="flex items-center flex-no-shrink mr-6">
		    <a href="/" title="Forside" class="brand">
			   <img src="{{ asset('storage/digogdinbusiness_light.png') }}" alt="Dig & Din Business">
			</a>
		  </div>
		  <div class="block lg:hidden">
		    <button id="toggle-mobile-nav" 
	 				class="flex items-center px-3 py-2 border rounded btn-white btn">
		     <i class="ion-ios-menu"></i>&nbsp;&nbsp;Menu
		    </button>
		  </div>
		  <div id="nav-items" class="block flex-grow lg:flex lg:items-center lg:w-auto nav-items">
		    	<ul class="text-sm lg:flex-grow p-0">
		    		{{-- <li><a href="">Inspiration</a></li> --}}
		    		<li><a href="/">Workshops</a></li>
		    		{{-- <li><a href="/masterminds">Masterminds</a></li> --}}
		    		<li><a href="/sparring">1:1 Sparring</a></li>
		    		<li><a href="/nyhedsbrev">Nyhedsbrev</a></li>
		    		<li><a href="/kontakt">Kontakt</a></li>
		    	</ul>
		    <div class="mt-4 lg:mt-0">
		      <a href="/#sign-up" class="btn btn btn-sm">Workshop starter 1. marts</a>
		    </div>
		  </div>
		</nav>
	</div>
</header>