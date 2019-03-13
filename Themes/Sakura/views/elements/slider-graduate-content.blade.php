{{-- {{dump($slider->slides)}} --}}
@foreach($slider->slides as $index=>$slide)
  {{-- {{dump($slide)}} --}}
  <div class="item">
    <div class="info-title">
      <p>{!! $slide->title !!}</p>
    </div>
    <div class="info-desc">
      <p>{!! $slide->custom_html !!}</p>
    </div>
    <img src="{{Theme::url('../../assets/media/quote.png')}}" alt="">
  </div>
@endforeach
