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
        dd($request->all());
    }
}
