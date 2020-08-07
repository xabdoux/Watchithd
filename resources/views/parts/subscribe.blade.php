<div class="right-title-1">
<center><h3>{{trans('words.subscribe')}}</h3></center>
</div>
<div class="email-block">
@include('success.success')
<p>{{ trans('words.subscribe_text') }}</p>
{!! Form::open(array('url'=>'movies/subscribe','method'=>'POST', 'role'=>'form')) !!}
{{csrf_field()}}
<div class="form-group @if($errors->has('email')) has-error @endif">
<label class="sr-only" for="email">Email address:</label>
<input type="email" class="form-control input-lg" name="email" value="{{ old('email') }}"  placeholder="{{ trans('words.enter_your_email') }}">
<p class="help-block">{{$errors->first('email')}}</p>
</div>
<input type="hidden" name="lang" value="{!!$lang!!}">
<button class="btn btn-sucscribe" type="submit" style="color:white;">{{trans('words.subscribe')}}!</button>
</form>
</div>