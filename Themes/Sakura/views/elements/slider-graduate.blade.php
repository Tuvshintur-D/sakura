@foreach($slider->slides as $index=>$slide)
  {{-- {{dump($slide)}} --}}
  <div class="item">
    <img src="{{$slide->getImageUrl()}}" alt="image"  draggable="false"/>
    <p>{!! $slide->name !!}</p>
  </div>
@endforeach
