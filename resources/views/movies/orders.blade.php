@extends('layouts.movies_template')
@section('title')
Orders | WatchitHD.com
@stop
@section('desc_keyword')
<meta name="description" content="Watch HD Movies, Series, Anime For Free and without Registration at WatchitHD.com">
<meta name="keywords" content="WatchitHD, WatchitHD.com, www.WatchitHD.com, movies, series, anime, watch hd movies, watch HD films, Hot new movies, watch hd series, watch hd anime, Hot new series, Hot new anime, latest releases, movies 2016, series 2016, anime 2016, action movies, romantic movies, adventure movies">
@stop
@section('stylesheets')
{{ Html::style('assets/css/grids.min.css') }}
{{ Html::style('assets/css/home.css') }}
{{ Html::style('assets/css/stylesheet.css') }}
{{ Html::script('assets/js/jquery.min.js') }}
{{ Html::script('assets/js/grids.min.js') }}
@stop
@section('language')
<div style="margin-left:8px">
<p><span class="fa fa-warning"></span> No languages yet !</p>
</div>
@stop
@section('alphabet')
<div class="left-title alphabet">
<h3 style="color:#FFF;cursor:default">Orders Form</h3>
</div>
@stop
@section('content')
<div class="row" style="padding:15px">
<div class="col-md-12">
@if(Session::has('success_orders'))
<div class="alert alert-success">
<i class="glyphicon glyphicon-ok-sign"></i>
{!! Session::get('success_orders') !!}
</div>
@endif
<div class="row">
<div class="col-md-2 icon-md-2">
<i class="fa fa-file-text-o"></i>
</div>
<div class="col-md-10">
<p>Antes de solicitar una película, asegurate de haberla buscado en: “Buscador Personalizado”.<br><br>
Si no encontraste tu película, llena el siguiente formulario:
</p>
</div>
</div><br>
<form role="form" action="{{ url('orders') }}" method="post">
{{csrf_field()}}
<div class="form-group @if($errors->has('name')) has-error @endif">
<label class="control-label" for="name">Full name :*</label>
<input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Enter your full name" required>
<p class="help-block">{{$errors->first('name')}}</p>
</div>
<div class="form-group @if($errors->has('email_orders')) has-error @endif">
<label class="control-label" for="email_orders">Email :*</label>
<input type="email" class="form-control" value="{{ old('email') }}" id="email" name="email_orders" placeholder="Enter your email" required>
<p class="help-block">{{$errors->first('email_orders')}}</p>
</div>
<div class="form-group @if($errors->has('subject')) has-error @endif">
<label class="control-label" for="subject">Order :*</label>
<input type="text" class="form-control" value="{{ old('subject') }}" id="subject" name="subject" placeholder="Enter your movie name" required>
<p class="help-block">{{$errors->first('subject')}}</p>
</div>
<div class="form-group @if($errors->has('description')) has-error @endif">
<label class="control-label" for="website">Description :</label>
<textarea class="form-control" rows="7" name="description" value="{{ old('description') }}" placeholder="Enter a short description of your movie, serie or anime"></textarea>
<p class="help-block">{{$errors->first('description')}}</p>
</div>
<button type="submit" name="send" class="btn btn-lg btn-success" style="background:#6AC045">SEND</button>
</form>
</div>
</div>
@stop
@section('script')
{{ Html::script('assets/js/main.js') }}
{{ Html::script('assets/js/modernizr.js') }}
@stop