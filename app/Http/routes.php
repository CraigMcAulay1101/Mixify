<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function()
{
  $check = Session::get('session');

  if($check) {
<<<<<<< HEAD
    return "here";
    return redirect()->action('SpotifyApiController@Authorize');
=======
    return redirect()->action('SpotifyApiController@spotifyLogin');
>>>>>>> vue
  } else {
    return view('splash');
  }
});

Route::get('500', function()
{
    abort(500);
});

Route::get('/api', function()
{
  return File::get(public_path() . '/js/splash.json');
});

Route::get('/splash', function(){
  return view('splash');
});

Route::get('/profile/', 'UserController@getProfile');

Route::get('/releases', 'AlbumController@getNewReleases');

Route::post('/auth', 'SpotifyApiController@spotifyLogin');
Route::get('/auth', 'SpotifyApiController@spotifyLogin');
Route::get('/recommended', 'UserController@getRecommended');

Route::post('/addTracks/{data}', 'PlaylistController@addTracks');
Route::get('/addTracks/{data}', 'PlaylistController@addTracks');

Route::get('/createPlaylist', 'PlaylistController@createMixifyPlaylist');

Route::get('/mixify', 'UserController@mixify');
Route::post('/mixify', 'UserController@mixify');

<<<<<<< HEAD
Route::post('/auth', 'SpotifyApiController@Authorize');
Route::get('/recommendations', 'SpotifyApiController@Authorize');

Route::get('/home', function(){
  return view('test');
})
=======
Route::post('/error/{error}', 'UserController@handleError');
Route::get('/error/{error}', 'UserController@handleError');
>>>>>>> vue
