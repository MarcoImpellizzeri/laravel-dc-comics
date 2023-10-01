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
        $comic = Comic::find($id);
        return view('partials.show', ["comic" => $comic]);
    }
}
