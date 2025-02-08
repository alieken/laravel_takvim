<?php

namespace App\Http\Controllers;

use App\Models\Etkinlik;
use Illuminate\Http\Request;

class EtkinlikController extends Controller
{
    public function index(){
        $etkinliks = Etkinlik::orderBy('baslangic', 'asc')->get();
        return view('welcome', ['etks' => $etkinliks]);
    }

    public function create(){
        return view('add');
    }

    public function show($id){

        $etkinlik = Etkinlik::findOrFail($id);

        return view('edit', ['etk' => $etkinlik]);
    }

    public function edit_done(Request $request){

        $validated = $request->validate([
            "kullanici" => 'required|string|max:255',
            "baslik" => 'required|string|max:255',
            "aciklama" => 'required|string|min:10|max:1000',
            "baslangic" => 'required|date',
            "bitis" => 'required|date'
            //baslangic bitisten büyük olamaz
        ]);

        $id = $request->id;
        Etkinlik::whereId($id)->update($validated);
        return redirect()->route('index');
    }

    public function show_orj($id){

        $etkinlik = Etkinlik::findOrFail($id);

        return view('show', ['etk' => $etkinlik]);
    }

    public function delete($id){

        $etk = Etkinlik::findOrFail($id);
        $etk->delete();
        return redirect()->route('index');
    }

    public function store(Request $request){
        $validated = $request->validate([
            "kullanici" => 'required|string|max:255',
            "baslik" => 'required|string|max:255',
            "aciklama" => 'required|string|min:10|max:1000',
            "baslangic" => 'required|date',
            "bitis" => 'required|date'
            //baslangic bitisten büyük olamaz
        ]);

        Etkinlik::create($validated);

        return redirect()->route('index');
    }
}
