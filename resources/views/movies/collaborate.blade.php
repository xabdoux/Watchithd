@extends('layouts.movies_template')
@section('title')
Collaborate | WatchitHD.com
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
<h3 style="color:#FFF;cursor:default">Collaborate</h3>
</div>
@stop
@section('content')
<div class="row" style="padding:15px">
<div class="col-md-12">
<div class="row">
<div class="col-md-2 icon-md-2">
<i class="fa fa-group"></i>
</div>
<div class="col-md-10">
<p>Aquí encontrarás todas las formas en las que puedes ayudarnos, sin tu ayuda no será posible seguir con este gran proyecto de <a href="index.php" target="_blank">WatchitHD.com</a>.<br><br>
Por eso te pidimos de la manera mas atenta que, si sabes o tienes tiempo para realizar algo de lo que abajo esta mencionado, lo consideres. Todos los usuarios que colaboren tendrán un estatus superior al usuario normal.
</p>
</div><br>
<div class="col-md-12" style="font-size:17px">
<br>
<h3>Puedes ayudar:</h3>
<p><i class="fa fa-hand-o-right"></i> Reportar problemas o errores, algún problema con los videos, el audio esta mal, no corresponde el contenido, repórtalo y lo revisaremos.</p>
<br>
<p><i class="fa fa-hand-o-right"></i> Envianos películas, capítulos de series y animes o temporadas enteras, también puedes enviarnos las últimas noticias de las películas, series y animes.</p>
<br>
<p><i class="fa fa-hand-o-right"></i> Hablándole a tus amigos o familiares de nuestra página web para que la visiten.</p>
<br>
<p><i class="fa fa-hand-o-right"></i> Recomendando la página o videos mediante los botones sociales, localizados bajo los videos: <a href="" target="_blank">Facebook</a>, <a href="" target="_blank">Twitter</a> y decenas de otras redes sociales ocultas en el botón “share”.</p>
<br>
<p><i class="fa fa-hand-o-right"></i> Convirtiéndote en nuestro seguidor o fan de <a href="" title="WatchitHD en Facebook" target="_blank">Facebook</a>, <a href="" title="WatchitHD en Twitter" target="_blank">Twitter</a>, <a href="" title="WatchitHD en E-mail" target="_blank">E-mail</a> y <a href="" title="WatchitHD en Google+" target="_blank">Google+</a>.</p>
<br>
<p><i class="fa fa-hand-o-right"></i> Haciendo una donación económica mediante <a href="" title="Información sobre donaciones">paypal.com</a>. Con donaciones de US$10 o más.Tendrás un estatus superior al usuario normal, entre otros beneficios.</p>
<br>
<p><i class="fa fa-hand-o-right"></i> Visitando mi página regularmente, con el simple hecho de visitarla estás ayudando, agregarémos nuevos videos cada semana. Mediante Twitter y Facebook mencionaremos las actualizaciones.</p>
<br>
</div>
</div>
</div>
</div>
@stop
@section('script')
{{ Html::script('assets/js/main.js') }}
{{ Html::script('assets/js/modernizr.js') }}
@stop