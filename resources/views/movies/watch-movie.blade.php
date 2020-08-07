@extends('layouts.movies_template')
@section('title')
{{ $movie->title }} Movie | WatchitHD.com
@stop
@section('desc_keyword')
<meta name="description" content="{{$movie->storyline}}">
<meta name="keywords" content="{{$movie->tags}}">
<meta property="og:url"           content="{{url('movies',['lang'=>$lang,'id'=>$movie->idd,'name'=>str_replace(' ', '-',$movie->title)])}}" />
<meta property="og:type"          content="video.movie" />
<meta property="og:site_name"     content="watchithd" />
<meta property="og:title"         content="{{$movie->title}}" />
<meta property="og:description"   content="{{$movie->storyline}}" />
<meta property="og:image"         content="@if (!empty($movie->tags))
     {{ url("$movie->tags") }}@else {{ url("$movie->cover") }}@endif" /><!-- costmize a image for facebook -->
@stop
@section('stylesheets')
{{ Html::style('assets/css/grids.min.css') }}
{{ Html::style('assets/css/movies.css') }}
{{ Html::style('assets/css/stylesheet.css') }}
{{ Html::style('assets/css/stylesheet.css') }}
	

<!-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57950c38d639abfe"></script>
 -->@stop
@section('language')
<li><a href="{{url('movies/en',['id'=>$movie->idd,'name'=>str_replace(' ', '-',$movie->title)])}}">{{trans('words.english')}}</a></li>
<li><a href="{{url('movies/es',['id'=>$movie->idd,'name'=>str_replace(' ', '-',$movie->title)])}}">{{trans('words.spanish')}}</a></li>
<li><a href="{{url('movies/fr',['id'=>$movie->idd,'name'=>str_replace(' ', '-',$movie->title)])}}">{{trans('words.french')}}</a></li>
<li><a href="{{url('movies/ar',['id'=>$movie->idd,'name'=>str_replace(' ', '-',$movie->title)])}}">{{trans('words.arabic')}}</a></li>
@stop
@section('content')
<?php 
$name1= $lang."_name1";
$name2= $lang."_name2";
$name3= $lang."_name3";
$name4= $lang."_name4";
$name5= $lang."_name5";
$name6= $lang."_name6";

$link1=$lang."_link1";
$link2=$lang."_link2";
$link3=$lang."_link3";
$link4=$lang."_link4";
$link5=$lang."_link5";
$link6=$lang."_link6";
?>
<!-- <div class="loader"></div> -->
<div class="left-title alphabet">
<h3 style="color:#FFF;cursor:default">{{ $movie->title}}</h3>

</div>
<div class="row" style="padding:15px">
<div class="col-md-4 movie-img">
<p>
<?php echo $movie->star;?>
</p>
{{ Html::image("$movie->cover","$movie->title", array('width' => '220px','height'=>'312px')) }}
<a type="button" class="btn btn-watch-trailer hidden-xs" data-toggle="modal" data-target="#trailerModal" style="color:#ffffff">{{trans('words.watch_trailer')}}</a>
</div>
<div class="col-md-8 block-desc">
<div class="publish-share">
<?php $g=date("F", strtotime($movie->created_at));
$m=strtolower($g);?>
<a href="#" style="display:inline-block"><i class="fa fa-calendar"></i> {{ trans("words.$m") }} {{ date("d ,Y", strtotime($movie->created_at)) }}</a>
<div class="addthis_sharing_toolbox pull-right"></div>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
</div>
<h3>{{trans('words.movie_informations')}}</h3>
<p>
<span>{{trans('words.title')}}:</span>
{{ $movie->title}}
<br>
<span>{{trans('words.genre')}}:</span>
<?php $genre1=strtolower($movie->genre_1);?>
<?php $genre2=strtolower($movie->genre_2);?>
<?php $genre3=strtolower($movie->genre_3);?>
{{ trans("words.$genre1") }}@if (!empty($movie->genre_2)), {{ trans("words.$genre1") }}@endif @if(!empty($movie->genre_3)), {{ $movie->genre_3}}@endif
<br>
@if (!empty($movie->release_date))
<span>{{trans('words.release_date')}}:</span>
{{ date("F d ,Y", strtotime($movie->release_date)) }}
<br>
@endif
@if (!empty($movie->language))
<span>{{trans('words.language')}}:</span>
{{ $movie->language}}
<br>
@endif
@if (!empty($movie->country))
<span>{{trans('words.country')}}:</span>
{{ $movie->country}}
<br>
@endif
@if (!empty($movie->director))
<span>{{trans('words.directed_by')}}:</span>
{{ $movie->director}}
<br>
@endif
@if (!empty($movie->producer))
<span>{{trans('words.produced_by')}}:</span>
{{ $movie->producer}}
<br>
@endif
@if (!empty($movie->runtime))
<span>{{trans('words.running_time')}}:</span>
{{ $movie->runtime}}
@endif
</p>
@if (!empty($movie->storyline))
<h3>{{trans('words.storyline')}}</h3>
<p>
<span style="display:none">{{$movie->title}}</span>
{{ $movie->storyline}}
<span style="display:none">
{{$movie->storyline}}
{{$movie->title}}
</span>
</p>
@endif
@if (!empty($movie->actor_name1))
<h3>{{trans('words.main_actors')}}</h3>
<a href="{{url('movies/tag',['lang'=>$lang,'actor'=>str_replace(' ', '-',$movie->actor_name1)])}}"><span>{{ $movie->actor_name1 }}</span></a>
 @if (!empty($movie->dist_name1)) <i style="margin:10px 10px">{{ trans('words.as') }}</i> {{ $movie->dist_name1 }}@endif 
     

<br>
@if (!empty($movie->actor_name2))
<a href="{{url('movies/tag',['lang'=>$lang,'actor'=>str_replace(' ', '-',$movie->actor_name2)])}}"><span>{{ $movie->actor_name2 }}</span></a>
@if (!empty($movie->dist_name2)) <i style="margin:10px 10px">{{ trans('words.as') }}</i> {{ $movie->dist_name2 }}@endif
<br>
@endif
@if (!empty($movie->actor_name3))
<a href="{{url('movies/tag',['lang'=>$lang,'actor'=>str_replace(' ', '-',$movie->actor_name3)])}}"><span>{{ $movie->actor_name3 }}</span></a>
@if (!empty($movie->dist_name3)) <i style="margin:10px 10px">{{ trans('words.as') }}</i> {{ $movie->dist_name3 }}@endif
<br>
@endif
@if (!empty($movie->actor_name4))
<a href="{{url('movies/tag',['lang'=>$lang,'actor'=>str_replace(' ', '-',$movie->actor_name4)])}}"><span>{{ $movie->actor_name4 }}</span></a>
@if (!empty($movie->dist_name4)) <i style="margin:10px 10px">{{ trans('words.as') }}</i> {{ $movie->dist_name4 }}@endif
<br>
@endif
@if (!empty($movie->actor_name5))
<a href="{{url('movies/tag',['lang'=>$lang,'actor'=>str_replace(' ', '-',$movie->actor_name5)])}}"><span>{{ $movie->actor_name5 }}</span></a>
@if (!empty($movie->dist_name5)) <i style="margin:10px 10px">{{ trans('words.as') }}</i> {{ $movie->dist_name5 }}@endif
<br>
@endif
@endif
<h3 class="visible-xs">{{trans('words.trailer')}}</h3>
<div class="embed-responsive embed-responsive-16by9 visible-xs">
<iframe class="embed-responsive-item" src="{{ $movie->trailer }}" frameborder="0" allowfullscreen></iframe>
</div>
</div>
</div>
<div class="row" style="padding:15px">
<div class="col-md-12 block-watch">
<ul class="nav nav-tabs" role="tablist">
@if(!empty($movie->$name1))
<li role="presentation" class="active"><a href="#server1" aria-controls="server1" role="tab" data-toggle="tab">{{ $movie->$name1 }}</a></li>
@endif
@if(!empty($movie->$name2))
<li role="presentation"><a href="#server2" aria-controls="server2" role="tab" data-toggle="tab">{{ $movie->$name2 }}</a></li>
@endif
@if(!empty($movie->$name3))
<li role="presentation"><a href="#server3" aria-controls="server3" role="tab" data-toggle="tab">{{ $movie->$name3 }}</a></li>
@endif
@if(!empty($movie->$name4))
<li role="presentation"><a href="#server4" aria-controls="server4" role="tab" data-toggle="tab">{{ $movie->$name4 }}</a></li>
@endif
@if(!empty($movie->$name5))
<li role="presentation"><a href="#server5" aria-controls="server5" role="tab" data-toggle="tab">{{ $movie->$name5 }}</a></li>
@endif
@if(!empty($movie->$name6))
<li role="presentation"><a href="#server6" aria-controls="server6" role="tab" data-toggle="tab">{{ $movie->$name6 }}</a></li>
@endif
</ul>
<div class="tab-content">
@if(!empty($movie->$name1))
<div role="tabpanel" class="tab-pane active" id="server1">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="{{ $movie->$link1}}" frameborder="0" allowfullscreen></iframe>
</div>
</div>
@if(!empty($movie->$name2))
<div role="tabpanel" class="tab-pane" id="server2">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="{{ $movie->$link2 }}" frameborder="0" allowfullscreen></iframe>
</div>
</div>
@endif
@if(!empty($movie->$name3))
<div role="tabpanel" class="tab-pane" id="server3">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="{{ $movie->$link3 }}" frameborder="0" allowfullscreen></iframe>
</div>
</div>
@endif
@if(!empty($movie->$name4))
<div role="tabpanel" class="tab-pane" id="server4">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="{{ $movie->$link4 }}" frameborder="0" allowfullscreen></iframe>
</div>
</div>
@endif
@if(!empty($movie->$name5))
<div role="tabpanel" class="tab-pane" id="server5">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="{{ $movie->$link5 }}" frameborder="0" allowfullscreen></iframe>
</div>
</div>
@endif
@if(!empty($movie->$name6))
<div role="tabpanel" class="tab-pane" id="server6">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="{{ $movie->$link6 }}" frameborder="0" allowfullscreen></iframe>
</div>
</div>
@endif
@else
<div class="alert alert-warning">
<i class="fa fa-warning"></i> {{trans('words.movie_lang_warning')}}. <br><br> <i class="fa fa-lightbulb-o"></i> {{trans('words.available_lang')}} : 
</div>
@endif

<div class="fb-like" 
     data-href="{{url('movies',['lang'=>$lang,'id'=>$movie->idd,'name'=>str_replace(' ', '-',$movie->title)])}}"
     data-layout="standard"
     data-action="like"
     data-size="small"
     data-show-faces="true" 
     data-share="true" 
     style="margin-top:10px;">
     	
     </div>
</div><br>
@if (!empty($movie->$name1))
 <div class="alert alert-danger">
<i class="fa fa-warning"></i> One of the servers Present An Error? Report <a href="{{url('contact')}}" target="_blank"><u>Here</u></a>!
</div>
 @endif
 
<!-- <ul class="prev-next">
@if (!empty($prev))
<li class="previous">
<a href="{{url('movies',['lang'=>$lang,'id'=>$prev->id,'name'=>str_replace(' ', '-',$prev->title)])}}">
<b><i class="fa fa-chevron-left"></i> Previous</b><br>
<span>{{$prev->title}}</span>
</a>
</li>
@endif
@if (!empty($next))
<li class="next">
<a href="{{url('movies',['lang'=>$lang,'id'=>$next->idd,'name'=>str_replace(' ', '-',$next->title)])}}">
<b>Next <i class="fa fa-chevron-right"></i></b><br>
<span>{{$next->title}}</span>
</a>
</li>
@endif
</ul><br><br><br> -->
<p class="tags">
<span> {{trans('words.tags')}} :</span>
<a>{{$movie->title}}</a>
@if (!empty($movie->year))<a>{{$movie->year}}</a> @endif
@if (!empty($movie->director))<a>{{$movie->director}}</a> @endif
@if (!empty($movie->producer))<a>{{$movie->producer}}</a> @endif
@if (!empty($movie->quality))<a>{{$movie->quality}}</a> @endif
<a>{{$movie->genre_1}}</a>
@if (!empty($movie->genre_2))<a>{{$movie->genre_2}}</a> @endif
@if (!empty($movie->genre_3))<a>{{$movie->genre_3}}</a> @endif
@if (!empty($movie->actor_name1))<a>{{$movie->actor_name1}}</a> @endif
@if (!empty($movie->actor_name2))<a>{{$movie->actor_name2}}</a> @endif
@if (!empty($movie->actor_name3))<a>{{$movie->actor_name3}}</a> @endif
</p>
<hr>
<h3 style="margin-top:50px;font-weight:600"> {{trans('words.related_movies')}}</h3>
<div class="carousel slide" id="myCarousel">
<div class="carousel-inner">
<div class="item active">
<ul class="thumbnails">
<?php $i=0;?>
@foreach ($related as $relat)
@if ($i<4) 
@if ($relat->idd!=$id)
	 <li class="col-xs-3 col-md-3">
<div class="thumbnail">
<a href="{{url('movies',['lang'=>$lang,'id'=>$relat->idd,'name'=>str_replace(' ', '-',$relat->title)])}}">{{ Html::image("$relat->cover","$relat->title", array('style' => "min-width:147px;min-height:208px;max-height:219px;"))}}</a>

</div>
<div class="caption">
<h4><a href="{{url('movies',['lang'=>$lang,'id'=>$relat->idd,'name'=>str_replace(' ', '-',$relat->title)])}}">{{$relat->title}}</a></h4>
<a><i class="fa fa-calendar"></i>{{ date("F d ,Y", strtotime($relat->release_date)) }}</a>
</div>
</li>
@else
<?php $i=$i-1;?>
@endif

@elseif ($i==4)
</ul>
</div>
<div class="item">
<ul class="thumbnails">
@elseif ($i>=4)
@if ($relat->idd!=$id)
<li class="col-xs-3 col-md-3">
<div class="thumbnail">
<a href="{{url('movies',['lang'=>$lang,'id'=>$relat->idd,'name'=>str_replace(' ', '-',$relat->title)])}}">{{ Html::image("$relat->cover","$relat->title", array('style' => "min-width:147px;min-height:208px;max-height:219px"))}}</a>
</div>
<div class="caption">
<h4><a href="{{url('movies',['lang'=>$lang,'id'=>$relat->idd,'name'=>str_replace(' ', '-',$relat->title)])}}">{{$relat->title}}</a></h4>
<a><i class="fa fa-calendar"></i> {{ date("F d ,Y", strtotime($relat->release_date)) }}</a>
</div>
</li>
@else
<?php $i=$i-1;?>
@endif
@endif
<?php $i++;?>
@endforeach
</ul>
</div>
</div>
<div class="control-box">
<a data-slide="prev" href="#myCarousel" id="control-prev-next" class="carousel-control left">‹</a>
<a data-slide="next" href="#myCarousel" id="control-prev-next" class="carousel-control right">›</a>
</div>
</div><br><br><br>
<div id="disqus_thread"></div>
<script>(function(){var b=document,a=b.createElement("script");a.src="//watchithd.disqus.com/embed.js";a.setAttribute("data-timestamp",+new Date());(b.head||b.body).appendChild(a)})();</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
</div>
</div>
<div class="modal fade" id="trailerModal" tabindex="-1" role="dialog" aria-labelledby="trailerModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<br>
</div>
<div class="modal-body">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="{{ $movie->trailer }}" frameborder="0" allowfullscreen></iframe>
</div>
</div>
</div>
</div>
</div>
@stop
@section('script')
{{ Html::script('assets/js/jquery.min.js') }}
{{ Html::script('assets/js/grids.min.js') }}
{{ Html::script('assets/js/main.js') }}
{{ Html::script('assets/js/modernizr.js') }}
{{ HTML::script('//watchithd.disqus.com/count.js', array('async' => 'async','id'=>'dsq-count-scr')) }}
{{ Html::script('http://code.jquery.com/jquery-latest.js') }}
<!-- <script type="text/javascript">$(window).load(function(){$(".loader").fadeOut("1000")});</script> -->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57950c38d639abfe"></script>

@stop