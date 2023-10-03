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

        $data = $request->validate([
            "title" => "required",
            "description" => "required|string",
            "thumb" => "required|string|max:500",
            "price" => "required|integer|min:1|max:10000",
            "series" => "nullable|string|max:255",
            "sales_date" => "nullable",
            "type" => "nullable",
            "artists" => "nullable",
            "writers" => "nullable|string"
        ]);

        // $newComic->title = $data['title'];
        // $newComic->description = $data['description'];
        // $newComic->thumb = $data['thumb'];
        // $newComic->price = $data['price'];
        // $newComic->series = $data['series'];
        // $newComic->sale_date = $data['sale_date'];
        // $newComic->type = $data['type'];
        // $newComic->artists = $data['artists'];
        // $newComic->writers = $data['writers'];

        $newComic->fill($data);
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }
}
