@extends('layouts.movies_template')
@section('title')
Help | WatchitHD.com
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
<h3 style="color:#FFF;cursor:default">Help</h3>
</div>
@stop
@section('content')
<div class="row" style="padding:15px">
<div class="col-md-12">
<div class="row">
<div class="col-md-2 icon-md-2">
<i class="fa fa-question"></i>
</div>
<div class="col-md-10">
<p>En esta sección encontrarás información y respuestas sobre la página y videos,
además todo lo relacionado a problemas con la visualización de los videos.<br><br>
Esta página esta hecha pensando en las posibles dudas y preguntas que tendrían los
usuarios. Si aún con esto no resuelves tu duda, puedes contactarnos mediante
la página de <a href="contact.php">contacto</a>.
</p>
</div><br>
<div class="col-md-12" style="font-size:17px">
<h3>¿Por qué hicieron HDWatch.com?</h3>
<p><i class="fa fa-hand-o-right"></i> HDWatch nace con el claro objetivo de ser un lugar de reunión entre infinidad de usuarios atraídos por su afición al cine, las series, animes, programas de televisión y la cultura en general.</p>
<br>
<h3>No funciona la página o se ve mal</h3>
<p><i class="fa fa-hand-o-right"></i> Primero, asegúrate de tener un explorador de Internet moderno, nuestra página no es compatible con las versiones de Internet Explorer menores a la 8, incluso con esta última tiene ligeros problemas, te recomendamos que uses el explorador de Google, llamado Chrome, activa JavaScript si es que lo tienes desactivado.</p>
<br>
<h3>¿Cómo actualizo mi explorador de Internet?</h3>
<p><i class="fa fa-hand-o-right"></i> Simplemente entrando al link del explorador que te guste en la parte de abajo, descárgalo e instálalo, toma en cuenta que Internet Explorer 9 o superior no es compatible con Windows XP, si tienes ese Windows, usa otro explorador, te recomendamos <a href="https://www.google.com/chrome" title="Google Chrome" target="_blank">Google Chrome</a>. Las otras alternativas son <a href="http://www.mozilla.org/es-MX/firefox/new/" title="Mozilla Firefox" target="_blank">Firefox</a>, <a href="http://www.apple.com/mx/safari/" title="Apple Safari" target="_blank">Safari</a>, <a href="http://www.opera.com/" title="Opera" target="_blank">Opera</a> e <a href="http://windows.microsoft.com/es-XL/internet-explorer/products/ie/home" title="Microsoft Internet Explorer" target="_blank">Internet Explorer</a>.</p>
<br>
<h3>¿Cómo veo los videos?</h3>
<p><i class="fa fa-hand-o-right"></i> Para ver los videos necesitas un reproductor multimedia de video y audio que los soporte respectivamente, el recomendable es el <a href="http://www.videolan.org/vlc/" target="_blank">VLC Player</a>, muy completo y ligero.</p>
<br>
<h3>¿Cómo hago una donación?</h3>
<p> Es importante aclarar un punto, cualquier usuario puede ver los videos sin problemas, haga o no una donación.No es una cuota mensual, ni siquiera anual, es una aportación única, dados los siguientes motivos:<br><br>
<i class="fa fa-hand-o-right"></i> Gasto mensualmente por el hospedaje web (hosting) de nuestra página de Internet.<br><br>
<i class="fa fa-hand-o-right"></i> Necesitamos una “motivación” para poder seguir con nuestra página web.<br><br>
<i class="fa fa-hand-o-right"></i> Ladad que existe en ella va poco a poco generando algo de dinero, pero es insuficiente para solventar los gastos actuales.<br><br>
<i class="fa fa-hand-o-right"></i> El monto mínimo que aceptamos en las donaciones es de 6 dólares ¿quién no puede dar esa cantidad?, además recuerda que todos los videos que busca esta página son gratuitos, y lo seguiran siendo.<br><br>
<i class="fa fa-hand-o-right"></i> Estamos usando la página <a href="http://www.paypal.com" title="Sitio Oficial" target="_blank">www.paypal.com </a>para recibir las donaciones, es una página que usamos desde hace varios años, jamás hemos tenido problemas en compras o ventas, es 100% segura.Una vez en la página, podrás usar tu tarjeta de débito o crédito para pagar o usar una cuenta de Paypal en caso de que ya cuentes con una.<br><br>
</p>
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