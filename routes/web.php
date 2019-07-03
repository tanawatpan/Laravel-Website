<?php
// Model -> Controller -> View  MVC
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PageController@index');

Route::get('/about', function () {
    return view('about');
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/dashboard', 'DashboardController@index');

/*
|
|--------------------------------------------------------------------------
| Manga
|--------------------------------------------------------------------------
|
*/

// tag
Route::get('/manga/genres/{tag}', 'MangaController@tag')->name('manga.tag');

/*
|
|--------------------------------------------------------------------------
| Chapter
|--------------------------------------------------------------------------
|
*/

// Create Chapter
Route::group(array('prefix' => 'ch/{manga}'), function () {
    Route::get('create', 'ChapterController@create')->name('chapter.create');
    Route::post('/', 'ChapterController@store')->name('chapter.store');
});

// Edit Chapter
Route::group(array('prefix' => 'ch/edit'), function () {
    Route::get('{cid}', 'ChapterController@edit')->name('chapter.edit');
    Route::match(['put', 'patch'], '{cid}', 'ChapterController@update')->name('chapter.update');
});

// Delete Chapter
Route::match(['delete'], 'ch/{cid}', 'ChapterController@destroy')->name('chapter.destroy');
// Show
Route::get('/manga/{mid}/{cid}', 'ChapterController@show')->where('cid', '[0-9]+')->name('chapter.show');

/*
|
|--------------------------------------------------------------------------
| resource
|--------------------------------------------------------------------------
|
*/

Auth::routes();

Route::resource('gallery', 'GalleryController');
Route::resource('manga', 'MangaController');
