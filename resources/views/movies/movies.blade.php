@extends('layouts.movies_template')
@section('title')
@if (sizeof($films)==0)
No Result | WatchitHD.com
@else
Movies | WatchitHD.com
@endif
@stop
@section('desc_keyword')
<meta name="description" content="Watch HD Movies, Series, Anime For Free and without Registration at WatchitHD.com">
<meta name="keywords" content="WatchitHD, WatchitHD.com, www.WatchitHD.com, movies, series, anime, watch hd movies, watch HD films, Hot new movies, watch hd series, watch hd anime, Hot new series, Hot new anime, latest releases, movies 2016, series 2016, anime 2016, action movies, romantic movies, adventure movies">
@stop
@section('stylesheets')
{{ Html::style('/assets/css/grids.min.css') }}
{{ Html::style('/assets/css/movies.css') }}
{{ Html::style('/assets/css/stylesheet.css') }}
@stop
@section('language')
<li><a href="{{url('/movies/en')}}">{{trans('words.english')}}</a></li>
<li><a href="{{url('/movies/es')}}">{{trans('words.spanish')}}</a></li>
<li><a href="{{url('/movies/fr')}}">{{trans('words.french')}}</a></li>
<li><a href="{{url('/movies/ar')}}">{{trans('words.arabic')}}</a></li>
@stop
@section('content')
@if (sizeof($films)==0)
<div class="col-md-12 text-center" style="margin-top:30px">
<div class="alert alert-warning" style="font-size:25px">
<span class="fa fa-warning" style="font-size:30px"></span> No Result
</div>
</div>
@else
@foreach ($films as $film )
<div class="col-xs-6 col-sm-3 col-md-3 movie-box" style="height:560px">
{{ Html::image("$film->cover","$film->title", array('width' => '165px','height'=>'234px')) }}
<h3 class="movie-name"><a href="{{url('movies',['lang'=>$lang,'id'=>$film->idd,'name'=>str_replace(' ', '-',$film->title)])}}">{{$film->title}}</a></h3>
<div class="movie-infos">
<p><span> {{trans('words.genre')}}:</span> {{$film->genre_1}}@if(!empty($film->genre_2)), {{$film->genre_2}}@endif @if(!empty($film->genre_3)), {{$film->genre_3}} @endif</p>
<p><span> {{trans('words.release')}}:</span>{{$film->release_date}}</p>
<p><span> {{trans('words.runtime')}}:</span> {{$film->runtime}}</p>
<p><span> {{trans('words.quality')}}:</span> {{$film->quality}}</p>
<p><span> {{trans('words.type')}}:</span> {{$film->type}}</p>
<p>
<?php echo $film->star; ?>
</p>
</div>
<div class="watch-div">
<a class="btn btn-watch" href="{{url('movies',['lang'=>$lang,'id'=>$film->idd,'name'=>str_replace(' ', '-',$film->title)])}}">{{trans('words.watch')}}</a>
<a href="{{url('movies',['lang'=>$lang,'id'=>$film->idd,'name'=>$film->title])}}" class="btn flech-watch"><i class="fa fa-play"></i></a>
</div>
</div>
@endforeach
@endif
@stop
@section('pagination')
{!! $films->render() !!}
@stop
@section('script')
{{ Html::script('/assets/js/jquery.min.js') }}
{{ Html::script('/assets/js/grids.min.js') }}
{{ Html::script('/assets/js/block-slider.min.js') }}
{{ Html::script('/assets/js/main.js') }}
{{ Html::script('/assets/js/modernizr.js') }}
<script>BlockSlider(document.getElementById("block-slider"),{sInterval:2000,sTransition:600,});</script>
 
@stop