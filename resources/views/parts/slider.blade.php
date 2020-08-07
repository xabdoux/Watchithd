<div class="container-fluid" style="border-bottom: 6px solid #bf2f2f;">
<div class="row">
<div class="col-md-12">
<div id="block-slider" class="hidden-xs">
<div class="block-slider js-block-slider__wrap">
<div class="block-slider__items js-block-slider__items">
@foreach($filmslider as $filmslid)
<div class="block-slider__item ">
<div class="block-slider__image "><a href="{{url('movies',['lang'=>$lang,'id'=>$filmslid->id,'name'=>str_replace(' ', '-',$filmslid->title)])}}" target="blank" alt="{{$filmslid->title}}">{{ Html::image("$filmslid->cover","$filmslid->title", array('width' => '190px','height'=>'325px')) }}</a></div>


</div>
@endforeach    
</div>
</div>
</div>
</div>
</div>
</div>