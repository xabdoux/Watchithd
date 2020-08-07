@extends('layouts.admin_template')
@section('header')
<h1>
<span class="fa fa-tv"></span> All movies  
<small></small>
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">All movies</li>
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
<div class="box box-danger">
<div class="box-header with-border">
<h3 class="box-title"><a data-toggle="tooltip" data-placement="top" title="{{$movie->title}}">{{substr($movie->title,0,12)}}..</a></h3>
<div class="box-tools pull-right">
<span @if ($movie->en_name1=="") class="badge bg-red"  @else class="badge bg-green" @endif ><small>En</small></span>
<span @if ($movie->fr_name1=="") class="badge bg-red" @else class="badge bg-green" @endif><small>Fr</small></span>
<span @if ($movie->ar_name1=="") class="badge bg-red" @else class="badge bg-green" @endif><small>Ar</small></span>
<span @if ($movie->es_name1=="") class="badge bg-red" @else class="badge bg-green" @endif><small>Es</small></span>
</div>
</div>
<div class="box-body no-padding" style="height: 360px">
{{ Html::image("$movie->cover","$movie->title", array('width' => '250px','height'=>'358px')) }}
</div>
<div class="box-footer text-center">
<div class="row">
<div class="col-md-12">
<div class=" pull-left col-md-4"><a href="{{ url('admin/update',['id'=>"$movie->id"]) }}"><i class="fa fa-edit" style="color:black;"></i></a></div>
<div class="pull-left dropdown-toggle  col-md-4"  data-toggle="dropdown"><i class="fa fa-play"></i></div>
<ul class="dropdown-menu">
@if (empty($movie->en_name1) && empty($movie->fr_name1) && empty($movie->ar_name1) && empty($movie->es_name1) )
<li class="text-center" style="color:red;"> <i class="fa fa-warning"></i> No Server Is Disponible </li>
@endif
@if (!empty($movie->en_name1)) <li><a href="{{url('movies/en',['id'=>$movie->id,'name'=>str_replace(' ', '-',$movie->title)])}}" onclick="window.open(this.href); return false;">English Servers</a></li> @endif
@if ($movie->fr_name1!="") <li><a href="{{url('movies/fr',['id'=>$movie->id,'name'=>str_replace(' ', '-',$movie->title)])}}" onclick="window.open(this.href); return false;">Frensh Servers</a></li> @endif
@if ($movie->ar_name1!="") <li><a href="{{url('movies/ar',['id'=>$movie->id,'name'=>str_replace(' ', '-',$movie->title)])}}" onclick="window.open(this.href); return false;">Arabic Servers</a></li> @endif
@if ($movie->es_name1!="") <li><a href="{{url('movies/es',['id'=>$movie->id,'name'=>str_replace(' ', '-',$movie->title)])}}" onclick="window.open(this.href); return false;">Spanish Servers</a></li> @endif
</ul>
<div class=" pull-left col-md-4"><a href="{{ url('admin/delete-movie',['id'=>"$movie->id"]) }}" onclick="return confirm('Are you sur ?');"><i class="fa fa-trash" style="color:black;"></i></a></div>
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
