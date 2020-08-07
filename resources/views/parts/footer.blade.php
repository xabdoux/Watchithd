<footer class="footer" @if (!isset($films)) style="margin-top: 75px;" @endif>
<div class="container">
<div class="row">
<div class="col-md-3 footer-col">
<h1><a href="#"><img id="footer-logo" src="{{ url('images/logo.png') }}" alt="WatchitHD"></a></h1>
</div>
<div class="col-md-6 footer-col" style="padding-top:40px">
<ul class="list-footer">
<li><a href="{{ url('help') }}" @if (isset($help)) class="footer-active-page"@endif>{{trans('words.help')}}</a></li>
<li><a href="{{ url('about') }}" @if (isset($about)) class="footer-active-page"@endif>{{trans('words.about_us')}}</a></li>
<li><a href="{{ url('collaborate') }}" @if (isset($collaborate)) class="footer-active-page"@endif>{{trans('words.collaborate')}}</a></li>
<li><a href="{{ url('donation') }}" @if (isset($donation)) class="footer-active-page"@endif>{{trans('words.donation')}}</a></li>
<li><a href="{{ url('contact') }}" @if (isset($contact)) class="footer-active-page"@endif>{{trans('words.contact')}}</a></li>
</ul>
</div>
<div class="col-md-3 footer-col">
<p class="copyright">&copy; <span style="font-weight:500">WatchitHD</span> <?php echo date('Y'); ?> | <a href="{{ url('privacy-policy') }}">Privacy Policy</a></p>
<ul class="social-icons">
<li><a href="{{ url('https://www.facebook.com/watchithd') }}"><i class="fa fa-facebook"></i></a></li>
<!-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-rss"></i></a></li> -->
<li><a href="{{ url('https://www.youtube.com/channel/UC_XRW1nHooDWeV9CrhK6Vvg') }}"><i class="fa fa-youtube"></i></a></li>
</ul>
</div>
<div class="col-xs-12">
<p>
{{trans('words.footer_text')}}
</p>
</div>
</div>
</div>
</footer>