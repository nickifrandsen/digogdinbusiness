<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133436462-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-133436462-1');
</script>

<meta name="google-site-verification" content="qiwhfCfc08ikDXPa4ELLPo5BWyQFBxIo2D85fd7qrAk" />


@if(!$meta)
	
	<title>Dig & Din Business</title>

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Dig & Din Business">
    <meta itemprop="description" content="Skab en bedre business, som er i tråd med dine værdier, og hvor hverdagen macther dine drømme om frihed og fleksibilitet.">
    <meta itemprop="image" content="https://digogdinbusiness.dk/storage/digogdinbusiness_fb_op.png">
    <meta name="keywords" content="e-commerce,webshop,hjælp til webshop, webshop rådgivning, forretningsudvikling, virksomhedssparring">
    <meta name="author" content="Nicki Frandsen">

<!-- OpenGraph markup for Facebook -->
    <meta property="og:title" content="Dig & Din Business" />
    <meta property="og:description" content="Skab en bedre business, som er i tråd med dine værdier, og hvor hverdagen macther dine drømme om frihed og fleksibilitet.">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://digogdinbusiness.dk" />
    <meta property="og:image" content="https://digogdinbusiness.dk/storage/digogdinbusiness_fb_op.png" />

@else
	<title>{{ $meta['title'] or '' }}</title>

	<!-- Schema.org markup for Google+ -->
	<meta itemprop="name" content="{{ $meta['title'] or '' }}">
	<meta itemprop="description" content="{{ $meta['description'] or '' }}">
	<meta itemprop="image" content="{{ $meta['image'] or '' }}">
	<meta name="keywords" content="{{ $meta['keywords'] or '' }}">
	@if(isset($meta['author']))
		<meta name="author" content="{{ $meta['author']['first_name'] }} {{ $meta['author']['last_name'] }}">
		<meta name="twitter:creator" content="@nickifrandsen">
	@endif	
	<!-- OpenGraph markup for Facebook -->
	@if(isset($meta['og:title']))
		<meta property="og:title" content="{{ $meta['og:title'] }}" />
		<meta name="twitter:title" content="{{ $meta['og:title'] }}">
	@endif


	@if(isset($meta['og:description']))
		<meta property="og:description" content="{{ $meta['og:description'] }}">
		<meta name="twitter:description" content="{{ $meta['og:description'] }}">
	@endif

	@if(isset($meta['type']))
		<meta property="og:type" content="{{ $meta['type'] }}" />
	@endif

	@if(isset($meta['og:image']))
		<meta property="og:image" content="{{ $meta['og:image'] }}" />
		<meta name="twitter:image" content="{{ $meta['og:image'] }}">
	@endif

	<meta property="og:url" content="{{ Request::url() }}" />
	<meta property="og:site_name" content="Leafr" />

	@if(isset($meta['type']) && $meta['type'] == 'article')
		<meta name="twitter:card" content="summary"></meta>
		<meta property="article:published_time" content="{{ $meta['published_time'] }}">
	@endif 
@endif