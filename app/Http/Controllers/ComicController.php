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

        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];
        $newComic->artists = $data['artists'];
        $newComic->writers = $data['writers'];

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }
}
