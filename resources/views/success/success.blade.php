@if(Session::has('success'))

<div class="alert alert-success">
<i class="glyphicon glyphicon-ok-sign"></i>
{!! Session::get('success') !!}
</div>

@endif