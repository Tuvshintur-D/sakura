@foreach($slider->slides as $index=>$slide)

  <header class="head page home-header" style="background-image: url('{{$slide->getImageUrl()}}'); background-size: cover; background-position: top;">
    <div class="container">
      <div class="pagedetail">

        <div class="maintitle">
          {!! $slide->title !!}
        </div>
        <div class="subtitle">
          {!! $slide->custom_html !!}
        </div>
        <div class="header-links">
          <a class="fill-bg" href="">Дэлгэрэнгүй <i class="fa fa-chevron-right"></i> </a>
          <a class="trans-bg" href=""><i class="fa fa-play-circle"></i> Танилцуулга</a>
        </div>
      </div>

    </div>
  </header>
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

@endforeach
