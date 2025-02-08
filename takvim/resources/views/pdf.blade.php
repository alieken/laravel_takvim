<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </head>
  <body>
    <table style="width: 100%; border: 1px solid black;font-family: DejaVu Sans, sans-serif; text-align: center;">
    <thead>
      <tr>
        <td style="width: 100%; border: 1px solid black;"><b>Kullanıcı</b></td>
        <td style="width: 100%; border: 1px solid black;"><b>Başlık</b></td>
        <td style="width: 100%; border: 1px solid black;"><b>Açıklama</b></td>     
        <td style="width: 100%; border: 1px solid black;"><b>Başlangıç</b></td>   
        <td style="width: 100%; border: 1px solid black;"><b>Bitiş</b></td>   
      </tr>
      </thead>
      <tbody>
        @foreach ( $shows as $show )
        <tr>
            <td style="width: 100%; border: 1px solid black;">
                {{ $show->kullanici}}
              </td>
              <td style="width: 100%; border: 1px solid black;">
                {{ $show->baslik}}
              </td>
              <td style="width: 100%; border: 1px solid black;">
                {{ $show->aciklama}}
              </td>
              <td style="width: 100%; border: 1px solid black;">
                @php
                    $tarih = $show->baslangic;
                    $tarih_bol = explode("-", $tarih);
                    $tarih = $tarih_bol[2] . "-" . $tarih_bol[1] . "-" . $tarih_bol[0];
                    echo $tarih;
                @endphp
              </td>
              <td style="width: 100%; border: 1px solid black;">
                @php
                    $tarih = $show->bitis;
                    $tarih_bol = explode("-", $tarih);
                    $tarih = $tarih_bol[2] . "-" . $tarih_bol[1] . "-" . $tarih_bol[0];
                    echo $tarih;
                @endphp
              </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>