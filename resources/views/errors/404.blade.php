@extends('layouts.movies_template')
 @section('title')
 Page Not Found | WatchitHD.com
 @stop
 @section('desc_keyword')
<meta name="description" content="Watch HD Movies, Series, Anime For Free and without Registration at WatchitHD.com">
<meta name="keywords" content="WatchitHD, WatchitHD.com, www.WatchitHD.com, movies, series, anime, watch hd movies, watch HD films, Hot new movies, watch hd series, watch hd anime, Hot new series, Hot new anime, latest releases, movies 2016, series 2016, anime 2016, action movies, romantic movies, adventure movies">
 @stop
  @section('stylesheets')
    {{ Html::style('assets/css/grids.min.css') }}
    {{ Html::style('assets/css/movies.css') }}
    {{ Html::style('assets/css/stylesheet.css') }}
    {{ Html::script('assets/js/jquery.min.js') }}
    {{ Html::script('assets/js/grids.min.js') }}
@stop  
@section('language')
{{$error_404=""}}
<?php $lang=App::getlocale();?>
<div style="margin-left: 8px;">
 <p><span class="fa fa-warning"></span> No languages yet !</p>
</div>
@stop 
@section('alphabet')
@stop
@section('content')
<div style="margin-left: 240px;">
   <center><p style="font-size: 300px;margin-bottom: -60px;margin-top: -80px;">404</p>
   <p style="font-size:50px;"><span style="color: red;font-size:60px">Sorry</span> ,The Page you're looking for cannot be found</p>
   </center>
   </div>
 @stop
 @section('script')
    {{ Html::script('assets/js/main.js') }}
    {{ Html::script('assets/js/modernizr.js') }}
 @stop