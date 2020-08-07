<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => ['web']], function () {
     Route::get('/', 'MoviesController@detect' );

Route::get('movies','MoviesController@detect');

Route::get('movies/{lang}','MoviesController@movies');
Route::get('movies/tag/{lang}/{actor}','MoviesController@showactor');

Route::get('news','MoviesController@news');
Route::get('orders','MoviesController@getorders');
Route::post('orders','MoviesController@postorders');
Route::get('contact','MoviesController@getcontact');
Route::post('contact','MoviesController@postcontact');
Route::get('privacy-policy','MoviesController@privacy_policy');
Route::get('help','MoviesController@help');
Route::get('collaborate','MoviesController@collaborate');
Route::get('about','MoviesController@about');
Route::post('movies/subscribe','MoviesController@subscribe');




 



Route::get('movies/{lang}/list','MoviesController@movieslists');
Route::post('movies/{lang}/searchmovies','MoviesController@searchmovies');


Route::get('movies/{lang}/categorieorder/{categorie}','MoviesController@categorieorder');
Route::get('movies/{lang}/yearorder/{year}','MoviesController@yearorder');
Route::get('movies/{lang}/alphabetical/{letter}','MoviesController@alphabetical');
Route::get('movies/{lang}/numberorder/','MoviesController@numberorder');
Route::get('movies/{lang}/{id}/{title}','MoviesController@showmovies');

});




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

App::singleton('test',function(){
	$m=DB::table('movies')
        ->join('ar_servers','ar_servers.movies_id','=','movies.id')
        ->where('ar_name1','')
        ->select('cover','title','movies.id')->get();
        $m=count($m);
        $m1=DB::table('movies')
        ->join('en_servers','en_servers.movies_id','=','movies.id')
        ->where('en_name1','')
        ->select('cover','title','movies.id')->get();
        $m1=count($m1);
        $m2=DB::table('movies')
        ->join('fr_servers','fr_servers.movies_id','=','movies.id')
        ->where('fr_name1','')
        ->select('cover','title','movies.id')->get();
        $m2=count($m2);
        $m3=DB::table('movies')
        ->join('es_servers','es_servers.movies_id','=','movies.id')
        ->where('es_name1','')
        ->select('cover','title','movies.id')->get();
        $m3=count($m3);
        $mf=$m+$m1+$m2+$m3;
        return compact('m','m1','m2','m3','mf');
});


    
    Route::group(['prefix'=>'admin'],function () {

    	Route::get('/home', 'HomeController@index');
	    Route::get('/add-movie', 'HomeController@get_add_movie');
	    Route::post('/add-movie', 'HomeController@post_add_movie');
	    Route::get('/arabic-missing-links', 'HomeController@arabic_missing_links');
	    Route::get('/all-movies', 'HomeController@all_movies');
        Route::get('/update/{id}', 'HomeController@update_movie_view');
        Route::post('/update-movie/', 'HomeController@update_movie_post');
        Route::get('/delete-movie/{id}', 'HomeController@delete_movie');
        Route::get('/arabic-missing-links/', 'HomeController@arabic_missing');
        Route::get('/spanish-missing-links/', 'HomeController@spanish_missing');
        Route::get('/french-missing-links/', 'HomeController@french_missing');
	    Route::get('/english-missing-links/', 'HomeController@english_missing');

        

    });
    


});
