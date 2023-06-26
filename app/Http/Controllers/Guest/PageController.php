<?php

namespace App\Http\Controllers\Guest;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PageController extends Controller
{
    public function comics() {
        $collComics = Comic::all();
        return view ('comics', compact('comics'));
    }
}
