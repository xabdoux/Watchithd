<header>
<div class="container" style="padding-left:46px;padding-right:66px;margin-top: -8px;">
<div class="row">
<div class="col-xs-12 col-sm-4">
<h1>
<a href="{{ url("movies/$lang") }}"><img id="header-logo" src="{{ url('website-images/logo.png') }}" alt="WatchitHD"></a>
</h1>
</div>
<div class="col-xs-12 col-sm-8">
<form action="{{ url("/movies/$lang/searchmovies") }}" method="post" id="search">
{{csrf_field()}}
<input type="text" name="search" placeholder="{{ trans('words.search') }}" />
<input type="hidden" name="lang" value="{!!$lang!!}">
<button type="submit"><i class="fa fa-search"></i></button>
</form>
</div>
</div>
</div>
<nav class="navbar navbar-top menu container-fluid">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<i class="fa fa-bars"></i>
</button>
</div>
<div id="navbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-left">
<li><a href="{{ url("movies/$lang") }}"><i class="fa fa-home"></a></i></li>
<li @if(isset($films)) id="active-li" @endif><a @if(isset($films)) id="active-page"@endif href="{{url('/movies',['lang'=>$lang])}}">{{trans('words.movies')}}</a></li>
<li><a href="#" data-toggle="tooltip" data-placement="top" title="Soon">{{trans('words.series')}}</a></li>
<li><a href="#" data-toggle="tooltip" data-placement="top" title="Soon">{{trans('words.anime')}}</a></li>
<li><a href="{{url('/movies',['lang'=>$lang,'list'=>'list'])}}">{{trans('words.list')}}</a></li>
<li><a href="#" data-toggle="tooltip" data-placement="top" title="Soon">{{trans('words.news')}}</a></li>
<li @if(isset($orders)) id="active-li" @endif><a href="{{url('/orders')}}" @if(isset($orders)) id="active-page" @endif>{{trans('words.orders')}}</a></li>
<li @if(isset($contact)) id="active-li" @endif><a href="{{url('/contact')}}" @if(isset($contact)) id="active-page" @endif>{{trans('words.contact')}}</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
@if (!isset($contact) && !isset($help) && !isset($orders) && !isset($collaborate) && !isset($privacy) && !isset($about))
<li><span class="badge bg-red" style=" min-width: 5px;
    padding: 6px 8px;
    font-size: 14px;
    color: #fff;
    background-color: #bf2f2f;
    border-radius: 10px;margin-bottom: -16px;">{{App::getLocale()}}</span></li>
    @endif
<li class="dropdown">
<a class="dropdown-toggle" id="dropdownLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
{{trans('words.language')}} <span class="caret"></span>
</a>
<ul id="dropdown-menu" class="dropdown-menu" aria-labelledby="dropdownLang">
@yield("language")
</ul>
</li>
</ul>
</div>
</div>
</nav>
</header>