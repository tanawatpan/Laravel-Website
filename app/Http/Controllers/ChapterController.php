<?php

namespace App\Http\Controllers;

use App\Chapter;
use App\Manga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Arr;

class ChapterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($mid)
    {
        if (Manga::find($mid))
            return view('manga.chapter.create')->with(array(
                'mid' => $mid,
                'manga' => Manga::find($mid)
            ));
        else
            return redirect('/manga');
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
            'no' => 'required',
            'title' => 'required|min:3|max:191',
            'images' => 'required',
            'images.*' => 'mimes:jpeg,jpg,png,gif'
        ]);

        // Get a Manga
        $manga = Manga::find($request->get('mid'));
        // Check exist No.
        $result = Chapter::where('mid', $manga->mid)->where('no', $request->input('no'))->exists();

        // If No. exist, error
        if ($result) {
            return redirect('/ch/' . $manga->mid . '/create')->with(array(
                'mid' => $manga->mid,
                'manga' => Manga::find($manga->mid),
                'error' => 'No. already used!'
            ));
        }

        if (!$manga)
            return redirect('/manga')->with('error', 'Not Found Manga!');

        // Create chapter
        $chapter = new Chapter();
        $chapter->no = $request->input('no');
        $chapter->mid = $manga->mid;
        $chapter->title = $request->input('title');
        $chapter->save();
        $manga->touch();

        // Handle Upload Files
        $index = 0;

        foreach (collect($request->file('images')) as $file) {
            // File Extention

            $extension = $file->getClientOriginalExtension();
            // Store File
            $path = $file->storeAs('public/manga/' . $manga->mid . '/' . $chapter->cid, $index . '.' . $extension);
            // Counter
            $index++;
        }

        return redirect('/manga/' . $manga->mid)->with(array(
            'chapter' => $chapter,
            'manga' => $manga,
            'success' => 'Upload Successful'
        ));
    }

    function sortCards($collection){
        return $collection->sort(function($a, $b){
            $lengthA = strlen($a);
            $lengthB = strlen($b);
            $valueA = explode('.',explode('/',$a)[4])[0];
            $valueB = explode('.',explode('/',$b)[4])[0];

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
    public function show($mid ,$cid)
    {
        // Get a chapter
        $chapter = Chapter::find($cid);
        // Get a Manga
        $manga = Manga::find($mid);
        // Get all files
        $files = Storage::allFiles('public/manga/' . $manga->mid . '/' . $chapter->cid);

        // base of path file
        $root = '/storage/manga/' . $manga->mid . '/' . $chapter->cid . '/';

        return view('manga.chapter.show')->with(array(
            'root' => $root,
            'files' => $this->sortCards(collect($files)),
            'chapters' => $manga->chapter,
            'cid' => $chapter->cid,
            'mid' => $manga->mid
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
        $chapter = Chapter::find($id);
        if ($chapter)
            return view('manga.chapter.edit')->with(array(
                'chapter' => $chapter,
                'manga' => $chapter->manga
            ));
        else
            return redirect('/manga');
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
            'no' => 'required',
            'title' => 'required|min:3|max:191',
            'images.*' => 'mimes:jpeg,jpg,png,gif'
        ]);

        // Get a Chapter
        $chapter = Chapter::find($id);
        // Get a Manga
        $manga = $chapter->manga;
        // Check exist No.
        $result = Chapter::where('mid', $chapter->mid)->where('no', $request->input('no'))->exists();

        // If No. exist, error
        if ($result && $request->input('no') != $chapter->no) {
            return redirect('ch/edit/' . $id)->with(array(
                'chapter' => $chapter,
                'manga' => $chapter->manga,
                'error' => 'No. already used!'
            ));
        }

        // Update values

        $chapter->no = $request->input('no');
        $chapter->title = $request->input('title');
        $chapter->save();
        $manga->touch();

        // If have files
        if ($request->hasFile('images')) {
            // Delete
            Storage::deleteDirectory('public/manga/' . $manga->mid . '/' . $chapter->cid);

            // Handle Upload Files
            $index = 0;
            foreach ($request->file('images') as $file) {
                // File Extention
                $extension = $file->getClientOriginalExtension();
                // Store File
                $path = $file->storeAs('public/manga/' . $manga->mid . '/' . $chapter->cid, $index . '.' . $extension);
                // Counter
                $index++;
            }
        }

        return redirect('/manga/' . $manga->mid)->with(array(
            'chapter' => $chapter,
            'manga' => $manga,
            'success' => 'Upload Successful'
        ));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get a Chapter
        $chapter = Chapter::find($id);
        // Get a Manga
        $manga = $chapter->manga;
        // Delete files
        Storage::deleteDirectory('public/manga/' . $manga->mid . '/' . $chapter->cid);
        // Delete
        $chapter->delete();

        return redirect('/manga/' . $manga->mid)->with('success', 'Delete Successful');
    }

}
