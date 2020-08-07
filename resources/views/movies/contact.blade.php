@extends('layouts.movies_template')
@section('title')
Contact Us | WatchitHD.com
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
<h3 style="color:#FFF;cursor:default">Contact Us</h3>
</div>
@stop
@section('content')
<div class="row" style="padding:15px">
<div class="col-md-12">
@if(Session::has('success_contact'))
<div class="alert alert-success">
<i class="glyphicon glyphicon-ok-sign"></i>
{!! Session::get('success_contact') !!}
</div>
@endif
<div class="row">
<div class="col-md-2 icon-md-2">
<i class="fa fa-at"></i>
</div>
<div class="col-md-10">
<p>Si tienes alguna duda, comentario o pregunta, puedes enviarlos mediante un mensaje
usando el formulario que aparece abajo. Si tienes problemas para ver o descargar
los cursos, por favor visita la sección de <a href="help.php">ayuda</a>.<br><br>
Cualquier pregunta o duda que no tenga que ver con la página o si ya existe una respuesta
en la sección de ayuda, no será respondida.
</p>
</div>
</div><br>
<form role="form" action="{{ url('contact') }}" method="post">
{{csrf_field()}}
<div class="form-group @if($errors->has('name')) has-error @endif">
<label class="control-label" for="name">Full name :*</label>
<input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Enter your full name" required>
<p class="help-block">{{$errors->first('name')}}</p>
</div>
<div class="form-group @if($errors->has('email_contact')) has-error @endif">
<label class="control-label" for="email_contact">Email :*</label>
<input type="email" class="form-control" value="{{ old('email_contact') }}" id="email_contact" name="email_contact" placeholder="Enter your email" required>
<p class="help-block">{{$errors->first('email_contact')}}</p>
</div>
<div class="form-group @if($errors->has('subject')) has-error @endif">
<label class="control-label" for="subject">Subject :*</label>
<input type="text" class="form-control" value="{{ old('subject') }}" id="subject" name="subject" placeholder="Enter your subject" required>
<p class="help-block">{{$errors->first('subject')}}</p>
</div>
<div class="form-group @if($errors->has('message')) has-error @endif">
<label class="control-label" for="message">Message :</label>
<textarea class="form-control" rows="7" name="message" value="{{ old('message') }}" placeholder="Enter a description of the subject"></textarea>
<p class="help-block">{{$errors->first('message')}}</p>
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