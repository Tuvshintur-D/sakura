@extends('layouts.master')
@php
  //dump($page);
@endphp

@section('content')
<header class="about-us head page page-header" @if(isset($page->image->path)) style="background-image: url('{{ $page->image->path }}')" @endif>
  <div class="container">

    @include('elements/header')

    <div class="pagedetail">
      <div class="maintitle">
        {{$page->title}}
      </div>
      <div class="subtitle">

      </div>
      <div class="header-links">
        {{-- <a class="fill-bg" href="">Дэлгэрэнгүй <i class="fa fa-chevron-right"></i> </a>
        <a class="trans-bg" href=""><i class="fa fa-play-circle"></i> Танилцуулга</a> --}}
      </div>
    </div>

  </div>
</header>

<section class="aboutus-introduction-sec about ">
  {{-- <div class="img-wrapper cirle" style="background-image:url({{Theme::url('../../assets/media/image1.jpg')}})">
    {{-- <img src=""> --}}
  {{-- </div> --}}
  <div class="wrapper-circle">
  </div>
  <div class="wrapper-circle gr">
  </div>
  <div class="container">

      <div class="row des2">
        <div class="col-sm-3">
          <ul class="nav nav-pills flex-column">
            <li><a class="active" data-toggle="pill" href="#home">Танилцуулга</a></li>
            <li><a data-toggle="pill" href="#anthem">Сүлд дуу</a></li>
            <li><a data-toggle="pill" href="#founder">Үүсгэн байгуулагч</a></li>
            <li><a data-toggle="pill" href="#struct">Бүтэц</a></li>
            <li><a data-toggle="pill" href="#awards">Шагнал</a></li>
          </ul>



        </div>
        <div class="col-sm-9">
          <blockquote>Дэлхийд алдар нэрээ цуурайтуулсан, өв тэгш боловсролтой шинэ зууны иргэдийг бэлтгэх</blockquote>

          <div class="tab-content ">
            <div id="home" class="tab-pane in active">
              <p>{!! Block::get('aboutus-introduction') !!}</p>
            </div>
            <div id="history" class="tab-pane fade">
              <p>{!! Block::get('aboutus-introduction') !!}</p>
            </div>
            <div id="anthem" class="tab-pane fade">
              <p>{!! Block::get('aboutus-anthem') !!}</p>
            </div>

            <div id="founder" class="tab-pane fade">
              <p>{!! Block::get('aboutus-introduction') !!}</p>

            </div>
            <div id="struct" class="tab-pane fade">
              <p>{!! Block::get('aboutus-introduction') !!}</p>
            </div>
            <div id="awards" class="tab-pane fade">
              <p>{!! Block::get('aboutus-introduction') !!}</p>
            </div>
          </div>

        </div>
        <div class="col-sm-3">


        </div>
      </div>

      {{-- <div class="row">
        <div class="col-sm-3">
          <ul class="nav nav-pills flex-column">
            <li ><a class="active" data-toggle="pill" href="#home">Бидний тухай</a></li>
            <li><a data-toggle="pill" href="#intro">Танилцуулга</a></li>
            <li><a data-toggle="pill" href="#history">Эрхэм зорилго</a></li>
            <li><a data-toggle="pill" href="#anthem">Сүлд дуу</a></li>
          </ul>


        </div>
        <div class="col-sm-6">

          <div class="tab-content ">
            <div id="home" class="tab-pane in active">
              <p>{!! Block::get('aboutus-introduction') !!}</p>
            </div>
            <div id="intro" class="tab-pane fade">
              <p>{!! Block::get('aboutus-introduction') !!}</p>
            </div>
            <div id="history" class="tab-pane fade">
              <p>{!! Block::get('aboutus-introduction') !!}</p>
            </div>
            <div id="anthem" class="tab-pane fade">
              <p>{!! Block::get('aboutus-introduction') !!}</p>
            </div>
          </div>

        </div>
        <div class="col-sm-3">
          <p class="main-purpose">Дэлхийд алдар нэрээ цуурайтуулсан, өв тэгш боловсролтой шинэ зууны иргэдийг бэлтгэх эрхэм зорилгын төлөө өөрийн мэдлэг оюун, сэтгэл зүрхээ зориулан ажиллаж байна.</p>
        </div>
      </div> --}}

  </div>
</section>
<section class ="sakura-history section about">
  <div class="container">
    <div class="graduate-title sec-title">
          <h5>Сакура сургуулийн</h5>
          <h3>Түүхэн товчоо</h3>
      </div>
    <div class="row row-eq-height features">
      <div class="col-sm-4">
        <div class="s-feature">
          <span class="index">1999</span>
          <h4 class="f-title">"Сутай бага сургууль" нэртэйгээр анх байгуулагдсан.</h4>

        </div>

      </div>
      <div class="col-sm-4">
        <div class="s-feature col-blue">
          <span class="index">2004</span>
          <h4 class="f-title">Гадаад хэл, математикийн гүнзгийрүүлсэн сургалттай Сакура бүрэн дунд сургууль болж өргөжсөн</h4>

        </div>

      </div>
      <div class="col-sm-4">
        <div class="s-feature col-red">
          <span class="index">2005</span>
          <h4 class="f-title">Анхны төгсөлтөө хийж, төгсөгчдөө 50 хувийн тэтгэлэгтэй Япон улсад суралцуулж эхэлсэн</h4>
        </div>

      </div>
      <div class="col-sm-4">
        <div class="s-feature col-orange">
          <span class="index">2006</span>
          <h4 class="f-title">БСШУЯ, Монголын Сурагчдын Холбооны “Хүүхдэд ээлтэй сургууль” цол өргөмжлөлөөр шагнуулсан.</h4>
        </div>

      </div>
      <div class="col-sm-4">
        <div class="s-feature col-green">
          <span class="index">2007</span>
          <h4 class="f-title">Олон улсын хүүхдийн Найрамдал төвд “Налгар Найрамдал” хөтөлбөрийг хэрэгжүүлж эхэлсэн.</h4>
        </div>

      </div>
      <div class="col-sm-4">
        <div class="s-feature col-lb">
          <span class="index">2007</span>
          <h4 class="f-title">Англи хэлний түвшин тогтоох шалгалтад (JLPT) сурагчдаа хамруулж эхэлсэн.</h4>
        </div>

      </div>
      <div class="col-sm-4">
        <div class="s-feature col">
          <span class="index">2007</span>
          <h4 class="f-title">Япон дахь зуны сургалт, аяллыг зохион байгуулж эхэлсэн.</h4>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="s-feature col-blue">
          <span class="index">2010</span>
          <h4 class="f-title">“Соёмбоо дээдэлсэн хамт олон” цол өргөмжлөлөөр шагнуулсан.</h4>
        </div>

      </div>
      <div class="col-sm-4">
        <div class="s-feature col-red">
          <span class="index">2012</span>
          <h4 class="f-title">Нийгэмд стандарт хэвшүүлэх сангийн “Топ стандарт” сургууль цол хүртсэн.</h4>
        </div>

      </div>
      <div class="col-sm-4">
        <div class="s-feature col-orange">
          <span class="index">2014</span>
          <h4 class="f-title">Зайсан дахь шинэ байранд үйл ажиллагаагаа эхлүүлсэн.</h4>
        </div>

      </div>
      <div class="col-sm-4">
        <div class="s-feature col-green">
          <span class="index">2014</span>
          <h4 class="f-title">“Жобби” цахим систем хэрэгжүүлж, нийслэлийн “Шилдэг цахим сургууль”-аар шалгарсан.</h4>
        </div>

      </div>
      <div class="col-sm-4">
        <div class="s-feature col-lb">
          <span class="index">2015</span>
          <h4 class="f-title">Ахлах ангийн бүх сурагч Япон дахь зуны дадлага, сургалтад хамрагддаг болсон.</h4>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="s-feature col">
          <span class="index">2015</span>
          <h4 class="f-title">Сургалтын хөтөлбөрт усан бассейны хичээл, геометр, IQ-гийн хичээлүүд нэмэгдсэн.</h4>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="s-feature col-blue">
          <span class="index">2016</span>
          <h4 class="f-title">“Сакура” сайн үйлсийн аянаар 150 км-ийн бартаат замын дугуйн аялал Sakura Cycling Challenge (SCC) зохион байгуулсан.</h4>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="s-feature col-red">
          <span class="index">2016</span>
          <h4 class="f-title">Ахлах ангийн сурагчид Японы сурагч солилцооны хөтөлбөрт жил бүр хамрагддаг болсон.</h4>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="s-feature col-orange">
          <span class="index">2017</span>
          <h4 class="f-title">Үндэсний цэцэрлэгт хүрэээлэнд “Сакура төгөл” байгуулж, 300 гаруй мод, 7000 цэцэг тарьсан.</h4>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="s-feature col-green">
          <span class="index">2017</span>
          <h4 class="f-title">Англи хэлний олон улсын “Grape seed” хөтөлбөрийг хэрэгжүүлж байна.</h4>
        </div>
      </div>


    </div>

  </div>
</section>

<section class ="sakura-features section about">
  <div class="container">
    <div class="graduate-title sec-title">
          <h5>Сакура сургуулийн</h5>
          <h3>12 Давуу тал</h3>
      </div>
    <div class="row row-eq-height features">
      <div class="col-sm-4">
        <div class="s-feature">
          <span class="index">01</span>
          <h4 class="f-title">ЭРҮҮЛ,
            АЮУЛГҮЙ, НОГООН
            СУРГАЛТЫН ОРЧИН</h4>
          <p class="f-desc">Таны хүүхдийг эрүүл чийрэг хүн болгон
          төлөвшүүлэхэд сургуулийн орчны цэнгэг агаар,
          ногоон байгаль, илчлэг сайтай хоол хүнс гол
          үүрэгтэй. Манай сургууль Туул голын эрэг дээр
          цэвэр агаар, ногоон бүсэд байрлалтайгаас гадна
          сурагчдад өглөө, өдөр, үдийн халуун хоол,
          цайгаар үйлчилж байгаа нь тэдний идэвхтэй,
          хичээнгүйлэн суралцах нөхцлийг
          бүрдүүлдэг.</p>
        </div>

      </div>
      <div class="col-sm-4">
        <div class="s-feature col-blue">
          <span class="index">02</span>
          <h4 class="f-title">АНГЛИ, ЯПОН
            ХЭЛНИЙ
            ГҮНЗГИЙРҮҮЛСЭН СУРГАЛТ</h4>
          <p class="f-desc">Сурагчид маань нэгдүгээр ангиасаа эхлэн
          англи, япон хэлийг хослуулан үздэг.
          Тухайн сурагчийн хэлний мэдлэгийн түвшингээр
          групп болгон хичээллэдгээрээ онцлог. Өөрөөр
          хэлбэл, унаган англи, япон хэлтэй сурагчид ч,
          гадаад хэлийг анхлан судалж буй
          сурагчид ч тус тусын түвшинд таарсан
          агуулгыг судлах болно.</p>
        </div>

      </div>
      <div class="col-sm-4">
        <div class="s-feature col-red">
          <span class="index">03</span>
          <h4 class="f-title">ЭРҮҮЛ,
            ӨДӨР
            ӨНЖҮҮЛЭХ
            БҮЛЭГ</h4>
          <p class="f-desc">Бага ангийн хүүхэдтэй, цаг зав хомс эцэг,
          эхчүүдэд тулгамддаг асуудал бол “Өдөр
          өнжүүлэх” бүлэг билээ. Тэгвэл бид энэ
          асуудлыг шийдвэрлэх зорилгоор дэргэдээ
          “Өдөр өнжүүлэх” бүлэг ажиллуулан, сурагчдаа
          сургуулийн орчинд давтлага, дугуйланд
          хамруулахын зэрэгцээ даалгавраа хийх,
          үзсэн хичээлээ бататгах, авьяасаа
          нээн хөгжүүлэх боломжоор
          хангаж байна.</p>
        </div>

      </div>
      <div class="col-sm-4">
        <div class="s-feature col-orange">
          <span class="index">04</span>
          <h4 class="f-title">ЕРӨНХИЙ ЭРДМИЙН
          БҮХ ХИЧЭЭЛИЙГ СТАНДАРТААС
          ДЭЭГҮҮР ТҮВШИНД</h4>
          <p class="f-desc">Манай багш нар сурагч нэг бүрийн түвшинг
          тогтмол ахиулахыг эрхэмлэж, Япон болон
          Монголын боловсролын агуулгад заагдсан
          ерөнхий эрдмийн бүх хичээлийг улсын дундаж
          стандартаас дээгүүр эзэмшүүлдгээрээ гэдгээрээ
          онцлог. Өөрөөр хэлбэл, хоёр улсын
          боловсролын стандартыг хослуулсан
          дэлхийн жишигт нийцэх
          сургалтын хөтөлбөртэй.</p>
        </div>

      </div>
      <div class="col-sm-4">
        <div class="s-feature col-green">
          <span class="index">05</span>
          <h4 class="f-title">ЯПОНД 100
          ХУВИЙН ТЭТГЭЛГЭЭР
          СУРАЛЦАХ БОЛОМЖ</h4>
          <p class="f-desc">Төгсөгчид маань Японы их, дээд сургууль,
            коллежид 100 хүртэлх хувийн тэтгэлгээр
            суралцах боломжтой. Мөн “Сурагч солилцооны
            хөтөлбөр”-ийн хүрээнд жил бүр сурлагын
            амжилт гаргасан сурагчдыг Японы
            ахлах болон дунд сургуульд
            гурван сараас нэг жил хүртэлх
            хугацаагаар суралцуулдаг.</p>
        </div>

      </div>
      <div class="col-sm-4">
        <div class="s-feature col-lb">
          <span class="index">06</span>
          <h4 class="f-title">ЭЛСЭЛТИЙН
            ТУСГАЙЛСАН
            БЭЛТГЭЛ</h4>
          <p class="f-desc">Төгсөх ангийн сурагчид маань Монголын
            элсэлтийн ерөнхий шалгалт /ЭЕШ/, Японы
            элсэлтийн шалгалт /EJU/-ийн бэлтгэл
            хичээлд үнэ төлбөргүй хамрагдаж, сурагч
            бүрт нийцсэн хөтөлбөрөөр нэмэлт давтлага
            авдаг. Сурагч бүрийг хүссэн
            мэргэжлээрээ, зорьсон сургуульдаа
            элсэн суралцах боломжоор
            хангадаг.</p>
        </div>

      </div>
      <div class="col-sm-4">
        <div class="s-feature col">
          <span class="index">07</span>
          <h4 class="f-title">20 ТӨРЛИЙН
            ДУГУЙЛАН, КЛУБ</h4>
          <p class="f-desc">Сурагчдынхаа сонирхолд тулгуурлан
            сургууль дээрээ 20 төрлийн дугуйлан
            хичээллүүлж, тэдний авьяас чадвар, бие
            бялдарыг хөгжүүлдэг. Дугуйлангийн
            үнэ нь сургалтын төлбөрт багтсан
            байдгаараа онцлогтой.</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="s-feature col-blue">
          <span class="index">08</span>
          <h4 class="f-title">ЧАДВАРЛАГ
            УДИРДЛАГА, БАГШ НАР</h4>
          <p class="f-desc">Тус сургуулийн удирдлага, багш нар нь гадаад
            дотоодын их дээд сургуульд мэргэжлийн
            өндөр түвшинд бэлтгэгдэж, ажлын талбарт
            амжилт гаргасан, хүүхэд нэг бүрийн төлөө
            чин эрмэлзэлтэй чадварлаг сурган
            хүмүүжүүлэгчдээс бүрддэг.</p>
        </div>

      </div>
      <div class="col-sm-4">
        <div class="s-feature col-red">
          <span class="index">09</span>
          <h4 class="f-title">АНГИ ДҮҮРГЭЛТ:
            15-20 СУРАГЧ</h4>
          <p class="f-desc">Нэг ангид дунджаар 15 сурагч
            хичээллэдэг нь нэг багшид 6.5
            сурагч ногддог буй юм. Энэ нь улсын
            сургуультай харьцуулахад багш нар
            сурагч нэг бүртэй тулж ажиллах
            хүртээмж нь тав дахин илүү
            үзүүлэлт.</p>
        </div>

      </div>
      <div class="col-sm-4">
        <div class="s-feature col-orange">
          <span class="index">10</span>
          <h4 class="f-title">“АМЬД“ ЯПОН
            ХЭЛНИЙ ДАДЛАГА</h4>
          <p class="f-desc">Жил бүр багш, сурагчдаа Японд урт болон
            богино хугацааны зуны сургалтад хамруулж,
            хэлний мэдлэгийг нь дээшлүүлдэг.
            Ахлах ангийн сурагчдын зардал нь
            сургалтын жилийн төлбөрт багтсан
            тул бүх сурагчид маань жигд
            хамрагддаг онцлогтой.</p>
        </div>

      </div>
      <div class="col-sm-4">
        <div class="s-feature col-green">
          <span class="index">11</span>
          <h4 class="f-title">СУРГАЛТЫН
            ТӨЛБӨРИЙН ТЭТГЭЛЭГ,
            СУРАГЧ СОЛИЛЦОО</h4>
          <p class="f-desc">Амжилттай суралцаж буй сурагчдаа
            төлбөрийн 20-100 хувийн тэтгэлгээр
            шагнаж урамшуулдаг ба сургуулийн
            зардлаар Япон улсад “Сурагч
            солилцооны хөтөлбөр”-т
            хамруулдаг.</p>
        </div>

      </div>
      <div class="col-sm-4">
        <div class="s-feature col-lb">
          <span class="index">12</span>
          <h4 class="f-title">УСАН БАССЕЙН, IQ,
            НЭМЭЛТ СУРГАЛТ</h4>
          <p class="f-desc">Усан бассейн, IQ, геометр, математик сонгон
            зэрэг нэмэлт сургалттай. Сурагчид маань
            долоо хоног бүр “River Club”-ийн усан
            бассейнд хичээллэж, оюуны төдийгүй,
            бие бялдрын өв тэгш
            хүмүүжил олж авдаг.</p>
        </div>

      </div>



    </div>

  </div>
</section>
@include('elements/footer')
@stop

@section('js')
@stop
