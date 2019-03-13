Сайн байна уу?<br>
Вэбсайтад шинээр элсэгч бүртгүүллээ. Элсэгчийн мэдээлэлтэй танилцана уу.<br>

<p>
  <b>Ургийн овог:</b> {{$data['familyname']}}<br>
  <b>Овог:</b> {{$data['lastname']}}<br>
  <b>Нэр:</b> {{$data['firstname']}}<br>
  <b>Төрсөн огноо:</b> {{$data['birthday']}}<br>
  <b>Хүйс:</b> {{$data['gender']}}<br>
  <b>Регистерийн дугаар:</b> {{$data['register_letter1'].$data['register_letter2'].$data['register_number']}}<br>
  <b>Элсэн орох анги:</b> {{$data['class']}}<br>
  <b>Хаяг:</b> {{$data['address']}}<br>
  <b>Утас:</b> {{$data['phone1']}}, {{$data['phone2']}}<br>
  <b>Холбоо барих мэдээлэл:</b> {{$data['contact']}}<br>
  <b>Имэйл хаяг:</b> {{$data['email']}}<br>
  <b>Өмнөх сургууль:</b> {{$data['beforeschool']}}<br>
  <b>Хүүхэд хэнтэйгээ хамт амьдардаг:</b> @if($data['familystatus']!==NULL) @foreach(json_decode($data['familystatus']) as $f) {{$f}}, @endforeach @endif<br>
  <b>Зан төлөв:</b> {{$data['zantuluv']}}<br>
  <b>Хобби:</b> {{$data['hobby']}}<br>
  <b>Авъяас:</b> {{$data['skill']}}<br>
  <b>Эрүүл мэндийн байдал:</b> {{$data['healthstatus']}}<br>
  <b>Мэдээлэл авсан эх сурвалж:</b> @if($data['source']!==NULL) @foreach(json_decode($data['source']) as $s) {{$s}}, @endforeach @endif<br>
  <b>Бүртгэгдсэн огноо:</b> {{$data['created_at']}}<br>
</p>

<p>Элсэгчийн дэлгэрэнгүй мэдээлэл харах:<br><a href="{{asset('/en/backend/enroll/enrolls/'.$data['id'].'/view')}}">{{asset('/en/backend/enroll/enrolls/'.$data['id'].'/view')}}</a></p>

{{-- <table width="100%" border="1" style="border-collapse: collapse;">
  <tr style="background: #ccc;">
    <td><b>№</b></td>
    <td><b>Бүтээгдэхүүн</b></td>
    <td><b>Тоо/Ширхэг</b></td>
    <td><b>Үнэ</b></td>
    <td><b>Нийт үнэ</b></td>
  </tr>
</table> --}}
