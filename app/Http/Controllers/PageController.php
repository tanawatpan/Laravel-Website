<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Manga;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display Index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manga = Manga::all()->sortByDesc('updated_at')->first();
        $manga->logo = glob('storage/manga/' . $manga->mid . '/logo.*')[0];
        $gallery = Gallery::all()->sortByDesc('updated_at')->first();
        $gallery->logo = glob('storage/gallery/' . $gallery->gid . '/*')[0];
        return view('index')->with(array(
            'manga' => $manga,
            'gallery' => $gallery
        ));
    }
}
