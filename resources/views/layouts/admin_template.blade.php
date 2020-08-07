<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
<meta http-equiv=X-UA-Compatible content="IE=edge">
<title>AdminWHD | Add new movie</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name=viewport>
{{ Html::style('assets/admin/bootstrap/css/bootstrap.min.css') }}
{{ Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') }}
{{ Html::style('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}
{{ Html::style('assets/admin/plugins/iCheck/all.css') }}
{{ Html::style('assets/admin/plugins/iCheck/line/blue.css" rel="stylesheet') }}
{{ Html::style('assets/admin/plugins/datepicker/datepicker3.css') }}
{{ Html::style('assets/admin/plugins/select2/select2.min.css') }}
{{ Html::style('assets/admin/dist/css/AdminLTE.min.css') }}
{{ Html::style('assets/admin/dist/css/skins/_all-skins.min.css') }}
{{ Html::style('assets/admin/plugins/daterangepicker/daterangepicker-bs3.css') }}
{{ Html::style('assets/admin/plugins/colorpicker/bootstrap-colorpicker.min.css') }}
{{ Html::style('assets/admin/plugins/timepicker/bootstrap-timepicker.min.css') }}
{{ Html::style('assets/admin/bootstrap/css/style.css') }}
{{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js') }}
<!--[if lt IE 9]>
<script src=https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js></script>
<script src=https://oss.maxcdn.com/respond/1.4.2/respond.min.js></script>
<![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class=wrapper>
<header class=main-header>
<a href=index2.html class=logo>
<span class=logo-mini><b>A</b>W</span>
<span class=logo-lg><b>Admin</b>WHD</span>
</a>
<nav class="navbar navbar-static-top" role=navigation>
<a href=# class=sidebar-toggle data-toggle=offcanvas role=button>
<span class=sr-only>Toggle navigation</span>
</a>
<div class=navbar-custom-menu>
<ul class="nav navbar-nav">
<li class="dropdown messages-menu">
<a href=# class=dropdown-toggle data-toggle=dropdown>
<i class="fa fa-envelope-o"></i>
<span class="label label-success">4</span>
</a>
<ul class=dropdown-menu>
<li class=header>You have 4 messages</li>
<li>
<ul class=menu>
<li>
<a href=#>
<div class=pull-left>
<img src=/assets/admin/dist/img/user2-160x160.jpg class=img-circle alt="User Image">
</div>
<h4>
Support Team
<small><i class="fa fa-clock-o"></i> 5 mins</small>
</h4>
<p>Why not buy a new awesome theme?</p>
</a>
</li>
</ul>
</li>
<li class=footer><a href=#>See All Messages</a></li>
</ul>
</li>
<li class="dropdown notifications-menu">
<a href=# class=dropdown-toggle data-toggle=dropdown>
<i class="fa fa-bell-o"></i>
<span class="label label-warning">10</span>
</a>
<ul class=dropdown-menu>
<li class=header>You have 10 notifications</li>
<li>
<ul class=menu>
<li>
<a href=#>
<i class="fa fa-users text-aqua"></i> 5 new members joined today
</a>
</li>
</ul>
</li>
<li class=footer><a href=#>View all</a></li>
</ul>
</li>
<li class="dropdown tasks-menu">
<a href=# class=dropdown-toggle data-toggle=dropdown>
<i class="fa fa-flag-o"></i>
<span class="label label-danger">9</span>
</a>
<ul class=dropdown-menu>
<li class=header>You have 9 tasks</li>
<li>
<ul class=menu>
<li>
<a href=#>
<h3>
Design some buttons
<small class=pull-right>20%</small>
</h3>
<div class="progress xs">
<div class="progress-bar progress-bar-aqua" style=width:20% role=progressbar aria-valuenow=20 aria-valuemin=0 aria-valuemax=100>
<span class=sr-only>20% Complete</span>
</div>
</div>
</a>
</li>
</ul>
</li>
<li class=footer>
<a href=#>View all tasks</a>
</li>
</ul>
</li>
<li class="dropdown user user-menu">
<a href=# class=dropdown-toggle data-toggle=dropdown>
<img src="{{ url('assets/admin/dist/img/user2-160x160.jpg') }}" class=user-image alt="User Image">
<span class=hidden-xs>Ayoub Jemmal</span>
</a>
<ul class=dropdown-menu>
<li class=user-header>
<img src=/assets/admin/dist/img/user2-160x160.jpg class=img-circle alt="User Image">
<p>
Ayoub Jemmal - Web Developer
<small>Member since Nov. 2012</small>
</p>
</li>
<li class=user-body>
<div class=row>
<div class="col-xs-4 text-center">
<a href=#>Followers</a>
</div>
<div class="col-xs-4 text-center">
<a href=#>Sales</a>
</div>
<div class="col-xs-4 text-center">
<a href=#>Friends</a>
</div>
</div>
</li>
<li class=user-footer>
<div class=pull-left>
<a href=# class="btn btn-default btn-flat">Profile</a>
</div>
<div class=pull-right>
<a href=# class="btn btn-default btn-flat">Sign out</a>
</div>
</li>
</ul>
</li>
<li>
<a href=# data-toggle=control-sidebar><i class="fa fa-gears"></i></a>
</li>
</ul>
</div>
</nav>
</header>
<aside class=main-sidebar>
<section class=sidebar>
<div class=user-panel>
<div class="pull-left image">
<img src="{{ url('assets/admin/dist/img/user2-160x160.jpg') }}" class=img-circle alt="User Image">
</div>
<div class="pull-left info">
<p>Ayoub Jemmal</p>
<a href=#><i class="fa fa-circle text-success"></i> Online</a>
</div>
</div>
<form action=# method=get class=sidebar-form>
<div class=input-group>
<input type=text name=q class=form-control placeholder=Search...>
<span class=input-group-btn>
<button type=submit name=search id=search-btn class="btn btn-flat"><i class="fa fa-search"></i>
</button>
</span>
</div>
</form>
<ul class=sidebar-menu>
<li class=header>MAIN NAVIGATION</li>
<li><a href="{{ url('admin/all-movies') }}"><i class="fa fa-link"></i> <span> All movies</span></a></li>
<li class=active><a href="{{ url('admin/add-movie') }}"><sup><small><i class="fa fa-plus" style=margin-left:-10px></i></small></sup> <i class="fa fa-film"></i> <span> Add movie</span></a></li>
<li class=treeview>
<a href=#>
<i class="fa fa-files-o"></i>
<span> Missing links</span>
<span class="label pull-right bg-red">+{{app('test')['mf']}}</span>
</a>
<ul class=treeview-menu>
<li><a href="{{ url('/admin/arabic-missing-links') }}"><i class="fa fa-circle-o"></i> Arabic links <span class="label label-primary pull-right">{{app('test')['m']}}</span></a></li>
<li><a href="{{ url('/admin/english-missing-links') }}"><i class="fa fa-circle-o"></i> English links <small class="label pull-right bg-green">{{app('test')['m1']}}</small></a></li>
<li><a href="{{ url('/admin/french-missing-links') }}"><i class="fa fa-circle-o"></i> French links <small class="label pull-right bg-yellow">{{app('test')['m2']}}</small></a></li>
<li><a href="{{ url('/admin/spanish-missing-links') }}"><i class="fa fa-circle-o"></i> Spanish links <small class="label pull-right bg-aqua">{{app('test')['m3']}}</small></a></li>
</ul>
</li>
<li class=treeview>
<a href=#><i class="fa fa-link"></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
<ul class=treeview-menu>
<li><a href=#>Link in level 2</a></li>
<li><a href=#>Link in level 2</a></li>
</ul>
</li>
</ul>
</section>
</aside>
<div class=content-wrapper>
<section class=content-header>
@yield('header')
</section>
<section class=content>
@yield('content')
</section>
</div>
<footer class=main-footer>
<div class="pull-right hidden-xs">
</div>
<strong>Copyright &copy; 2015 <a href=Watchithd.com target=_blank>WatchitHD.com</a>.</strong> All rights reserved.
</footer>
<aside class="control-sidebar control-sidebar-dark">
<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
<li class=active><a href=#control-sidebar-home-tab data-toggle=tab><i class="fa fa-home"></i></a></li>
<li><a href=#control-sidebar-settings-tab data-toggle=tab><i class="fa fa-gears"></i></a></li>
</ul>
<div class=tab-content>
<div class="tab-pane active" id=control-sidebar-home-tab>
<h3 class=control-sidebar-heading>Recent Activity</h3>
<ul class=control-sidebar-menu>
<li>
<a href=javascript::>
<i class="menu-icon fa fa-birthday-cake bg-red"></i>
<div class=menu-info>
<h4 class=control-sidebar-subheading>Langdon's Birthday</h4>
<p>Will be 23 on April 24th</p>
</div>
</a>
</li>
</ul>
<h3 class=control-sidebar-heading>Tasks Progress</h3>
<ul class=control-sidebar-menu>
<li>
<a href=javascript::>
<h4 class=control-sidebar-subheading>
Custom Template Design
<span class="label label-danger pull-right">70%</span>
</h4>
<div class="progress progress-xxs">
<div class="progress-bar progress-bar-danger" style=width:70%></div>
</div>
</a>
</li>
</ul>
</div>
<div class=tab-pane id=control-sidebar-stats-tab>Stats Tab Content</div>
<div class=tab-pane id=control-sidebar-settings-tab>
<form method=post>
<h3 class=control-sidebar-heading>General Settings</h3>
<div class=form-group>
<label class=control-sidebar-subheading>
Report panel usage
<input type=checkbox class=pull-right checked>
</label>
<p>
Some information about this general settings option
</p>
</div>
</form>
</div>
</div>
</aside>
<div class=control-sidebar-bg></div>
</div>
{{ Html::script('assets/admin/plugins/jQuery/jQuery-2.1.4.min.js') }}
{{ Html::script('assets/js/bootstrap.min.js') }}
{{ Html::script('assets/admin/plugins/select2/select2.full.min.js') }}
{{ Html::script('assets/admin/plugins/iCheck/icheck.min.js') }}
{{ Html::script('assets/admin/plugins/fastclick/fastclick.min.js') }}
{{ Html::script('assets/admin/plugins/datepicker/bootstrap-datepicker.js') }}
{{ Html::script('assets/admin/plugins/datepicker/locales/bootstrap-datepicker.ar.js') }}
{{ Html::script('assets/admin/dist/js/app.min.js') }}
{{ Html::script('assets/admin/plugins/input-mask/jquery.inputmask.js') }}
{{ Html::script('assets/admin/plugins/input-mask/jquery.inputmask.date.extensions.js') }}
{{ Html::script('assets/admin/plugins/input-mask/jquery.inputmask.extensions.js') }}
{{ Html::script('assets/admin/plugins/daterangepicker/daterangepicker.js') }}
{{ Html::script('assets/admin/plugins/colorpicker/bootstrap-colorpicker.min.js') }}
<script>$(function(){$(".select2").select2();$("#datemask").inputmask("dd/mm/yyyy",{placeholder:"dd/mm/yyyy"});$("#datemask2").inputmask("mm/dd/yyyy",{placeholder:"mm/dd/yyyy"});$("[data-mask]").inputmask();$("#reservation").daterangepicker();$("#reservationtime").daterangepicker({timePicker:true,timePickerIncrement:30,format:"MM/DD/YYYY h:mm A"});$("#daterange-btn").daterangepicker({ranges:{Today:[moment(),moment()],Yesterday:[moment().subtract(1,"days"),moment().subtract(1,"days")],"Last 7 Days":[moment().subtract(6,"days"),moment()],"Last 30 Days":[moment().subtract(29,"days"),moment()],"This Month":[moment().startOf("month"),moment().endOf("month")],"Last Month":[moment().subtract(1,"month").startOf("month"),moment().subtract(1,"month").endOf("month")]},startDate:moment().subtract(29,"days"),endDate:moment()},function(b,a){$("#reportrange span").html(b.format("MMMM D, YYYY")+" - "+a.format("MMMM D, YYYY"))});$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({checkboxClass:"icheckbox_minimal-blue",radioClass:"iradio_minimal-blue"});$('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({checkboxClass:"icheckbox_minimal-red",radioClass:"iradio_minimal-red"});$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({checkboxClass:"icheckbox_flat-green",radioClass:"iradio_flat-green"});$(".my-colorpicker1").colorpicker();$(".my-colorpicker2").colorpicker();$(".timepicker").timepicker({showInputs:false});$(".datepicker").datepicker({isRTL:false,autoclose:true,dateFormat:"MM-dd-yyyy"})});</script>
<script>$(document).ready(function(){$("input").each(function(){var a=$(this),b=a.next(),c=b.text();b.remove();a.iCheck({checkboxClass:"icheckbox_line-blue",radioClass:"iradio_line-blue",insert:'<div class="icheck_line-icon"></div>'+c})})});</script><script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>