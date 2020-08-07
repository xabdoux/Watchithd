@extends('layouts.movies_template')
@section('title')
@if (sizeof($search)==0)
No Result | WatchitHD.com
@else
{{ $keyword }} | WatchitHD.com
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
<li><a href="{{url('/movies/en')}}">English</a></li>
<li><a href="{{url('/movies/es')}}">Spanish</a></li>
<li><a href="{{url('/movies/fr')}}">French</a></li>
<li><a href="{{url('/movies/ar')}}">Arabic</a></li>
@stop
@section('alphabet')
<div class="left-title alphabet">
<h3 style="color:#FFF;cursor:default"><i class="fa fa-search"></i> Search Results for: "{{$keyword}}"</h3>
</div>
@stop
@section('content')
@if (sizeof($search)==0)
<div class="col-md-12 text-center" style="margin-top:30px">
<div class="alert alert-warning" style="font-size:25px">
<span class="fa fa-warning" style="font-size:30px"></span> No Result
</div>
</div>
@else
@foreach ($search as $s )
<div class="col-xs-12 col-sm-3 col-md-3 movie-box" style="height:590px">
{{ Html::image("$s->cover","$s->title", array('width' => '165px','height'=>'234px')) }}
<h4 class="movie-name"><a href="{{url('movies',['lang'=>$lang,'id'=>$s->idd,'name'=>str_replace(' ', '-',$s->title)])}}">{{$s->title}}</a></h4>
<div class="movie-infos">
<p><span> GENRE:</span> {{$s->genre_1}}@if(!empty($s->genre_2)), {{$s->genre_2}}@endif @if(!empty($s->genre_3)), {{$s->genre_3}} @endif</p>
<p><span> RELEASE:</span>{{$s->release_date}}</p>
<p><span> RUNTIME:</span> {{$s->runtime}}</p>
<p><span> QUALITY:</span> {{$s->quality}}</p>
<p><span> TYPE:</span> {{$s->type}}</p>
<p>
<?php echo $s->star; ?>
</p>
</div>
<div class="watch-div">
<a class="btn btn-watch" href="{{url('movies',['lang'=>$lang,'id'=>$s->idd,'name'=>str_replace(' ', '-',$s->title)])}}">WATCH</a>
<a href="{{url('movies',['lang'=>$lang,'id'=>$s->idd,'name'=>$s->title])}}" class="btn flech-watch"><i class="fa fa-play"></i></a>
</div>
</div>
@endforeach
@endif
@stop
@section('pagination')
{!! $search->render() !!}
@stop
@section('script')
{{ Html::script('assets/js/jquery.min.js') }}
{{ Html::script('assets/js/grids.min.js') }}
{{ Html::script('assets/js/block-slider.min.js') }}
{{ Html::script('assets/js/main.js') }}
{{ Html::script('assets/js/modernizr.js') }}
<script>BlockSlider(document.getElementById("block-slider"),{sInterval:2000,sTransition:600,});</script>
@stop