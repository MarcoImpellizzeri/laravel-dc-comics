<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index() {
        $dati = Comic::all();

        return view('comics.index', ['comics' => $dati]);
    }

    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.show', ["comic" => $comic]);
    }

    public function create() {
        return view('comics.create');
    }

    public function store(Request $request) {
        $data = $request->all();

        $newComic = new Comic();

        $newComic->titolo = $data['title'];
        $newComic->Descrizione = $data['description'];
        $newComic->Link_immagine = $data['thumb'];
        $newComic->Prezzo = $data['price'];
        $newComic->Serie = $data['series'];
        $newComic->Data_di_uscita = $data['sale_date'];
        $newComic->Tipo = $data['type'];
        $newComic->Disegnatori = explode(",", $data['artists']);
        $newComic->Scrittori = explode(",", $data['writers']);

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }
}
