@extends('layouts.admin_template')
@section('header')
<h1>
Update movie <sup><small><i class="fa fa-edit"></i></small></sup>
<small></small>
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Update movie</li>
</ol>
@stop
@section('content')
<div class="row">
<div class="col-md-12">
@include('errors.error')
@include('success.success')
</div>
<form role="form" action="{{ url('admin/update-movie') }}" method="post" enctype="multipart/form-data">
{!! csrf_field() !!}
<input type="hidden" name="id" value="{{$id}}">
<div class="col-md-6">
<div class="box box-primary">
<div class="box-header with-border">
<h3 class="box-title">Movie informations</h3>
<div class="box-tools pull-right">
<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
</div>
</div>
<div class="box-body">
<div class="form-group @if($errors->has('title')) has-error @endif col-md-6 col-xs-12">
<label for="title">Title</label>
<input type="text" name="title" class="form-control" id="title" placeholder="Enter movie title" value="{{$movie->title }}">
</div>
<div class="form-group col-md-6 col-xs-12">
<label for="trailer">Trailer</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-link"></i>
</div>
<input type="text" name="trailer" class="form-control" id="trailer" value="{{$movie->trailer }}" placeholder="Enter movie trailer link">
</div>
</div>
<div class="form-group col-md-6 col-xs-12">
<label for="year">Year</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-link"></i>
</div>
<input type="text" name="year" class="form-control" id="year" value="{{$movie->year }}" placeholder="Enter movie year">
</div>
</div>
<div class="form-group col-md-6 col-xs-12">
<label for="release_date">Release Date:</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-calendar"></i>
</div>
<input type="text" name="release_date" class="form-control datepicker" id="release_date" value="{{$movie->release_date }}" placeholder="Enter Release date">
</div>
</div>
<div class="form-group col-md-6 col-xs-12">
<label for="country">Country</label>
<input type="text" name="country" class="form-control" id="country" value="{{$movie->country  }}" placeholder="Enter movie country">
</div>
<div class="form-group col-md-6 col-xs-12">
<label for="language">Language</label>
<input type="text" name="language" class="form-control" id="language" value="{{$movie->language}}" placeholder="Enter movie language">
</div>
<div class="form-group col-md-6 col-xs-12">
<label for="director">Director</label>
<input type="text" name="director" class="form-control" id="director" value="{{$movie->director}}" placeholder="Enter movie director">
</div>
<div class="form-group col-md-6 col-xs-12">
<label for="producers">Producers</label>
<input type="text" name="producer" class="form-control" id="producers" value="{{$movie->producer }}" placeholder="Enter movie producers">
</div>
<div class="form-group col-md-6 col-xs-12">
<label for="runtime">Running Time</label>
<input type="text" name="runtime" class="form-control" id="runtime" value="{{$movie->runtime}}" placeholder="Enter movie running time">
</div>
<div class="form-group col-md-6 col-xs-12">
<label for="quality">Quality</label>
<input type="text" class="form-control" name="quality" id="quality" value="{{$movie->quality}}" placeholder="Enter movie quality">
</div>
<div class="form-group col-md-4 col-xs-12">
<label>Genre 1</label>
<select class="form-control select2" name="genre_1" multiple="multiple" data- placeholder="Select a Genre" style="width:100%">
@if (!empty($movie->genre_1))
<option selected>{{$movie->genre_1}}</option>
@endif
<option>Action</option>
<option>Adolescents</option>
<option>Adventure</option>
<option>Animation</option>
<option>Biography</option>
<option>Comedy</option>
<option>Crime</option>
<option>Science Fic.</option>
<option>Sport</option>
<option>Supernatural</option>
<option>Documentary</option>
<option>Drama</option>
<option>Family</option>
<option>Fantasy</option>
<option>Infantile</option>
<option>Musical</option>
<option>Mystery</option>
<option>Police</option>
<option>Romance</option>
<option>Terror</option>
<option>Thriller</option>
<option>Vampires</option>
<option>War</option>
<option>Western</option>
</select>
</div>
<div class="form-group col-md-4 col-xs-12">
<label>Genre 2</label>
<select class="form-control select2" name="genre_2" multiple="multiple" placeholder="Select a Genre" style="width:100%">
@if (!empty($movie->genre_2))
<option selected>{{$movie->genre_2}}</option>
@endif
<option>Action</option>
<option>Adolescents</option>
<option>Adventure</option>
<option>Animation</option>
<option>Biography</option>
<option>Comedy</option>
<option>Crime</option>
<option>Science Fic.</option>
<option>Sport</option>
<option>Supernatural</option>
<option>Documentary</option>
<option>Drama</option>
<option>Family</option>
<option>Fantasy</option>
<option>Infantile</option>
<option>Musical</option>
<option>Mystery</option>
<option>Police</option>
<option>Romance</option>
<option>Terror</option>
<option>Thriller</option>
<option>Vampires</option>
<option>War</option>
<option>Western</option>
</select>
</div>
<div class="form-group col-md-4 col-xs-12">
<label>Genre 3</label>
<select class="form-control select2" name="genre_3" multiple="multiple" placeholder="Select a Genre" style="width:100%">
@if (!empty($movie->genre_3))
<option selected> {{$movie->genre_3 }}</option>
@endif
<option>Action</option>
<option>Adolescents</option>
<option>Adventure</option>
<option>Animation</option>
<option>Biography</option>
<option>Comedy</option>
<option>Crime</option>
<option>Science Fic.</option>
<option>Sport</option>
<option>Supernatural</option>
<option>Documentary</option>
<option>Drama</option>
<option>Family</option>
<option>Fantasy</option>
<option>Infantile</option>
<option>Musical</option>
<option>Mystery</option>
<option>Police</option>
<option>Romance</option>
<option>Terror</option>
<option>Thriller</option>
<option>Vampires</option>
<option>War</option>
<option>Western</option>
</select>
</div>
<div class="form-group col-md-6 col-xs-12">
<label for="type">Type</label>
<input type="text" class="form-control" name="type" id="type" value="{{$movie->type }}" placeholder="Enter movie type">
</div>
<div class="form-group col-xs-12">
<label for="cover">Cover</label>
<input type="file" name="cover" id="cover" style="padding:5px 0">
<div class="col-md-7">
<div class="box box-danger">
<div class="box-body no-padding" style="height:360px">
{{ Html::image("$movie->cover","$movie->title", array('width' => '250px','height'=>'358px')) }}
</div>
</div>
</div>
<div class="form-group col-md-12 col-xs-12">
<label for="tags">Tags</label>
<input type="text" class="form-control" name="tags" id="tags" value="{{$movie->tags }}" placeholder="Enter movie tags">
</div>
</div>
</div>
</div>
<div class="box box-success">
<div class="box-header with-border">
<h3 class="box-title">Rating</h3>
<div class="box-tools pull-right">
<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
</div>
</div>
<div class="box-body"><center>
Selected : <?php echo $movie->star ;?>
<div class="form-group">
<label class="col-md-3 col-xs-6">
<input type="radio" name="star" class="flat-red" value='<i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>'>
<i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
</label>
<label class="col-md-3 col-xs-6">
<input type="radio" name="star" class="flat-red" value='<i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o></i>'>
<i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
</label>
<label class="col-md-3 col-xs-6">
<input type="radio" name="star" class="flat-red" value='<i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>'>
<i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
</label>
<label class="col-md-3 col-xs-6">
<input type="radio" name="star" class="flat-red" value='<i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>'>
<i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
</label>
<label class="col-md-3 col-xs-6">
<input type="radio" name="star" class="flat-red" value='<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>'>
<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
</label>
<label class="col-md-3 col-xs-6">
<input type="radio" name="star" class="flat-red" value='<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>'>
<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
</label>
<label class="col-md-3 col-xs-6">
<input type="radio" name="star" class="flat-red" value='<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>'>
<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
</label>
<label class="col-md-3 col-xs-6">
<input type="radio" name="star" class="flat-red" value='<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i>'>
<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i>
</label>
<label class="col-md-3 col-xs-6">
<input type="radio" name="star" class="flat-red" value='<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>'>
<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
</label>
<label class="col-md-3 col-xs-6">
<input type="radio" name="star" class="flat-red" value='<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>'>
<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
</label>
<label class="col-md-3 col-xs-6">
<input type="radio" name="star" class="flat-red" value='<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>'>
<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
</label>
</div></center>
</div>
</div>
<div class="box box-danger @if(empty($movie->en_name1)) collapsed-box @endif">
<div class="box-header with-border">
<h3 class="box-title">English Servers</h3>
<div class="box-tools pull-right">
<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
</div>
</div>
<div class="box-body">
<div class="form-group col-md-4 col-xs-12">
<label for="en_name1">Server1 Name</label>
<input type="text" name="en_name1" class="form-control" id="en_name1" value="{{$movie->en_name1}}" placeholder="Enter movie Server1 Name">
</div>
<div class="form-group col-md-8 col-xs-12">
<label for="en_link1">Server1 link</label>
<input type="text" name="en_link1" class="form-control" id="en_link1" value="{{$movie->en_link1}}" placeholder="Enter movie Server1 link">
</div>
<div class="form-group col-md-4 col-xs-12">
<label for="en_name2">Server2 Name</label>
<input type="text" name="en_name2" class="form-control" id="en_name2" value="{{$movie->en_name2 }}" placeholder="Enter movie Server2 Name">
</div>
<div class="form-group col-md-8 col-xs-12">
<label for="en_link2">Server2 link</label>
<input type="text" name="en_link2" class="form-control" id="en_link2" value="{{$movie->en_link2 }}" placeholder="Enter movie Server2 link">
</div>
<div class="form-group col-md-4 col-xs-12">
<label for="en_name3">Server3 Name</label>
<input type="text" name="en_name3" class="form-control" id="en_name3" value="{{$movie->en_name3 }}" placeholder="Enter movie Server3 Name">
</div>
<div class="form-group col-md-8 col-xs-12">
<label for="en_link3">Server3 link</label>
<input type="text" name="en_link3" class="form-control" id="en_link3" value="{{$movie->en_link3 }}" placeholder="Enter movie Server3 link">
</div>
<div class="form-group col-md-4 col-xs-12">
<label for="en_name4">Server4 Name</label>
<input type="text" name="en_name4" class="form-control" id="en_name4" value="{{$movie->en_name4 }}" placeholder="Enter movie Server4 Name">
</div>
<div class="form-group col-md-8 col-xs-12">
<label for="en_link4">Server4 link</label>
<input type="text" name="en_link4" class="form-control" id="en_link4" value="{{$movie->en_link4 }}" placeholder="Enter movie Server4 link">
</div>
<div class="form-group col-md-4 col-xs-12">
<label for="en_name5">Server5 Name</label>
<input type="text" name="en_name5" class="form-control" id="en_name5" value="{{$movie->en_name5 }}" placeholder="Enter movie Server5 Name">
</div>
<div class="form-group col-md-8 col-xs-12">
<label for="en_link5">Server5 link</label>
<input type="text" name="en_link5" class="form-control" id="en_link5" value="{{$movie->en_link5 }}" placeholder="Enter movie Server5 link">
</div>
<div class="form-group col-md-4 col-xs-12">
<label for="en_name6">Server6 Name</label>
<input type="text" name="en_name6" class="form-control" id="en_name6" value="{{$movie->en_name6 }}" placeholder="Enter movie Server6 Name">
</div>
<div class="form-group col-md-8 col-xs-12">
<label for="en_link6">Server6 link</label>
<input type="text" name="en_link6" class="form-control" id="en_link6" value="{{$movie->en_link6 }}" placeholder="Enter movie Server6 link">
</div>
</div>
</div>
<div class="box box-warning @if(empty($movie->ar_name1)) collapsed-box @endif">
<div class="box-header with-border">
<h3 class="box-title">Arabic Servers</h3>
<div class="box-tools pull-right">
<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
</div>
</div>
<div class="box-body">
<div class="form-group col-md-4 col-xs-12">
<label for="ar_name1">Server1 Name</label>
<input type="text" name="ar_name1" class="form-control" id="ar_name1" value="{{$movie->ar_name1 }}" placeholder="Enter movie Server1 Name">
</div>
<div class="form-group col-md-8 col-xs-12">
<label for="ar_link1">Server1 link</label>
<input type="text" name="ar_link1" class="form-control" id="ar_link1" value="{{$movie->ar_link1 }}" placeholder="Enter movie Server1 link">
</div>
<div class="form-group col-md-4 col-xs-12">
<label for="ar_name2">Server2 Name</label>
<input type="text" name="ar_name2" class="form-control" id="ar_name2" value="{{$movie->ar_name2 }}" placeholder="Enter movie Server2 Name">
</div>
<div class="form-group col-md-8 col-xs-12">
<label for="ar_link2">Server2 link</label>
<input type="text" name="ar_link2" class="form-control" id="ar_link2" value="{{$movie->ar_link2 }}" placeholder="Enter movie Server2 link">
</div>
<div class="form-group col-md-4 col-xs-12">
<label for="ar_name3">Server3 Name</label>
<input type="text" name="ar_name3" class="form-control" id="ar_name3" value="{{$movie->ar_name3 }}" placeholder="Enter movie Server3 Name">
</div>
<div class="form-group col-md-8 col-xs-12">
<label for="ar_link3">Server3 link</label>
<input type="text" name="ar_link3" class="form-control" id="ar_link3" value="{{$movie->ar_link3 }}" placeholder="Enter movie Server3 link">
</div>
<div class="form-group col-md-4 col-xs-12">
<label for="ar_name4">Server4 Name</label>
<input type="text" name="ar_name4" class="form-control" id="ar_name4" value="{{$movie->ar_name4 }}" placeholder="Enter movie Server4 Name">
</div>
<div class="form-group col-md-8 col-xs-12">
<label for="ar_link4">Server4 link</label>
<input type="text" name="ar_link4" class="form-control" id="ar_link4" value="{{$movie->ar_link4 }}" placeholder="Enter movie Server4 link">
</div>
<div class="form-group col-md-4 col-xs-12">
<label for="ar_name5">Server5 Name</label>
<input type="text" name="ar_name5" class="form-control" id="ar_name5" value="{{$movie->ar_name5 }}" placeholder="Enter movie Server5 Name">
</div>
<div class="form-group col-md-8 col-xs-12">
<label for="ar_link5">Server5 link</label>
<input type="text" name="ar_link5" class="form-control" id="ar_link5" value="{{$movie->ar_link5 }}" placeholder="Enter movie Server5 link">
</div>
<div class="form-group col-md-4 col-xs-12">
<label for="ar_name6">Server6 Name</label>
<input type="text" name="ar_name6" class="form-control" id="ar_name6" value="{{$movie->ar_name6 }}" placeholder="Enter movie Server6 Name">
</div>
<div class="form-group col-md-8 col-xs-12">
<label for="ar_link6">Server6 link</label>
<input type="text" name="ar_link6" class="form-control" id="ar_link6" value="{{$movie->ar_link6 }}" placeholder="Enter movie Server6 link">
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="box box-success">
<div class="box-header with-border">
<h3 class="box-title">Storyline</h3>
<div class="box-tools pull-right">
<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
</div>
</div>
<div class="box-body">
<div class="form-group">
<label for="en_story">English</label>
<textarea name="en" class="form-control" id="en_story">{{$movie->en}}</textarea>
</div>
<div class="form-group">
<label for="ar_story">Arabic</label>
<textarea name="ar" class="form-control" id="ar_story">{{$movie->ar}}</textarea>
</div>
<div class="form-group">
<label for="es_story">Spanish</label>
<textarea name="es" class="form-control" id="es_story">{{$movie->es}}</textarea>
</div>
<div class="form-group">
<label for="fr_story">French</label>
<textarea name="fr" class="form-control" id="fr_story">{{$movie->fr}}</textarea>
</div>
</div>
</div>
<div class="box box-info @if(empty($movie->actor_name1)) collapsed-box @endif">
<div class="box-header with-border">
<h3 class="box-title">Main Actors</h3>
<div class="box-tools pull-right">
<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
</div>
</div>
<div class="box-body">
<div class="form-group col-md-6 col-xs-12">
<label for="actor_name1">Actor1 Name</label>
<input type="text" name="actor_name1" class="form-control" id="actor_name1" value="{{$movie->actor_name1 }}" placeholder="Enter actor1 real name">
</div>
<div class="form-group col-md-6 col-xs-12">
<label for="dist_name1">As</label>
<input type="text" name="dist_name1" class="form-control" id="dist_name1" value="{{$movie->dist_name1}}" placeholder="Enter actor1 dist">
</div>
<div class="form-group col-md-6 col-xs-12">
<label for="actor_name2">Actor2 Name</label>
<input type="text" name="actor_name2" class="form-control" id="actor_name2" value="{{$movie->actor_name2 }}" placeholder="Enter actor2 real name">
</div>
<div class="form-group col-md-6 col-xs-12">
<label for="dist_name2">As</label>
<input type="text" name="dist_name2" class="form-control" id="dist_name2" value="{{$movie->dist_name2}}" placeholder="Enter actor2 dist">
</div>
<div class="form-group col-md-6 col-xs-12">
<label for="actor_name3">Actor3 Name</label>
<input type="text" name="actor_name3" class="form-control" id="actor_name3" value="{{$movie->actor_name3 }}" placeholder="Enter actor3 real name">
</div>
<div class="form-group col-md-6 col-xs-12">
<label for="dist_name3">As</label>
<input type="text" name="dist_name3" class="form-control" id="dist_name3" value="{{$movie->dist_name3}}" placeholder="Enter actor3 dist">
</div>
<div class="form-group col-md-6 col-xs-12">
<label for="actor_name4">Actor4 Name</label>
<input type="text" name="actor_name4" class="form-control" id="actor_name4" value="{{$movie->actor_name4 }}" placeholder="Enter actor4 real name">
</div>
<div class="form-group col-md-6 col-xs-12">
<label for="dist_name4">As</label>
<input type="text" name="dist_name4" class="form-control" id="dist_name4" value="{{$movie->dist_name4}}" placeholder="Enter actor4 dist">
</div>
<div class="form-group col-md-6 col-xs-12">
<label for="actor_name5">Actor5 Name</label>
<input type="text" name="actor_name5" class="form-control" id="actor_name5" value="{{$movie->actor_name5 }}" placeholder="Enter actor5 real name">
</div>
<div class="form-group col-md-6 col-xs-12">
<label for="dist_name5">As</label>
<input type="text" name="dist_name5" class="form-control" id="dist_name5" value="{{$movie->dist_name5}}" placeholder="Enter actor5 dist">
</div>
</div>
</div>
<div class="box box-primary @if(empty($movie->es_name1)) collapsed-box @endif">
<div class="box-header with-border">
<h3 class="box-title">Spanish Servers</h3>
<div class="box-tools pull-right">
<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
</div>
</div>
<div class="box-body">
<div class="form-group col-md-4 col-xs-12">
<label for="es_name1">Server1 Name</label>
<input type="text" name="es_name1" class="form-control" id="es_name1" value="{{$movie->es_name1 }}" placeholder="Enter movie Server1 Name">
</div>
<div class="form-group col-md-8 col-xs-12">
<label for="es_link1">Server1 link</label>
<input type="text" name="es_link1" class="form-control" id="es_link1" value="{{$movie->es_link1 }}" placeholder="Enter movie Server1 link">
</div>
<div class="form-group col-md-4 col-xs-12">
<label for="es_name2">Server2 Name</label>
<input type="text" name="es_name2" class="form-control" id="es_name2" value="{{$movie->es_name2 }}" placeholder="Enter movie Server2 Name">
</div>
<div class="form-group col-md-8 col-xs-12">
<label for="es_link2">Server2 link</label>
<input type="text" name="es_link2" class="form-control" id="es_link2" value="{{$movie->es_link2 }}" placeholder="Enter movie Server2 link">
</div>
<div class="form-group col-md-4 col-xs-12">
<label for="es_name3">Server3 Name</label>
<input type="text" name="es_name3" class="form-control" id="es_name3" value="{{$movie->es_name3 }}" placeholder="Enter movie Server3 Name">
</div>
<div class="form-group col-md-8 col-xs-12">
<label for="es_link3">Server3 link</label>
<input type="text" name="es_link3" class="form-control" id="es_link3" value="{{$movie->es_link3 }}" placeholder="Enter movie Server3 link">
</div>
<div class="form-group col-md-4 col-xs-12">
<label for="es_name4">Server4 Name</label>
<input type="text" name="es_name4" class="form-control" id="es_name4" value="{{$movie->es_name4 }}" placeholder="Enter movie Server4 Name">
</div>
<div class="form-group col-md-8 col-xs-12">
<label for="es_link4">Server4 link</label>
<input type="text" name="es_link4" class="form-control" id="es_link4" value="{{$movie->es_link4 }}" placeholder="Enter movie Server4 link">
</div>
<div class="form-group col-md-4 col-xs-12">
<label for="es_name5">Server5 Name</label>
<input type="text" name="es_name5" class="form-control" id="es_name5" value="{{$movie->es_name5 }}" placeholder="Enter movie Server5 Name">
</div>
<div class="form-group col-md-8 col-xs-12">
<label for="es_link5">Server5 link</label>
<input type="text" name="es_link5" class="form-control" id="es_link5" value="{{$movie->es_link5 }}" placeholder="Enter movie Server5 link">
</div>
<div class="form-group col-md-4 col-xs-12">
<label for="es_name6">Server6 Name</label>
<input type="text" name="es_name6" class="form-control" id="es_name6" value="{{$movie->es_name6 }}" placeholder="Enter movie Server6 Name">
</div>
<div class="form-group col-md-8 col-xs-12">
<label for="es_link6">Server6 link</label>
<input type="text" name="es_link6" class="form-control" id="es_link6" value="{{$movie->es_link6 }}" placeholder="Enter movie Server6 link">
</div>
</div>
</div>
<div class="box box-danger @if(empty($movie->fr_name1)) collapsed-box @endif">
<div class="box-header with-border">
<h3 class="box-title">French Servers</h3>
<div class="box-tools pull-right">
<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
</div>
</div>
<div class="box-body">
<div class="form-group col-md-4 col-xs-12">
<label for="fr_name1">Server1 Name</label>
<input type="text" name="fr_name1" class="form-control" id="fr_name1" value="{{$movie->fr_name1 }}" placeholder="Enter movie Server1 Name">
</div>
<div class="form-group col-md-8 col-xs-12">
<label for="fr_link1">Server1 link</label>
<input type="text" name="fr_link1" class="form-control" id="fr_link1" value="{{$movie->fr_link1 }}" placeholder="Enter movie Server1 link">
</div>
<div class="form-group col-md-4 col-xs-12">
<label for="fr_name2">Server2 Name</label>
<input type="text" name="fr_name2" class="form-control" id="fr_name2" value="{{$movie->fr_name2 }}" placeholder="Enter movie Server2 Name">
</div>
<div class="form-group col-md-8 col-xs-12">
<label for="fr_link2">Server2 link</label>
<input type="text" name="fr_link2" class="form-control" id="fr_link2" value="{{$movie->fr_link2 }}" placeholder="Enter movie Server2 link">
</div>
<div class="form-group col-md-4 col-xs-12">
<label for="fr_name3">Server3 Name</label>
<input type="text" name="fr_name3" class="form-control" id="fr_name3" value="{{$movie->fr_name3 }}" placeholder="Enter movie Server3 Name">
</div>
<div class="form-group col-md-8 col-xs-12">
<label for="fr_link3">Server3 link</label>
<input type="text" name="fr_link3" class="form-control" id="fr_link3" value="{{$movie->fr_link3 }}" placeholder="Enter movie Server3 link">
</div>
<div class="form-group col-md-4 col-xs-12">
<label for="fr_name4">Server4 Name</label>
<input type="text" name="fr_name4" class="form-control" id="fr_name4" value="{{$movie->fr_name4 }}" placeholder="Enter movie Server4 Name">
</div>
<div class="form-group col-md-8 col-xs-12">
<label for="fr_link4">Server4 link</label>
<input type="text" name="fr_link4" class="form-control" id="fr_link4" value="{{$movie->fr_link4 }}" placeholder="Enter movie Server4 link">
</div>
<div class="form-group col-md-4 col-xs-12">
<label for="fr_name5">Server5 Name</label>
<input type="text" name="fr_name5" class="form-control" id="fr_name5" value="{{$movie->fr_name5 }}" placeholder="Enter movie Server5 Name">
</div>
<div class="form-group col-md-8 col-xs-12">
<label for="fr_link5">Server5 link</label>
<input type="text" name="fr_link5" class="form-control" id="fr_link5" value="{{$movie->fr_link5 }}" placeholder="Enter movie Server5 link">
</div>
<div class="form-group col-md-4 col-xs-12">
<label for="fr_name6">Server6 Name</label>
<input type="text" name="fr_name6" class="form-control" id="fr_name6" value="{{$movie->fr_name6 }}" placeholder="Enter movie Server6 Name">
</div>
<div class="form-group col-md-8 col-xs-12">
<label for="fr_link6">Server6 link</label>
<input type="text" name="fr_link6" class="form-control" id="fr_link6" value="{{$movie->fr_link6 }}" placeholder="Enter movie Server6 link">
</div>
</div>
</div>
</div>
</div>
<center><button type="submit" class="btn btn-primary btn-lg">Submit</button></center>
</form>
@stop