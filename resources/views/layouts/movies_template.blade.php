<!DOCTYPE html>
<html lang="{{$lang}}">
<head>
<title>@yield('title')</title>
<meta charset=UTF-8>
<meta http-equiv=X-UA-Compatible content="IE=edge">
<meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1">
@yield('desc_keyword')
<link rel="shortcut icon" href="{{ url('website-images/shortcut.png') }}">
{{ Html::style('assets/font-awesome/css/font-awesome.min.css') }}
<script src="https://apis.google.com/js/platform.js"></script>
@yield('stylesheets')
</head>
<body>
<style>
.facebookpage { display:none;z-index: 200;
    width: 381px;
    height: 166px;
    position: fixed;
    margin-top: 35%;
    margin-left: 67%;
     }
</style>
<div class="alert alert-success facebookpage" style="color: #365899;
    background-color: #f5f5f5;
    border-color: #31353d;">
  <div class="row" style="margin-top: -15px;">
  <div class="col-md-8">
  	 <span class="fa fa-facebook-square"></span>
  </div>
  <div class="col-md-4">
  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  </div>
  <div class="col-md-12">
  	@include('parts.facebook')
  </div>
   </div>
</div>
@if (!isset($films))
	<style type="text/css">
		.row {
    margin-top: 0;
}
 
	</style>
@endif

@include('parts.header')
@if (!isset($search) && !isset($lists) && !isset($movie) && !isset($orders)&& !isset($about) && !isset($collaborate) && !isset($contact) && !isset($help) && !isset($privacy) && !isset($error_404) )
@include("parts.slider")
@endif
<div class=container style="@if (!isset($films)) margin-top:50px;@else margin-top:40px;margin-bottom:20px @endif">
<div class=row>
<div class="col-xs-12 col-md-8">
@if (!isset($lists) && !isset($search) && !isset($movie) && !isset($actor) && !isset($orders) && !isset($about) && !isset($collaborate) && !isset($contact) && !isset($help) && !isset($privacy) && !isset($error_404) )
@include('parts.alphabetical')
@endif
@yield('alphabet')
<div class=row>
@yield('content')
</div>
</div>
<div class="col-xs-12 col-md-4">

@if (!isset($orders) && !isset($about) && !isset($collaborate) && !isset($contact) && !isset($help) && !isset($privacy) && !isset($error_404))
@if (!isset($movie))
@include('parts.genres')
@include('parts.years')
@endif
@include('parts.most_popular')

@include('parts.facebook')
@include('parts.youtube')
 @if (isset($movie))
@include('parts.recommended')
@endif
<!-- @include('parts.upcoming') -->

 @endif

@if (!isset($error_404))
@include('parts.subscribe')
@endif
@if (isset($orders) or isset($contact))
  @include('parts.facebook')
@include('parts.youtube')
@endif
</div>
</div>
</div>
<center>
@yield('pagination')
</center>
@include('parts.footer')
<a href=#0 class=cd-top>Top</a>
@yield('script')
<!--  <script type = "text/javascript">  
$(window).load(function() {
   setTimeout(function() {
       $(".facebookpage").show('fadeIn', {}, 500)
   }, 10000);
});
</script> -->
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

 

</body>
</html>