<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // filter the ones that match the filename.*
        $galleries = Gallery::all();
        $paths = array();
        foreach ($galleries as $gallery)
            $paths[$gallery->gid] = Storage::allFiles('public/gallery/' . $gallery->gid)[0];

        return view('gallery.index')->with(array(
            'galleries' => Gallery::OrderBy('updated_at', 'desc')->paginate(6),
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
        return view('gallery.create');
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
            'title' => 'required|min:3|max:191|unique:galleries,title',
            'author' => 'required|min:3|max:191',
            'description' => 'required|max:500',
            'images' => 'required',
            'images.*' => 'mimes:jpeg,jpg,png'
        ]);

        // Create Gallery
        $gallery = new Gallery();
        $gallery->title = $request->input('title');
        $gallery->author = $request->input('author');
        $gallery->description = $request->input('description');
        $gallery->save();

        // Handle Upload Files
        $index = 0;
        foreach ($request->file('images') as $file) {
            // File Extention
            $extension = $file->getClientOriginalExtension();
            // Store File
            $path = $file->storeAs('public/gallery/' . $gallery->gid, $index . '.' . $extension);
            // Counter
            $index++;
        }

        return redirect('/gallery')->with('success', 'Upload Successful');
    }

    function sortCards($collection){
        return $collection->sort(function($a, $b){
            $lengthA = strlen($a);
            $lengthB = strlen($b);
            $tempA = explode('/',$a);
            $tempB = explode('/',$b);
            $valueA = end($tempA)[0];
            $valueB = end($tempB)[0];

            if($lengthA == $lengthB){
                if($valueA == $valueB) return 0;
                return $valueA > $valueB ? 1 : -1;
            }
            return $lengthA > $lengthB ? 1 : -1;
        });
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get a gallery
        $gallery = Gallery::where('gid', $id)->first();
        // Get all files
        $files = Storage::allFiles('public/gallery/' . $gallery->gid);
        // base of path file
        $root = '/storage/gallery/' . $gallery->gid . '/';

        return view('gallery.show')->with(array(
            'root' => $root,
            'files' => $this->sortCards(collect($files))
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
        return view('gallery.edit')->with('gallery', Gallery::where('gid', $id)->first());
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
            'description' => 'required|max:500',
            'images.*' => 'mimes:jpeg,jpg,png'
        ]);


        // Get Gallery
        $gallery = Gallery::find($id);

        // If have files
        if ($request->hasFile('images')) {
            // Delete
            Storage::deleteDirectory('public/gallery/' . $gallery->gid);

            // Handle Upload Files
            $index = 0;
            foreach ($request->file('images') as $file) {
                // File Extention
                $extension = $file->getClientOriginalExtension();
                // Store File
                $path = $file->storeAs('public/gallery/' . $gallery->gid, $index . '.' . $extension);
                // Counter
                $index++;
            }
        }

        // Update values
        $gallery->title = $request->input('title');
        $gallery->author = $request->input('author');
        $gallery->description = $request->input('description');
        $gallery->save();

        return redirect('/gallery')->with('success', 'Upload Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get a gallery
        $gallery = Gallery::find($id);
        // Delete files
        Storage::deleteDirectory('public/gallery/' . $gallery->gid);
        // Delete
        $gallery->delete();

        return redirect('/gallery')->with('success', 'Delete Successful');
    }
}
