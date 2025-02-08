<x-layout>
    <div style="margin-top: 50px;">
        <form action="{{ route('edit_done', $etk->id) }}" method="POST">
            @csrf

            <div class="form-group" >
                <label for="kullanici">Kullanıcı</label>
                <input type="text" class="form-control" id="kullanici" name="kullanici" aria-describedby="Kullanıcı" placeholder="Kullanıcı" value="{{ $etk->kullanici }}" required>
            </div>
            <div class="form-group" >
                <label for="baslik">Başlık</label>
                <input type="text" class="form-control" id="baslik" name="baslik" aria-describedby="Başlık" placeholder="Başlık" value="{{ $etk->baslik }}" required>
            </div>
            <div class="form-group" >
                <label for="aciklama">Açıklama</label>
                <textarea class="form-control" id="aciklama" name="aciklama" aria-describedby="Açıklama" placeholder="Açıklama" rows="5" required>{{ $etk->aciklama }}</textarea>
            </div>
            <div class="form-group" >
                <label for="baslangic">Başlangıç Tarih</label>
                <input type="date" class="form-control" id="baslangic" name="baslangic" aria-describedby="Başlangıç Tarih" placeholder="Başlangıç Tarih" value="{{ $etk->baslangic }}" onchange="baslangic_degisti()" min="<?php echo date("Y-m-d");?>" required>
            </div>
            <div class="form-group" >
                <label for="bitis">Bitiş Tarih</label>
                <input type="date" class="form-control" id="bitis" name="bitis" aria-describedby="Bitiş Tarih" placeholder="Bitiş Tarih" value="{{ $etk->bitis }}" required>
            </div>

            <input type="hidden" name="id" value="{{ $etk->id }}">

            <button type="submit" class="btn btn-primary">Düzelt</button>
            <br><br>
            @if ($errors->any())
                <ul>
                    @foreach ( $errors->all() as $error )
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            @endif

        </form>
    </div>

    <script>
        function baslangic_degisti(){
            var baslangic = document.getElementById("baslangic").value;
            document.getElementById("bitis").value = baslangic;
            input = document.getElementById("bitis");
            input.setAttribute("min", baslangic);
        }
    </script>
</x-layout>