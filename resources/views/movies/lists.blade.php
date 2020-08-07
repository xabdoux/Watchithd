@extends('layouts.movies_template')
@section('title')
@if (sizeof($lists)==0)
No Result | WatchitHD.com
@else
Lists | WatchitHD.com
@endif
@stop
@section('desc_keyword')
<meta name="description" content="Watch HD Movies, Series, Anime For Free and without Registration at WatchitHD.com">
<meta name="keywords" content="WatchitHD, WatchitHD.com, www.WatchitHD.com, movies, series, anime, watch hd movies, watch HD films, Hot new movies, watch hd series, watch hd anime, Hot new series, Hot new anime, latest releases, movies 2016, series 2016, anime 2016, action movies, romantic movies, adventure movies">
@stop
@section('stylesheets')
{{ Html::style('assets/css/grids.min.css') }}
{{ Html::style('assets/css/movies.css') }}
{{ Html::style('assets/css/stylesheet.css') }}
@stop
@section('language')
<li><a href="{{url('/movies/en/list')}}">English</a></li>
<li><a href="{{url('/movies/es/list')}}">Spanish</a></li>
<li><a href="{{url('/movies/fr/list')}}">French</a></li>
<li><a href="{{url('/movies/ar/list')}}">Arabic</a></li>
@stop
@section('content')
@if (sizeof($lists)==0)
<div class="col-md-12 text-center" style="margin-top:30px">
<div class="alert alert-warning" style="font-size:25px">
<span class="fa fa-warning" style="font-size:30px"></span> No Result
</div>
</div>
@else
<div class="left-title alphabet">
<h3 style="color:#FFF;cursor:default">Movies List</h3>
</div>
<div class="row" style="padding:15px;text-align:center;">
@foreach ($lists as $list )
<div class="col-md-6" style="margin-bottom: -42px; ">
<!-- -->
<ul class="genres-ul">
<li>
<div class="list_inside_full inside_1"><a href="{{url('movies',['lang'=>$lang,'id'=>$list->id,'name'=>str_replace(' ', '-',$list->title)])}}" style="float: left;"><i class="fa fa-angle-right"></i>  {{ $list->title }}</a> <div style="float:right;margin-right: 2px;">({{ $list->year }})</div></div>
</li>
</ul>
</div>
@endforeach
</div>
@endif
@stop
@section('pagination')
{!! $lists->render() !!}
@stop
@section('script')
{{ Html::script('assets/js/jquery.min.js') }}
{{ Html::script('assets/js/grids.min.js') }}
{{ Html::script('assets/js/block-slider.min.js') }}
{{ Html::script('assets/js/main.js') }}
{{ Html::script('assets/js/modernizr.js') }}
<script>BlockSlider(document.getElementById("block-slider"),{sInterval:2000,sTransition:600,});</script>
@stop