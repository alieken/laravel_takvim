<x-layout>


    <ul class="list-group" style="margin-top: 50px;">
        <li class="list-group-item"><b>Kullanıcı :</b> {{ $etk->kullanici }}</li>
        <li class="list-group-item"><b>Başlık :</b> {{ $etk->baslik }}</li>
        <li class="list-group-item"><b>Açıklama :</b> {{ $etk->aciklama }}</li>
        <li class="list-group-item"><b>Başlangıç Tarihi :</b> 
        @php
            $tarih = $etk->baslangic;
            $tarih_bol = explode("-", $tarih);
            $tarih = $tarih_bol[2] . "-" . $tarih_bol[1] . "-" . $tarih_bol[0];
            echo $tarih;
        @endphp
        </li>
        <li class="list-group-item"><b>Bitiş Tarihi :</b>
        @php
            $tarih = $etk->bitis;
            $tarih_bol = explode("-", $tarih);
            $tarih = $tarih_bol[2] . "-" . $tarih_bol[1] . "-" . $tarih_bol[0];
            echo $tarih;
        @endphp
        </li>
        <li class="list-group-item"><a href="{{ route('show', $etk->id) }}" class="btn btn-warning">Düzenle</a></li>
        <li class="list-group-item">
            <form action="{{ route('delete', $etk->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Sil</button>
            </form>
        </li>
      </ul>


    
    
</x-layout>