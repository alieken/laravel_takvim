<x-layout>

    <h2>Kullanıcı</h2>
    <p>{{ $etk->kullanici }}</p>

    <h2>Başlık</h2>
    <p>{{ $etk->baslik }}</p>

    <h2>Açıklama</h2>
    <p>{{ $etk->aciklama }}</p>

    <h2>Başlangıç Tarihi</h2>
    <p>{{ $etk->baslangic }}</p>

    <h2>Bitiş Tarihi</h2>
    <p>{{ $etk->bitis }}</p>

    <a href="{{ route('show', $etk->id) }}" class="btn btn-warning">Düzenle</a>
    <form action="{{ route('delete', $etk->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Sil</button>
    </form>
</x-layout>