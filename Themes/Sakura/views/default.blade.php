@extends('layouts.master')

@section('content')

<header class="head page" @if(isset($page->image->path)) style="background-image: url('{{ $page->image->path }}')" @endif>
  <div class="container">

    <div class="topmenu">
      <div class="row">
        <div class="col-6">

          <div class="quick-contact">
            <ul class="list-inline">
              <li class="list-inline-item"><i class="fas fa-mobile-alt"></i> +976 8966-8966</li>
              <li class="list-inline-item"><a href=""><i class="far fa-envelope"></i> info@sakuraschool.edu.mn</a></li>
            </ul>
          </div>

        </div>
        <div class="col-6">

          <div class="quick-links text-right">
            <ul class="list-inline">
              <li class="list-inline-item"><img src="{{Theme::url('images/en.png')}}"></li>
              <li class="list-inline-item"><a href="#"><i class="fas fa-search"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item last"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="mainhead">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{asset('/')}}">
          <img src="{{Theme::url('images/logo.png')}}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            {{-- <li class="nav-item">
              <a class="nav-link" href="#">Нүүр хуудас <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Сургуулийн тухай</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Сургалт</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Суралцагчид
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Мэдээ мэдээлэл</a>
            </li> --}}
            <li class="nav-item active">
              <a class="nav-link" href="{{asset('/')}}">Элсэлт</a>
            </li>
          </ul>
        </div>
      </nav>

    </div>

    <div class="pagedetail">
      <div class="subtitle">
        Онлайн
      </div>
      <div class="maintitle">
        Элсэлт
      </div>
    </div>

  </div>
</header>

<section class="enrollment">
  <div class="container">

    @if(session('message'))
      <div class="alert alert-success" role="alert" style="margin-bottom: 40px;">
        {{ session('message') }}
      </div>
    @endif

    <div class="row">
      <div class="col-md-5">

        <div class="introduction">

          <div class="ftext">
            Математик, англи, япон хэлний гүнзгийрүүлсэн сургалттай Сакура Олон Улсын сургуулийн 2019-2020 оны хичээлийн жилийн бэлтгэл ангийн бүртгэл <b>2019.03.15</b>-наас <b>2019.03.25</b>-ны хооронд явагдана.
          </div>

          <div class="flist">
            <ul class="list-unstyled">
              <li>
                <div class="row">
                  <div class="col-2">
                    <img src="{{Theme::url('images/enroll_list1.png')}}">
                  </div>
                  <div class="col-10 auto-height">
                    Бүртгэлийн хураамж: 30’000₮
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-2">
                    <img src="{{Theme::url('images/enroll_list2.png')}}">
                  </div>
                  <div class="col-10 auto-height">
                    Бүртгэлтэй холбоотой мэдээллийг 8966-8966, 8955-8955 утсаар холбогдоно уу.
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-2">
                    <img src="{{Theme::url('images/enroll_list3.png')}}">
                  </div>
                  <div class="col-10 auto-height">
                    Хан-Уул дүүрэг, 4 дүгээр хороо, Наадамчдын зам 306, Яармаг, Хүннү Моллын зүүн талд, Сакура Сургууль
                  </div>
                </div>
              </li>
            </ul>
          </div>

        </div>

      </div>
      <div class="col-md-7">

        <div class="schoolimage">
          <img src="{{Theme::url('images/elselt_school.jpg')}}" alt="">
        </div>

      </div>
    </div>

    <div class="arrowcontent">
      <div class="downarrow">
        <div class="title">
          Бүртгүүлэх хэсэг
        </div>
        <div class="icon">
          <i class="fas fa-chevron-down bounce"></i>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="enroll-form">
  <div class="container">

    <div class="title">
      Шинээр элсэлтийн бүртгэл
    </div>

    <div class="form-section">
      <div class="row">
        <div class="col-md-5">
          <div class="tiptext">
            Та элсэгчтэй холбоотой мэдээллийг үнэн зөв бөглөнө үү!<br><br>
            Бид таны оруулсан мэдээлэл дээр үндэслэн бүртгэлийг баталгаажуулах болно.
          </div>
        </div>
        <div class="col-md-7">

          <form action="{{asset('/enroll/register')}}" method="post">
            {!! csrf_field() !!}
            <input type="hidden" name="locale" value="{{locale()}}">
            <div class="formcontent">

                <div class="form-item">
                  <div class="row">
                    <div class="col-md-6">
                      <input type="text" name="familyname" value="" placeholder="Ургийн овог" class="form-control" data-validation="required">
                    </div>
                  </div>
                </div>

                <div class="form-item">
                  <div class="row">
                    <div class="col-md-6">
                      <input type="text" name="lastname" value="" placeholder="Овог" class="form-control" data-validation="required">
                    </div>
                    <div class="col-md-6">
                      <input type="text" name="firstname" value="" placeholder="Нэр" class="form-control" data-validation="required">
                    </div>
                  </div>
                </div>

                <div class="form-item">
                  <div class="row">
                    <div class="col-md-6">
                      <input type="text" name="birthday" value="" placeholder="Төрсөн он сар өдөр" class="form-control datepicker-here" id="enroll-birthday" data-validation="date" data-validation-format="yyyy-mm-dd">
                    </div>
                    <div class="col-md-6">
                      <select name="gender" class="form-control" data-validation="required">
                        <option value="" disabled hidden selected>Хүйс</option>
                        <option value="male">Эрэгтэй</option>
                        <option value="female">Эмэгтэй</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="form-item">
                  <div class="row">
                    <div class="col-md-6">

                      <div class="registernumber">
                        <div class="chooseletter">
                          <select name="register_letter1" class="form-control registernumber" data-validation="required">
                            <option value="а">А</option>
                            <option value="б">Б</option>
                            <option value="в">В</option>
                            <option value="г">Г</option>
                            <option value="д">Д</option>
                            <option value="е">Е</option>
                            <option value="ё">Ё</option>
                            <option value="ж">Ж</option>
                            <option value="з">З</option>
                            <option value="и">И</option>
                            <option value="й">Й</option>
                            <option value="к">К</option>
                            <option value="л">Л</option>
                            <option value="м">М</option>
                            <option value="н">Н</option>
                            <option value="о">О</option>
                            <option value="ө">Ө</option>
                            <option value="п">П</option>
                            <option value="р">Р</option>
                            <option value="с">С</option>
                            <option value="т">Т</option>
                            <option value="у">У</option>
                            <option value="ү">Ү</option>
                            <option value="ф">Ф</option>
                            <option value="х">Х</option>
                            <option value="ц">Ц</option>
                            <option value="ч">Ч</option>
                            <option value="ш">Ш</option>
                            <option value="щ">Щ</option>
                            <option value="ъ">Ъ</option>
                            <option value="ы">Ы</option>
                            <option value="ь">Ь</option>
                            <option value="э">Э</option>
                            <option value="ю">Ю</option>
                            <option value="я">Я</option>
                          </select>
                        </div>

                        <div class="chooseletter">
                          <select name="register_letter2" class="form-control registernumber" data-validation="required">
                            <option value="а">А</option>
                            <option value="б">Б</option>
                            <option value="в">В</option>
                            <option value="г">Г</option>
                            <option value="д">Д</option>
                            <option value="е">Е</option>
                            <option value="ё">Ё</option>
                            <option value="ж">Ж</option>
                            <option value="з">З</option>
                            <option value="и">И</option>
                            <option value="й">Й</option>
                            <option value="к">К</option>
                            <option value="л">Л</option>
                            <option value="м">М</option>
                            <option value="н">Н</option>
                            <option value="о">О</option>
                            <option value="ө">Ө</option>
                            <option value="п">П</option>
                            <option value="р">Р</option>
                            <option value="с">С</option>
                            <option value="т">Т</option>
                            <option value="у">У</option>
                            <option value="ү">Ү</option>
                            <option value="ф">Ф</option>
                            <option value="х">Х</option>
                            <option value="ц">Ц</option>
                            <option value="ч">Ч</option>
                            <option value="ш">Ш</option>
                            <option value="щ">Щ</option>
                            <option value="ъ">Ъ</option>
                            <option value="ы">Ы</option>
                            <option value="ь">Ь</option>
                            <option value="э">Э</option>
                            <option value="ю">Ю</option>
                            <option value="я">Я</option>
                          </select>
                        </div>

                        <div class="writenumber">
                          <input type="number" name="register_number" value="" placeholder="Регистерийн дугаар" class="form-control" data-validation="length" data-validation-length="8">
                        </div>
                      </div>

                    </div>
                    <div class="col-md-6">
                      <select name="class" class="form-control" data-validation="required">
                        <option value="" disabled hidden selected>Хэддүгээр ангид орох</option>
                        <option value="0">Бэлтгэл анги</option>
                        @for($i=1; $i<=12; $i++)
                          <option value="1">{{$i}}-р анги</option>
                        @endfor
                      </select>
                    </div>
                  </div>
                </div>

                <div class="form-item">
                  <textarea class="form-control textarea" name="address" placeholder="Гэрийн хаяг" rows="4" data-validation="required"></textarea>
                </div>

                <div class="form-item">
                  <div class="row">
                    <div class="col-md-6">
                      <input type="text" name="phone1" value="" placeholder="Холбоо барих утас #1" class="form-control" data-validation="number">
                    </div>
                    <div class="col-md-6">
                      <input type="text" name="phone2" value="" placeholder="Холбоо барих утас #2" class="form-control" data-validation="number">
                    </div>
                  </div>
                </div>

                <div class="form-item">
                  <textarea class="form-control textarea" name="contact" placeholder="Холбоо барих мэдээлэл" rows="4" data-validation="required"></textarea>
                </div>

                <div class="form-item">
                  <div class="row">
                    <div class="col-md-6">
                      <input type="text" name="email" value="" placeholder="Холбоо барих имэйл хаяг" class="form-control" data-validation="email">
                    </div>
                    <div class="col-md-6">
                      <input type="text" name="beforeschool" value="" placeholder="Өмнөх сургууль/цэцэрлэг, анги" class="form-control">
                    </div>
                  </div>
                </div>

                <div class="form-item">
                  <div class="checkbox-label">
                    Хүүхэд хэнтэйгээ хамт амьдардаг /сонгох/
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="familystatus[]" id="familycheck1" value="aav">
                    <label class="form-check-label" for="familycheck1">Аав</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="familystatus[]" id="familycheck2" value="eej">
                    <label class="form-check-label" for="familycheck2">Ээж</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="familystatus[]" id="familycheck3" value="emee">
                    <label class="form-check-label" for="familycheck3">Эмээ</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="familystatus[]" id="familycheck4" value="ovoo">
                    <label class="form-check-label" for="familycheck4">Өвөө</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="familystatus[]" id="familycheck5" value="ah">
                    <label class="form-check-label" for="familycheck5">Ах</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="familystatus[]" id="familycheck6" value="egch">
                    <label class="form-check-label" for="familycheck6">Эгч</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="familystatus[]" id="familycheck7" value="duu">
                    <label class="form-check-label" for="familycheck7">Дүү</label>
                  </div>
                </div>

                <div class="input-label">
                  Сурагчийн тухай
                </div>
                <div class="form-item">
                  <input type="text" name="zantuluv" class="form-control" placeholder="Зан төлөв">
                </div>
                <div class="form-item">
                  <input type="text" name="hobby" class="form-control" placeholder="Сонирхол">
                </div>
                <div class="form-item">
                  <input type="text" name="skill" class="form-control" placeholder="Авьяас">
                </div>
                <div class="form-item">
                  <input type="text" name="healthstatus" class="form-control" placeholder="Эрүүл мэндийн байдал">
                </div>

                <div class="input-label">
                  Гэр бүлийн байдал
                </div>
                <div class="form-item">

                  <div class="table-responsive" style="overflow-x:auto;">
                    <table class="table table-bordered">
                      <tr>
                        <th>Хамаарал</th>
                        <th>Овог, нэр</th>
                        <th>Регистерийн<br>дугаар</th>
                        <th>Ажлын газар</th>
                        <th>Утасны дугаар</th>
                        <th>Имэйл хаяг</th>
                      </tr>
                      <tr>
                        <td>
                          <input name="familycontact[0][0]">
                        </td>
                        <td>
                          <input name="familycontact[0][1]">
                        </td>
                        <td>
                          <input name="familycontact[0][2]">
                        </td>
                        <td>
                          <input name="familycontact[0][3]">
                        </td>
                        <td>
                          <input name="familycontact[0][4]">
                        </td>
                        <td>
                          <input name="familycontact[0][5]">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <input name="familycontact[1][0]">
                        </td>
                        <td>
                          <input name="familycontact[1][1]">
                        </td>
                        <td>
                          <input name="familycontact[1][2]">
                        </td>
                        <td>
                          <input name="familycontact[1][3]">
                        </td>
                        <td>
                          <input name="familycontact[1][4]">
                        </td>
                        <td>
                          <input name="familycontact[1][5]">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <input name="familycontact[2][0]">
                        </td>
                        <td>
                          <input name="familycontact[2][1]">
                        </td>
                        <td>
                          <input name="familycontact[2][2]">
                        </td>
                        <td>
                          <input name="familycontact[2][3]">
                        </td>
                        <td>
                          <input name="familycontact[2][4]">
                        </td>
                        <td>
                          <input name="familycontact[2][5]">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <input name="familycontact[3][0]">
                        </td>
                        <td>
                          <input name="familycontact[3][1]">
                        </td>
                        <td>
                          <input name="familycontact[3][2]">
                        </td>
                        <td>
                          <input name="familycontact[3][3]">
                        </td>
                        <td>
                          <input name="familycontact[3][4]">
                        </td>
                        <td>
                          <input name="familycontact[3][5]">
                        </td>
                      </tr>
                    </table>
                  </div>

                </div>

                <div class="input-label">
                  Мэдээлэл авсан эх сурвалж
                </div>
                <div class="form-item source">

                  <div class="row">
                    <div class="col-3">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="brochure" name="source[]" id="sourcecheck1">
                        <label class="form-check-label" for="sourcecheck1">
                          Брошур
                        </label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="website" name="source[]" id="sourcecheck2">
                        <label class="form-check-label" for="sourcecheck2">
                          Сургуулийн веб хуудас
                        </label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="facebook" name="source[]" id="sourcecheck3">
                        <label class="form-check-label" for="sourcecheck3">
                          Сургуулийн фэйсбүүк хуудас
                        </label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="sms" name="source[]" id="sourcecheck4">
                        <label class="form-check-label" for="sourcecheck4">
                          SMS/утас
                        </label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="board" name="source[]" id="sourcecheck5">
                        <label class="form-check-label" for="sourcecheck5">
                          Зарлалын самбар
                        </label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="friend" name="source[]" id="sourcecheck6">
                        <label class="form-check-label" for="sourcecheck6">
                          Найз, нөхдөөс
                        </label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="other" name="source[]" id="sourcecheck7">
                        <label class="form-check-label" for="sourcecheck7">
                          Бусад
                        </label>
                      </div>
                    </div>
                  </div>

                </div>

            </div>

            <div class="action">
              <div class="row">
                <div class="col-md-6 my-auto">

                  <div class="helptext">
                    Бөглөсөн мэдээллээ сайтар шалгаад<br>“Элсэгчээр бүртгүүлэх” товчыг дарна уу.
                  </div>

                </div>
                <div class="col-md-6 text-right">

                  <button type="submit" value="Validate">Элсэгчээр бүртгүүлэх <i class="fas fa-arrow-right"></i></button>

                </div>
              </div>
            </div>

          </form>

        </div>
      </div>
    </div>

  </div>
</section>

<footer class="footer">

    <div class="links">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-md-3">
            <div class="logoside h-100">

              <div class="footerlogo">
                <img src="{{Theme::url('images/footer_logo.png')}}" alt="">
              </div>
              <div class="social">
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

@stop

@section('js')
  <script src="{{asset('/js/datepicker-i18n/datepicker.'.\App::getLocale().'.js')}}"></script>
  <script type="text/javascript">

  var mnLanguage = {
        errorTitle: 'Form submission failed!',
        requiredField: 'Мэдээллээ заавал оруулна уу',
        requiredFields: 'You have not answered all required fields',
        badTime: 'You have not given a correct time',
        badEmail: 'Имэйл хаяг буруу байна. Зөв имэйл оруулна уу',
        badTelephone: 'You have not given a correct phone number',
        badSecurityAnswer: 'You have not given a correct answer to the security question',
        badDate: 'Он сар өдрийг зөв оруулна уу',
        lengthBadStart: 'Оруулах тэмдэгт буруу. ',
        lengthBadEnd: ' тэмдэгт',
        lengthTooLongStart: 'Оруулах утга урт байна. ',
        lengthTooShortStart: 'The input value is shorter than ',
        notConfirmed: 'Input values could not be confirmed',
        badDomain: 'Incorrect domain value',
        badUrl: 'The input value is not a correct URL',
        badCustomVal: 'The input value is incorrect',
        andSpaces: ' and spaces ',
        badInt: 'Зөвхөн тоо оруулна уу',
        badSecurityNumber: 'Your social security number was incorrect',
        badUKVatAnswer: 'Incorrect UK VAT Number',
        badStrength: 'The password isn\'t strong enough',
        badNumberOfSelectedOptionsStart: 'You have to choose at least ',
        badNumberOfSelectedOptionsEnd: ' answers',
        badAlphaNumeric: 'The input value can only contain alphanumeric characters ',
        badAlphaNumericExtra: ' and ',
        wrongFileSize: 'The file you are trying to upload is too large (max %s)',
        wrongFileType: 'Only files of type %s is allowed',
        groupCheckedRangeStart: 'Please choose between ',
        groupCheckedTooFewStart: 'Please choose at least ',
        groupCheckedTooManyStart: 'Please choose a maximum of ',
        groupCheckedEnd: ' item(s)',
        badCreditCard: 'The credit card number is not correct',
        badCVV: 'The CVV number was not correct',
        wrongFileDim : 'Incorrect image dimensions,',
        imageTooTall : 'the image can not be taller than',
        imageTooWide : 'the image can not be wider than',
        imageTooSmall : 'the image was too small',
        min : 'min',
        max : 'max',
        imageRatioNotAccepted : 'Image ratio is not accepted'
    };

    $.validate({
      language: @if(\App::getLocale()=='mn') mnLanguage @else'en'@endif,
      errorElementClass: 'is-invalid',
      errorMessageClass: 'invalid-feedback',
      messages: {
					requiredField: 'Enter this!'
			}
    });

    $('#enroll-birthday').datepicker({
      language: '{{\App::getLocale()}}',
      autoClose: true,
      startDate: new Date('2010-01-01'),
      dateFormat: 'yyyy-mm-dd',
      view: 'years'
    })

  </script>

@stop
