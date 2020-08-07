@extends('layouts.movies_template')
@section('title')
@if (sizeof($numberorder)==0)
No Result | WatchitHD.com
@else
Number Order | WatchitHD.com
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
<li><a href="{{url('/movies/en',['numberorder'=>'numberorder'])}}">English</a></li>
<li><a href="{{url('/movies/es',['numberorder'=>'numberorder'])}}">Spanish</a></li>
<li><a href="{{url('/movies/fr',['numberorder'=>'numberorder'])}}">French</a></li>
<li><a href="{{url('/movies/ar',['numberorder'=>'numberorder'])}}">Arabic</a></li>
@stop
@section('content')
@if (sizeof($numberorder)==0)
<div class="col-md-12 text-center" style="margin-top:30px">
<div class="alert alert-warning" style="font-size:25px">
<span class="fa fa-warning" style="font-size:30px"></span> No Result
</div>
</div>
@else
@foreach ($numberorder as $numorder )
<div class="col-xs-12 col-sm-3 col-md-3 movie-box" style="height:590px">
{{ Html::image("$numorder->cover","$numorder->title", array('width' => '165px','height'=>'234px')) }}
<p class="movie-name"><a href="{{url('movies',['lang'=>$lang,'id'=>$numorder->idd,'name'=>str_replace(' ', '-',$numorder->title)])}}">{{$numorder->title}}</a></p>
<div class="movie-infos">
<p><span> GENRE:</span> {{$numorder->genre_1}}@if(!empty($numorder->genre_2)), {{$numorder->genre_2}}@endif @if(!empty($numorder->genre_3)), {{$numorder->genre_3}} @endif</p>
<p><span> RELEASE:</span>{{$numorder->release_date}}</p>
<p><span> RUNTIME:</span> {{$numorder->runtime}}</p>
<p><span> QUALITY:</span> {{$numorder->quality}}</p>
<p><span> TYPE:</span> {{$numorder->type}}</p>
<p>
<?php echo $numorder->star; ?>
</p>
</div>
<div class="watch-div">
<a class="btn btn-watch" href="{{url('movies',['lang'=>$lang,'id'=>$numorder->idd,'name'=>str_replace(' ', '-',$numorder->title)])}}">WATCH</a>
<a href="{{url('movies',['lang'=>$lang,'id'=>$numorder->idd,'name'=>str_replace(' ', '-',$numorder->title)])}}" class="btn flech-watch"><i class="fa fa-play"></i></a>
</div>
</div>
@endforeach
@endif
@stop
@section('pagination')
{!! $numberorder->render() !!}
@stop
@section('script')
{{ Html::script('assets/js/jquery.min.js') }}
{{ Html::script('assets/js/grids.min.js') }}
{{ Html::script('assets/js/block-slider.min.js') }}
{{ Html::script('assets/js/main.js') }}
{{ Html::script('assets/js/modernizr.js') }}
<script>BlockSlider(document.getElementById("block-slider"),{sInterval:2000,sTransition:600,});</script>
@stop