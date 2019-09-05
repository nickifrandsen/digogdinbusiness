@section('meta')
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133436462-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-133436462-1');
  </script>

  <!-- Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '562243007519037');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=562243007519037&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->

  <meta name="google-site-verification" content="qiwhfCfc08ikDXPa4ELLPo5BWyQFBxIo2D85fd7qrAk" />

  	
  <title>{!! $title ?? env('APP_NAME') !!}</title>

  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="{!! $title ?? '' !!}">
  <meta itemprop="description" content="{{ $description ?? '' }}">
  <meta itemprop="image" content="https://digogdinbusiness.dk/storage/digogdinbusiness_fb_op.png">
  <meta name="keywords" content="e-commerce,webshop,hjælp til webshop, webshop rådgivning, forretningsudvikling, virksomhedssparring">
  
  @if(isset($author))
    <meta name="author" content="{{ $author }}">
  @endif
  
  @if(isset($og_title) OR isset($title))
    <meta property="og:title" content="{!! $og_title ?? $title !!}" />
  @endif
  @if(isset($og_description) OR isset($description))
    <meta property="og:description" content="{!! $og_description ?? $description !!}">
  @endif
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://digogdinbusiness.dk" />
  <meta property="og:image" content="https://digogdinbusiness.dk/storage/digogdinbusiness_fb_op.png" />
@endsection
