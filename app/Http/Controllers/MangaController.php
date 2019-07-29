<?php

namespace App\Http\Controllers;

use App\Manga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use PHPUnit\Framework\Constraint\IsTrue;

class MangaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show', 'tag']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all sort Mangas.
        $mangas = Manga::OrderBy('updated_at', 'desc')->paginate(6);
        // back up Mangas.
        $_mangas = $mangas;

        $paths = array();
        // Get logo path
        foreach (Manga::all() as $manga) {
            $base = 'storage/manga/' . $manga->mid . '/logo.*';
            $paths[$manga->mid] = glob($base)[0];
        }

        // get all unique genres.
        $genres = array();
        foreach ($mangas as $manga)
            foreach (explode(',', strtolower($manga->genre)) as $genre)
                if (!in_array($genre, $genres))
                    array_push($genres, $genre);

        return view('manga.index')->with(array(
            'mangas' => $_mangas,
            'genres' => $genres,
            'paths' => $paths
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manga.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws
     */
    public function store(Request $request)
    {
        // Validate the inputs
        $this->validate($request, [
            'title' => 'required|min:3|max:191|unique:mangas,title',
            'author' => 'required|min:3|max:191',
            'genre' => 'required|min:3|max:191',
            'description' => 'max:500',
            'logo' => 'required|image',
        ]);

        // Create Manga
        $manga = new Manga();
        $manga->title = $request->input('title');
        $manga->author = $request->input('author');
        $manga->genre = $request->input('genre');
        $manga->description = $request->input('description');
        $manga->save();

        // Handle Upload Files
        $file = $request->file('logo');
        // File Extention
        $extension = $file->getClientOriginalExtension();
        // Store File
        $path = $file->storeAs('public/manga/' . $manga->mid, 'logo' . '.' . $extension);

        return redirect('/manga')->with('success', 'Upload Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get all chapter that belong to $id.
        $chapters = Manga::find($id)->chapter;

        return view('manga.show')->with(array(
            'manga' => Manga::find($id),
            'chapters' => $chapters,
            'logo' => glob('storage/manga/' . $id . '/logo.*')[0]
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('manga.edit')->with('manga', Manga::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     * @throws
     */
    public function update(Request $request, $id)
    {
        // Validate the inputs
        $this->validate($request, [
            'title' => 'required|min:3|max:191',
            'author' => 'required|min:3|max:191',
            'genre' => 'required|min:3|max:191',
            'description' => 'required|max:500',
            'logo' => 'image',
        ]);

        // Get Manga
        $manga = Manga::find($id);

        if ($request->hasFile('logo')) {

            // Handle Upload Files
            $file = $request->file('logo');
            // File Extention
            $extension = $file->getClientOriginalExtension();
            // Delete Old One
            Storage::delete('public/manga/' . $manga->mid . '/logo.jpg');
            // Store File
            $path = $file->storeAs('public/manga/' . $manga->mid, 'logo' . '.' . $extension);

        }

        // Update values
        $manga->title = $request->input('title');
        $manga->author = $request->input('author');
        $manga->genre = $request->input('genre');
        $manga->description = $request->input('description');
        $manga->save();

        return redirect('/manga')->with('success', 'Upload Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get a Manga
        $manga = Manga::find($id);
        // Get chapters
        $chapters = $manga->chapter;

        // Delete all chapters
        foreach ($chapters as $chapter)
            // Delete files
            Storage::deleteDirectory('public/manga/' . $manga->mid . '/' . $chapter->cid);
        // Delete
        $chapter->delete();

        // Delete files
        Storage::deleteDirectory('public/manga/' . $manga->mid);
        // Delete
        $manga->delete();

        return redirect('/manga')->with('success', 'Delete Successful');
    }

    /**
     * Display the specified tag.
     *
     * @param string $tag
     * @return \Illuminate\Http\Response
     */
    public function tag($tag)
    {
        $paths = array();
        // Get logo path
        foreach (Manga::all() as $manga) {
            $base = 'storage/manga/' . $manga->mid . '/logo.*';
            $paths[$manga->mid] = glob($base)[0];
        }

        // Get all mangas with specified tag.
        $mangas = Manga::where('genre', 'LIKE', '%' . $tag . '%')->OrderBy('updated_at', 'desc')->paginate(6);

        return view('manga.tag')->with(array(
            'mangas' => $mangas,
            'tag' => $tag,
            'paths' => $paths
        ));
    }
}
