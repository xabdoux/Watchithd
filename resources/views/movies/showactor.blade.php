@extends('layouts.movies_template')
@section('title')
@if (sizeof($movies)==0)
No Result | WatchitHD.com
@else
{{ $actor }} | WatchitHD.com
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
<li><a href="{{url('/movies/en/tag',['actor'=>'$actor'])}}">English</a></li>
<li><a href="{{url('/movies/en/tag',['actor'=>'$actor'])}}">Spanish</a></li>
<li><a href="{{url('/movies/en/tag',['actor'=>'$actor'])}}">French</a></li>
<li><a href="{{url('/movies/en/tag',['actor'=>'$actor'])}}">Arabic</a></li>
@stop
@section('alphabet')
<div class="left-title alphabet">
<h3 style="color:#FFF;cursor:default"><i class="fa fa-search"></i> Search Results for Actor: " {{str_replace('-', ' ',$actor)}}"</h3>
</div>
@stop
@section('content')
@if (sizeof($movies)==0)
<div class="col-md-12 text-center" style="margin-top:30px">
<div class="alert alert-warning" style="font-size:25px">
<span class="fa fa-warning" style="font-size:30px"></span> No Result
</div>
</div>
@else
@foreach ($movies as $movie )
<div class="col-xs-12 col-sm-3 col-md-3 movie-box" style="height:590px">
{{ Html::image("$movie->cover","$movie->title", array('width' => '165px','height'=>'234px')) }}
<p class="movie-name"><a href="{{url('movies',['lang'=>$lang,'id'=>$movie->idd,'name'=>str_replace(' ', '-',$movie->title)])}}">{{$movie->title}}</a></p>
<div class="movie-infos">
<p><span> GENRE:</span> {{$movie->genre_1}}@if(!empty($movie->genre_2)), {{$movie->genre_2}}@endif @if(!empty($movie->genre_3)), {{$movie->genre_3}} @endif</p>
<p><span> RELEASE:</span>{{$movie->release_date}}</p>
<p><span> RUNTIME:</span> {{$movie->runtime}}</p>
<p><span> QUALITY:</span> {{$movie->quality}}</p>
<p><span> TYPE:</span> {{$movie->type}}</p>
<p>
<?php echo $movie->star; ?>
</p>
</div>
<div class="watch-div">
<a class="btn btn-watch" href="{{url('movies',['lang'=>$lang,'id'=>$movie->idd,'name'=>str_replace(' ', '-',$movie->title)])}}">WATCH</a>
<a href="{{url('movies',['lang'=>$lang,'id'=>$movie->idd,'name'=>str_replace(' ', '-',$movie->title)])}}" class="btn flech-watch"><i class="fa fa-play"></i></a>
</div>
</div>
@endforeach
@endif
@stop
@section('pagination')
{!! $movies->render() !!}
@stop
@section('script')
{{ Html::script('assets/js/jquery.min.js') }}
{{ Html::script('assets/js/grids.min.js') }}
{{ Html::script('assets/js/block-slider.min.js') }}
{{ Html::script('assets/js/main.js') }}
{{ Html::script('assets/js/modernizr.js') }}
<script>BlockSlider(document.getElementById("block-slider"),{sInterval:2000,sTransition:600,});</script>
@stop