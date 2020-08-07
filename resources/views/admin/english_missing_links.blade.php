@extends('layouts.admin_template')
@section('header')
<h1>
<span class="fa fa-tv"></span> English missing links 
<small></small>
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">English missing links</li>
</ol>
@stop
@section('content')
<div class="row">
<div class="col-md-12">
@include('errors.error')
@include('success.success')
<div class="row">
@foreach ($movies as $movie)
<div class="col-md-3">
<div class="box box-success">
<div class="box-header with-border">
<h3 class="box-title"><a data-toggle="tooltip" data-placement="top" title="{{$movie->title}}">{{substr($movie->title,0,12)}}..</h3>
</div>
<div class="box-body no-padding" style="height: 360px">
{{ Html::image("$movie->cover","$movie->title", array('width' => '250px','height'=>'358px')) }}
</div>
<div class="box-footer text-center">
<div class="row">
<div class="col-md-12">
<div class=" pull-left col-md-4"><a href="{{ url('admin/update',['id'=>"$movie->id"]) }}"><i class="fa fa-edit" style="color:black;"></i></a></div>
</div>
</div>
</div>
</div>
</div>
@endforeach
</div>
</div>
<center> {{$movies->render()}}</center>
</div>
@stop
