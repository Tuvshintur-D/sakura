@extends('layouts.master')

<header class="head page home-header" @if(isset($page->image->path)) style="background-image: url('{{ $page->image->path }}')" @endif>
  <div class="container">

    @include('elements/header')

    <div class="pagedetail">

      <div class="maintitle">
        Саруул ирээдүй
      </div>
      <div class="subtitle">
        Дэлхийд алдар нэрээ цуурайтуулсан, өв тэгш боловсролтой<br>шинэ зууны иргэдийг бэлтгэнэ
      </div>
      <div class="header-links">
        <a class="fill-bg" href="">Дэлгэрэнгүй <i class="fa fa-chevron-right"></i> </a>
        <a class="trans-bg" href=""><i class="fa fa-play-circle"></i> Танилцуулга</a>
      </div>
    </div>

  </div>
</header>
<section class="student-bulan">
  <div class="container">

      <div class="row no-gutters">
        <div class="col-md-3">
          <div class="about-school single-bulan">
            <div class="bulan-title">
                <img src="{{Theme::url('../../assets/media/school.png')}}"> <h4>Сургуулийн тухай</h4>
            </div>
            <div class="bulan-desc">
              <p>Сурагч нэвтэрснээр дүнгийн мэдээлэл харах</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="inter-prog single-bulan">
            <div class="bulan-title">
                <img src="{{Theme::url('../../assets/media/globe.png')}}"> <h4>Олон улсын хөтөлбөр</h4>
            </div>
            <div class="bulan-desc">
              <p>Сурагч солилцоо, сургалтын төлбөрийн тэтгэлэг</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="duguilan single-bulan">
            <div class="bulan-title">
                <img src="{{Theme::url('../../assets/media/duguilan.png')}}"> <h4>20 төрлийн дугуйлан</h4>
            </div>
            <div class="bulan-desc">
              <p>Хичээлээс гадуурх 20 төрлийн дугуйланд сурагчдаа хамрууладаг</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="st-bulan single-bulan">
            <a class="link-arrow" href="#"> <img src="{{Theme::url('../../assets/media/link-arrow.png')}}"></a>
            <div class="bulan-title">
                <img src="{{Theme::url('../../assets/media/student.png')}}"> <h4>Сурагчийн булан</h4>
            </div>
            <div class="bulan-desc">
              <p>Сурагч нэвтэрснээр дүнгийн мэдээлэл харах</p>
            </div>
          </div>
        </div>
      </div>

  </div>
</section>
<section class="home-enroll">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-6">
        <div class="enroll-left" style="background-image: url('http://sakuraschool.edu.mn/assets/media/home-enroll.jpg')">

        </div>
      </div>
      <div class="col-md-6">
        <div class="enroll-right" style="background-image: url('http://sakuraschool.edu.mn/assets/media/school-outside.jpg')">
          <h3>Элсэлт</h3>
          <p>Математик, англи, япон хэлний гүнзгийрүүлсэн сургалттай Сакура бүрэн дунд сургуулийн 2019-2020 оны хичээлийн жилийн бэлтгэл ангийн бүртгэл өнөөдрөөс буюу 2019.03.15-ээс эхэллээ.</p>
          <a class="enroll-btn" href="#">Онлайн элсэлт</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="home-welcome">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-5">
        <div class="welcome-text">
          <h5>Тавтай морил</h5>
          <h2>Сакура олон <br>улсын сургууль</h2>
          <p>Монгол орныхоо ирээдүйн иргэнийг сургаж, хөгжүүлж, төлөвшүүлэх их үйлсэд 1999 оноос эхлэн хүчин зүтгэж буй Сакура сургуулийнхаа нийт хамт олны нэрийн өмнөөс төгсөгчид, суралцагсад, эцэг, эхчүүд болон элсэн суралцахыг хүсэж буй эрхэм та бүхэнтэй мэндчилж буйдаа баяртай байна. Манай хамт олон эцэг, эхчүүдтэй ойр дөт харилцан, байгаль дэлхий, эцэг эхээ хайрлан хүндэлдэг, монгол зан заншил, өв уламжлалаа дээдэлдэг шинэ зууны шилдэг иргэдийг сургаж, эрдмийн замд хөтлөх их үйлсийн төлөө хичээнгүйлэн ажиллаж байна</p>
          <a class="welcome-btn" href="#">Дэлгэрэнгүй</a>
        </div>
      </div>
      <div class="col-md-7">
        <div class="welcome-img">
          <div class="wel-img-full">
            <img src="{{Theme::url('../../assets/media/welcome1.jpg')}}">
          </div>
          <div class="wel-img-half">
            <img class="wel-img2" src="{{Theme::url('../../assets/media/welcome2.jpg')}}">
            <img class="wel-img3" src="{{Theme::url('../../assets/media/welcome3.jpg')}}">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="home-graduation">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-4">

        <div class="graduate-title">
          <h5>Сакура сургуулийн</h5>
          <h3>Төгсөгчид</h3>
        </div>
        <div class="slider-for">

        	<div class="item">
        		<img src="{{Theme::url('../../assets/media/tugsugch1.png')}}" alt="image"  draggable="false"/>
            <p>Б. Хулан</p>
        	</div>
        	<div class="item">
        		<img src="{{Theme::url('../../assets/media/grad-dolgion.png')}}" alt="image" draggable="false"/>
            <p>Д.ДОЛГИОН</p>
        	</div>
        	<div class="item">
        		<img src="{{Theme::url('../../assets/media/grad-murun.png')}}" alt="image" draggable="false"/>
            <p>П. МӨРӨН</p>
        	</div>
        	<div class="item">
        		<img src="{{Theme::url('../../assets/media/grad-munkhjargal.png')}}" alt="image" draggable="false"/>
            <p>М.МӨНХЖАРГАЛ</p>
        	</div>
        	<div class="item">
        		<img src="{{Theme::url('../../assets/media/grad-enhjin.png')}}" alt="image" draggable="false"/>
            <p>Х. Энхжин</p>
        	</div>

        </div>


      </div>
      <div class="col-md-8">


        <div class="slider-nav">
        	<div class="item">
        		<div class="info-title">
              <h5>АЖИЛ ХЭРЭГЧ, БҮТЭЭЛЧ ДАДЛЫГ САКУРА СУРГУУЛЬ МИНЬ НАДАД ТӨЛӨВШҮҮЛЖЭЭ</h5>
            </div>
            <div class="info-desc">
              <p>2007 онд Сакура сургуулиа онц дүнтэй дүүргэж, ЮНЕСКО-гийн нэрэмжит мэргэжлийн морин хуурчдын уралдаанд амжилттай оролцож, дэд байрын шагнал хүртсэн билээ. Сургуулиа төгсөөд БНХАУын Шанхай хотын Хуа Дун Ли Гун их сургуульд маркетинг, менежментийн чиглэлээр суралцсан. Хятад, Хонг Конг, Швед, Англи улсуудад мэргэжлээрээ ажилласны дараа, эх орондоо ирээд байна. Олон улсад эзэмшсэн туршлагаа эх орондоо ажил хэрэг болгох зорилгоор 2015 онд маркетинг, брэндингийн зөвлөх үйлчилгээ үзүүлдэг “INBOUND” мэргэшсэн агентлагийг үүсгэн байгуулсан. Өдгөө 20 гаруй салбарын B2B, B2C бизнесүүдэд зөвлөх үйлчилгээ хүргэн, амжилттай ажиллаж байна. Энэ амжилтын минь эх суурийг тавьж өгсөн Сакура сургуульдаа насан туршдаа талархаж явах болно.</p>
            </div>
        	</div>
        	<div class="item">
            <div class="info-title">
              <h5>БАГШ НАР МААНЬ НАМАЙГ БҮТЭЭЛЧ, УЙГАГҮЙ АЖИЛЛАХ СУУРИЙГ ТАВЬЖ ӨГСӨН</h5>
            </div>
            <div class="info-desc">
              <p>Би Сакура сургуулийг төгсөөд ХүУИС-ийн Маркетинг- Менежментийн ангийг дүүргэж, олон улсын харилцаагаар магистрын зэрэг хамгаалсан. Сурагч байхаасаа загвар өмсөж, New face-2008 уралдааны “Шилдэг загвар өмсөгч”, “TV miss international-2010” уралдааны дэд байр, 2012 оны “Miss Mongo- lian” тэргүүн байр, Гоёл-2017 наадмын шилдэг загвар өмсөгч, Японд 2012 онд зохиогдсон “Мiss inter- national” уралдааны үндсэний хувцасны шилдэг загвар өмсөгч, Германд 2015 оны “Miss Intercontinental” шилдэг загвар өмсөгч, 2017 оны Германд зохиогдсон “World supermodel” тэмцээний “Brand-ын элч төлөөлөгч”, тусгай шагнал, 2017 оны Нью Йоркийн болон Вашингтоны загварын долоо хоногийн шилдэг оюутан загвар өмсөгч шагналыг тус тус хүртэж байлаа.
                Одоо Азийн загварын байгууллагын гүйцэтгэх захирал, “Gold- en international” компаний Олон Улсын мисс загварын холбооны Монгол дахь төлөөлөгч, үндэсний захирлаар ажиллаж байна.</p>
            </div>
        	</div>
        	<div class="item">
            <div class="info-title">
              <h5>ОЛОН УЛСЫН ХЭМЖЭЭНИЙ МАСТЕР БОЛСНЫ ДАРАА СУРГУУЛИЙНХАН МААНЬ ХҮЛЭЭЖ АВСАН МӨЧИЙГ МАРТДАГГҮЙ</h5>
            </div>
            <div class="info-desc">
              <p>Би Сакура сургуулиа 2014 онд төгсөөд, Хүмүүнлэгийн Ухааны сургуульд элсэн орсон. Одоо Австралид Төв Күенсландын Их сургуульд бизнес менежментийн ангид суралцаж байна. Манай сургуулийн багш нар сурагчдынхаа авьяас сонирхлыг нээн хөгжүүлэхэд маш их анхаардаг байсан. Тийм болохоор би хичээлээс гадуур мото спортоор хичээллэх боломжтой байсандаа баярлаж явдаг. Дунд сургуульд байхдаа Мотокроссын Улсын аварга, Ази тивийн олон улсын уралдааны хүрэл медаль, Оросын Холбооны Улсын зүүн Сибирийн аварга, Буриад болон Ангарскийн аварга болж, Олон Улсын хэмжээний мастер болсон. Манай сургуулийнхан намайг нижгэнэсэн алга ташилтаар хүлээн авсан тэр мөчийг одоог хүртэл дурсаж явдаг.</p>
            </div>
        	</div>
        	<div class="item">
            <div class="info-title">
              <h5>СУРГУУЛИЙН МААНЬ ОЛОН ТӨГСӨГЧ ДЭЛХИЙН НЭР ХҮНДТЭЙ ИХ ДЭЭД СУРГУУЛИЙГ ТӨГССӨН</h5>
            </div>
            <div class="info-desc">
              <p>Би Сакура сургуулийн 2011 оны төгсөгч. Сургуулиа төгсөөд БНСУ-ын Сүншил дээд сургуулийн хэлний бэлтгэлд хамрагдаж, 2012-2017 онд БНСУ-ын Инчеон дээд сургуулийг барилгын архитектурч мэргэжлээр төгссөн. Одоо магистрт сурахаар бэлдэж байна. Хэдэн жилийн өмнө Сакура сургуулиа төгссөн хэдий ч манай сургуулийн дээд, доод ангийн төгсөгчид одоо болтол найз нөхдийн нандин холбоогоо таслахгүй, бие биендээ анхаарал тавьж, тусалж байдаг нь биднийг хамт олонч, нээлттэй, нөхөрсөг харьцаатай, бие даасан хувь хүн болгож төлөвшүүлсэн САКУРА сургуулийн маань ач буян гэж боддог. Харийн оронд ганцаараа сурч боловсорч, амьдрах бие даах чадварыг манай САКУРА сургуулийн сургалт хүмүүжлийн ажил болон хичээлээс гадуурх дугуйлан секц, зохиогдож буй үйл ажиллагаа бидэнд олгосонд талархаж явдаг.</p>
            </div>
        	</div>
        	<div class="item">
            <div class="info-title">
              <h5>ДҮҮ НАРТАА ЦАГ ХУГАЦАА ЭРГЭЖ ОЛДОХГҮЙ ГЭДГИЙГ САНАЖ, ЦАГИЙГ ҮР БҮТЭЭЛТЭЙ ӨНГӨРҮҮЛЭЭРЭЙ, ХИЧЭЭГЭЭРЭЙ ГЭЖ ЗАХИЯ!</h5>
            </div>
            <div class="info-desc">
              <p>Японд суралцах хүсэлдээ хөтлөгдөн Сакура сургуульд орж, 2012 онд төгссөн. Улмаар Соёл эрдэм дээд сургуульд элсэн, 2 жилийн дараа Сакура сургуультай хамтран ажилладаг Нийгата мужийн Нагаокагийн Их сургуульд элссэн. Сакура сургууль маань 50 хувийн хөнгөлөлттэй суралцах боломж олгосонд баярладаг. Их сургуульд багш нар японоор лекц уншиж, бид бие даах ажлаа японоор хийж чадаж байсан нь бидний Сакура сургуульд суралцсан хэлний түвшинтэй холбоотой гэж бодож явдаг. Би их сургуульд суралцах үедээ хэлний мэдлэгээ дээшлүүлэхийн тулд уйгагүй хөдөлмөрлөж, нэгдүгээр түвшний шалгалтад тэнцэж, Ёнэяма ротарийн нэрэмжит тэтгэлэгт (сарын 1300 ам.доллар) хамрагдсан. Мөн Нийгата мужийн эмэгтэй гадаад оюутнуудын Япон хэл дээрх илтгэлийн уралдаанд түрүүлсэн.</p>
            </div>
        	</div>
        </div>

        <div class="grad-small">
            <img src="{{Theme::url('../../assets/media/tugsugch1.png')}}" alt="image"  draggable="false"/>
            <img src="{{Theme::url('../../assets/media/grad-dolgion.png')}}" alt="image"  draggable="false"/>
            <img src="{{Theme::url('../../assets/media/grad-murun.png')}}" alt="image"  draggable="false"/>
            <img src="{{Theme::url('../../assets/media/grad-munkhjargal.png')}}" alt="image"  draggable="false"/>
            <img src="{{Theme::url('../../assets/media/grad-enhjin.png')}}" alt="image"  draggable="false"/>
        </div>
        {{-- <div class="slider-small">

        	<div class="item">
        		<img src="{{Theme::url('../../assets/media/tugsugch1.png')}}" alt="image"  draggable="false"/>
        	</div>
        	<div class="item">
        		<img src="{{Theme::url('../../assets/media/tugsugch1.png')}}" alt="image" draggable="false"/>
        	</div>
        	<div class="item">
        		<img src="{{Theme::url('../../assets/media/tugsugch1.png')}}" alt="image" draggable="false"/>
        	</div>
        	<div class="item">
        		<img src="{{Theme::url('../../assets/media/tugsugch1.png')}}" alt="image" draggable="false"/>
        	</div>
        	<div class="item">
        		<img src="{{Theme::url('../../assets/media/tugsugch1.png')}}" alt="image" draggable="false"/>
        	</div>

        </div> --}}


      </div>
    </div>
  </div>
</section>
<div class="home-news">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="zarlal-top">
          <h5 class="home-news-title">Мэдээ мэдээлэл</h5>
          <div class="all-news">
            <a href="#">Бүгд</a>
          </div>
        </div>
        <div class="row equal-height">
          <div class="col-md-4">
            <div class="single-news">
              <div class="news-category">
                <p class="news-cat">Үйл явдал</p>
                <p class="news-date">2018.09.03</p>
              </div>
              <div class="news-title">
                  <a href="#"><h5>САКУРА: Олон улсад магадлан итгэмжлэгдсэн АНУ-ын сургалтын хөтөлбөрийг нэвтрүүллээ</h5></a>
              </div>
              <div class="news-desc">
                <p>Өнөөдөр есдүгээр сарын 3 буюу 2018-2019 оны шинэ хичээлийн жилийн эхний өдөр. Улсын хэмжээнд ихэнх сургуулиуд албан ёсны нээлтээ өнөөдөр хийж байгаа бөгөөд бид ч гэсэн энэ өдөр нээлтээ хйиж байна.</p>
              </div>
              <div class="news-perma">
                  <a href="#">Дэлгэрэнгүй</a>
              </div>

            </div>
          </div>
          <div class="col-md-4">
            <div class="single-news">
              <div class="news-category">
                <p class="news-cat surgalt">Сургалт</p>
                <p class="news-date">2018.09.03</p>
              </div>
              <div class="news-title">
                  <a href="#"><h5>САКУРА: Олон улсад магадлан итгэмжлэгдсэн АНУ-ын сургалтын хөтөлбөрийг нэвтрүүллээ</h5></a>
              </div>
              <div class="news-desc">
                <p>Өнөөдөр есдүгээр сарын 3 буюу 2018-2019 оны шинэ хичээлийн жилийн эхний өдөр. Улсын хэмжээнд ихэнх сургуулиуд албан ёсны нээлтээ өнөөдөр хийж байгаа бөгөөд бид ч гэсэн энэ өдөр нээлтээ хйиж байна.</p>
              </div>
              <div class="news-perma">
                  <a href="#">Дэлгэрэнгүй</a>
              </div>

            </div>
          </div>
          <div class="col-md-4">
            <div class="single-news">
              <div class="news-category">
                <p class="news-cat scholarship">Тэтгэлэг</p>
                <p class="news-date">2018.09.03</p>
              </div>
              <div class="news-title">
                  <a href="#"><h5>САКУРА: Олон улсад магадлан итгэмжлэгдсэн АНУ-ын сургалтын хөтөлбөрийг нэвтрүүллээ</h5></a>
              </div>
              <div class="news-desc">
                <p>Өнөөдөр есдүгээр сарын 3 буюу 2018-2019 оны шинэ хичээлийн жилийн эхний өдөр. Улсын хэмжээнд ихэнх сургуулиуд албан ёсны нээлтээ өнөөдөр хийж байгаа бөгөөд бид ч гэсэн энэ өдөр нээлтээ хйиж байна.</p>
              </div>
              <div class="news-perma">
                  <a href="#">Дэлгэрэнгүй</a>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="home-zarlal">
          <div class="zarlal-top">
            <h5 class="home-news-title">Зарлал</h5>
            <div class="all-news">
              <a href="#">Бүгд</a>
            </div>
          </div>
          <div class="single-news single-zarlal">
            <div class="news-category">
              <p class="news-cat zarlal">Зарлал</p>
              <p class="news-date">2018.09.03</p>
            </div>
            <div class="news-title">
                <a href="#"><h5>САКУРА: Олон улсад магадлан итгэмжлэгдсэн АНУ-ын сургалтын хөтөлбөрийг нэвтрүүллээ</h5></a>
            </div>
            <div class="news-desc">
              <p>Өнөөдөр есдүгээр сарын 3 буюу 2018-2019 оны шинэ хичээлийн жилийн эхний өдөр. Улсын хэмжээнд ихэнх сургуулиуд албан ёсны нээлтээ өнөөдөр хийж байгаа бөгөөд бид ч гэсэн энэ өдөр нээлтээ хйиж байна.</p>
            </div>
            <div class="news-perma">
                <a href="#">Дэлгэрэнгүй</a>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
</div>

@section('js')
<script type="text/javascript">
  // global.$ = global.jQuery = require('jquery');
    $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      draggable: false,
      arrows: true,
      autoplaySpeed: 10000,
      asNavFor: '.slider-nav',
      autoplay: true
    });

    $('.slider-nav').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      draggable: false,
      arrows: false,
      fade: true,
      dots: false,

    });


</script>
@stop
<footer class="footer">

    <div class="links">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-md-3">
            <div class="logoside h-100">

              <div class="footerlogo">
                <img src="{{Theme::url('images/footer_logo.png')}}" alt="">
              </div>
              <div class="social f-social">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="https://facebook.com/sakuraschoolmongolia/"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://facebook.com/sakuraschoolmongolia/"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://facebook.com/sakuraschoolmongolia/"><i class="fas fa-envelope"></i></a>
                  </li>
                </ul>
              </div>

            </div>
          </div>
          <div class="col-md-9">
            <div class="menuside h-100">

              <div class="row">
                <div class="col-md-4">
                  <div class="menutitle">
                    Сургалт
                  </div>
                  <div class="menulist">
                    <ul class="list-unstyled">
                      <li>
                        <a href="#">Суралцагчид</a>
                      </li>
                      <li>
                        <a href="#">Төгсөгчид</a>
                      </li>
                      <li>
                        <a href="#">Олон улсын хөтөлбөр</a>
                      </li>
                      <li>
                        <a href="#">Тэтгэлэг</a>
                      </li>
                      <li>
                        <a href="#">Сургалтын төлбөр</a>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="menutitle">
                    Холбоос
                  </div>
                  <div class="menulist">
                    <ul class="list-unstyled">
                      <li>
                        <a href="#">Сурагчийн булан</a>
                      </li>
                      <li>
                        <a href="#">Сургуулийн танилцуулга</a>
                      </li>
                      <li>
                        <a href="#">Онлайн элсэлт</a>
                      </li>
                      <li>
                        <a href="#">Холбоо барих</a>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="menutitle right">
                    Холбоо барих
                  </div>
                  <div class="menulist right">
                    Хан-Уул дүүрэг, 4 дүгээр хороо,
                    Наадамчдын зам 306, Яармаг,
                    Хүннү Моллын зүүн талд, Сакура Сургууль
                    Улаанбаатар хот, Монгол улс
                    <br><br>
                    +976 8966-8966, 8955-8955
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="copyright">
      <div class="container">
        © <?=date('Y')?> • Сакура олон улсын сургууль
      </div>
    </div>

</footer>
