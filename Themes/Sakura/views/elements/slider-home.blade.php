@foreach($slider->slides as $index=>$slide)
<div class="pagewrap-slide-item" style="background-image: url('{{$slide->getImageUrl()}}'); background-size: cover; background-position: top;">

  {!! $slide->custom_html !!}

  {{-- <div class="intro-text">
    <div class="container">
      <div class="content">
        <div class="bs-text">{!! trans('home.intro.text1') !!}</div>
        <div class="ms-text">{{ trans('home.intro.text2') }}</div>
        <div class="button-text">
          <a href="https://www.youtube.com/watch?v=zCG5OwqimU8" class="popup-youtube otu-head-button"><i class="fa fa-caret-right" aria-hidden="true"></i> {{ trans('btn.introduction') }}</a>
          <a href="{{asset(\App::getLocale().'/training/programs')}}" class="otu-head-button"><i class="fa fa-angle-double-right" aria-hidden="true"></i> {{trans('btn.occupation')}}</a>
        </div>

      </div>
    </div>
  </div> --}}

</div>
@endforeach
