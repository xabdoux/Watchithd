@extends('layouts.movies_template')
@section('title')
About Us | WatchitHD.com
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
<h3 style="color:#FFF;cursor:default">About us</h3>
</div>
@stop
@section('content')
<div class="row" style="padding:15px">
<div class="col-md-12" style="font-size:17px">
<br><br>
<p><i class="fa fa-hand-o-right"></i> Todo el materialdo en <a href="">WatchitHD.com</a>, ha sido recolectado exclusivamente de sitios públicos de Internet, por lo que este material es considerado de libre distribución y no es responsabilidad nuestra su uso indebido. En ningún artículo legal se menciona la prohibición de material libre por lo que esta página no infringe en ningún caso la ley.</p><br><br>
<p><i class="fa fa-hand-o-right"></i> Nosotros no reproducimos, plagiamos distribuimos o almacenamos ningún tipo de archivo de video. El contenido de esta web es solo información que ha sido recolectado de paginas de libre acceso en la red. Por lo tanto nosotros solo nos limitamos a facilitar esa información través de textos, imágenes y enlaces. Por consiguiente si usted tiene algún reclamo de esa información comuníquese con los responsables directos.</p><br><br>
<p><i class="fa fa-hand-o-right"></i> Si el contenido de este sitio esta prohibido en tu país, solo tú eres el responsable de permanecer aquí. Si decides permanecer das por comprendido y aceptas las condiciones de esta página.</p><br><br>
<p><i class="fa fa-hand-o-right"></i> Si después de haber leído estas lineas tienes alguna duda o problema al respecto, no dude en ponerse en contacto con nosotros, a través del siguiente formulario: <a href="contact.php">contacto</a>.</p><br><br>
<h3><a href="{{ url('movies') }}"><i class="fa fa-thumbs-up"></i> WatchitHD.com</a></h3>
</div>
</div>
@stop
@section('script')
{{ Html::script('assets/js/main.js') }}
{{ Html::script('assets/js/modernizr.js') }}
@stop