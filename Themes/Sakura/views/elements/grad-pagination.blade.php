
@foreach($slider->slides as $index=>$slide)

  <div class="small-img" id="grad-{!! $index !!}"><img src="{{$slide->getImageUrl()}}" alt="image"  draggable="false"/></div>
@endforeach
