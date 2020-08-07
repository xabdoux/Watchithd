<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
/*use Illuminate\Http\Request;*/
#use Request;
use App\Actor;
use App\Ar_server;
use App\En_server;
use App\Fr_server;
use App\Es_server;
use App\Genre;
use App\Genremovies;
use App\Movie;
use App\Rate;
use App\Storyline;
use App\Subscribe;
use Input;
use Validator;
use Redirect;
use Session;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
      public function get_add_movie()
    {

        return view('admin.add-movie');
    }

          public function post_add_movie(Request $request)
    {       
//--------rate infos + getting id---------------------------------
      

      $validator = Validator::make($request->all(), [
        'star' => 'required',
        'title'=>'required|unique:movies',
        'cover'=>'required|mimes:jpeg,bmp,png',#or image
        'trailer'=>'required|active_url',
        'en_link1'=>'active_url',
        'en_link2'=>'active_url',
        'en_link3'=>'active_url',
        'en_link4'=>'active_url',
        'en_link5'=>'active_url',
        'en_link6'=>'active_url',
        'ar_link1'=>'active_url',
        'ar_link2'=>'active_url',
        'ar_link3'=>'active_url',
        'ar_link4'=>'active_url',
        'ar_link5'=>'active_url',
        'ar_link6'=>'active_url',
        'fr_link1'=>'active_url',
        'fr_link2'=>'active_url',
        'fr_link3'=>'active_url',
        'fr_link4'=>'active_url',
        'fr_link5'=>'active_url',
        'fr_link6'=>'active_url',
        'es_link1'=>'active_url',
        'es_link2'=>'active_url',
        'es_link3'=>'active_url',
        'es_link4'=>'active_url',
        'es_link5'=>'active_url',
        'es_link6'=>'active_url',

         
    ]);

    if ($validator->fails()) {
      $request->flash();
        return redirect('/admin/add-movie')
            ->withInput()
            ->withErrors($validator);
    }
       $rate=Rate::create($request->all());                        
       $rate_id = $rate->id;     
       
                                          
                                           
//----------------------------------------------------------------
//-------------------------------------------------------------------------------------------------
      $file = $request->file('cover');
      if ($request->file('cover')->isValid()) {

        $destinationPath = 'public/movies-images/'; // upload path
      $extension = $request->file('cover')->getClientOriginalExtension(); // getting cover extension
      $fileName = time().'.'.$extension; // renameing cover
      $request->file('cover')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
      $finalName=$destinationPath.$fileName;
      
      }
       $movie=Movie::create($request->all());
       $movie_id=$movie->id;
       DB::table('movies')->where('id',$movie_id)->update(['cover' => $finalName]);
       DB::table('movies')->where('id',$movie_id)->update(['rates_id'=>$rate_id]);
 //------------------------------------------------------------------------------------------
       
       Actor::create($request->all())->update(['movies_id' => $movie_id]);
//------------------------------------------------------------------------------
       $genre=Genre::create($request->all());
       $genre_id=$genre->id;
//-------------------------------------------------------------------------       
       DB::table('genremovies')->insert(
    ['genre_id' => $genre_id, 'movie_id' => $movie_id]);
//----------------------------------------------------------------------   
     Storyline::create($request->all())->update(['movies_id'=>$movie_id]); 

//---------------------------------------------------------------------   
       Ar_server::create($request->all())->update(['movies_id' => $movie_id]);
       En_server::create($request->all())->update(['movies_id' => $movie_id]);
       Es_server::create($request->all())->update(['movies_id' => $movie_id]);
       Fr_server::create($request->all())->update(['movies_id' => $movie_id]);

      Session::flash('success','the movie is added successfully');

     return redirect()->back();

    }
    public function arabic_missing_links()
    {
      $mo=DB::table('movies')
      ->join('ar_servers','ar_servers.movies_id','=','movies.id')
      ->where('ar_name1','')
      ->select('cover','title','movies.id')->get();
      $mo=count($mo);
      return var_dump($mo);
    }

    public function all_movies()
    {
       $movies=DB::table('movies')
       ->join('ar_servers','ar_servers.movies_id','=','movies.id')
       ->join('en_servers','en_servers.movies_id','=','movies.id')
       ->join('es_servers','es_servers.movies_id','=','movies.id')
       ->join('fr_servers','fr_servers.movies_id','=','movies.id')
       ->select('movies.id as id','title','cover','ar_name1','en_name1','fr_name1','es_name1')
       ->orderBy('movies.created_at', 'desc')
       ->paginate(20);
       return view('admin.all_movies',compact('movies'));
    }
    public function update_movie_view($id)  
    {

      $movie = DB::table('genremovies')
            ->join('movies', 'genremovies.movie_id', '=', 'movies.id')
            ->join('genres', 'genremovies.genre_id', '=', 'genres.id')
            ->join('actors', 'actors.movies_id', '=', 'movies.id')
            ->join('rates', 'rates.id', '=', 'movies.rates_id')
            ->join('storylines', 'storylines.movies_id', '=', 'movies.id')
            ->join('ar_servers', 'ar_servers.movies_id', '=', 'movies.id')
            ->join('en_servers', 'en_servers.movies_id', '=', 'movies.id')
            ->join('fr_servers', 'fr_servers.movies_id', '=', 'movies.id')
            ->join('es_servers', 'es_servers.movies_id', '=', 'movies.id')
            ->where('movies.id', '=', "$id")
 
            ->select('movies.*', 'genres.*','star','actors.*',"storylines.*",'ar_servers.*','en_servers.*','es_servers.*','fr_servers.*')
            ->first();
      return view('admin.update_movie_view',compact('id','movie'));
    }

    public function update_movie_post(Request $request)
    {
      $id=$request->input('id');
       
      //movie information update
      $movie=Movie::where('id',$id)->first()->fill($request->except(['cover']))->save();
      if ( $request->file('cover')!="") {
        $destinationPath = 'public/movies-images/'; // upload path
        $extension = $request->file('cover')->getClientOriginalExtension(); // getting cover extension
        $fileName = time().'.'.$extension; // renameing cover
        $request->file('cover')->move($destinationPath, $fileName); // uploading file to given path
        $cover=$destinationPath.$fileName;
         Movie::where('id',$id)->update(['cover'=>"$cover"]);
      }
      //movie star update
      if (!empty($request->input('star'))) {
        $id_rate=Movie::where('id',$id)->select('rates_id')->first();
         Rate::where('id',$id_rate->rates_id)->first()->fill($request->all())->save();
      }
      $genre_1=$request->input('genre_1');
      $genre_2=$request->input('genre_2');
      $genre_3=$request->input('genre_3');

      DB::table('genremovies')
      ->join('movies','genremovies.movie_id','=','movies.id')
      ->join('genres','genremovies.genre_id','=','genres.id')
      ->where('movie_id',$id)
      ->update([
        'genre_1'=>"$genre_1",
        'genre_2'=>"$genre_2",
        'genre_3'=>"$genre_3"
        ]);
      //movie storyline update
       
       Storyline::where('movies_id',$id)->firstOrFail()->fill($request->all())->save();
       Actor::where('movies_id',$id)->firstOrFail()->fill($request->all())->save();
       En_server::where('movies_id',$id)->firstOrFail()->fill($request->all())->save();
       Ar_server::where('movies_id',$id)->firstOrFail()->fill($request->all())->save();
       Fr_server::where('movies_id',$id)->firstOrFail()->fill($request->all())->save();
       Es_server::where('movies_id',$id)->firstOrFail()->fill($request->all())->save();

            Session::flash('success','The movie have been updated successfully');
            return  Redirect::to("admin/update/$id");
    }
    public function delete_movie($id, Request $request)
    {
        $movie=Movie::where('id',$id)->delete();
        $actor=Actor::where('movies_id',$id)->delete();
        $ar_servers=Ar_server::where('movies_id',$id)->delete();
        $en_servers=En_server::where('movies_id',$id)->delete();
        $fr_servers=Fr_server::where('movies_id',$id)->delete();
        $es_servers=Es_server::where('movies_id',$id)->delete();
        $g_movies=DB::table('genremovies')->where('movie_id',$id)->delete();
        $storylines=Storyline::where('movies_id',$id)->delete();
        

      $request->session()->flash('success',"The movie has been deleted successfully");
         return redirect()->back();
       
       
    }public function arabic_missing()
    {
      $movies=DB::table('movies')
       ->join('ar_servers','ar_servers.movies_id','=','movies.id')
       ->where('ar_name1',"")
       ->select('movies.id as id','title','cover','ar_name1')
       ->orderBy('movies.created_at', 'desc')
       ->paginate(20);
       return view('admin.arabic_missing_links',compact('movies'));
    }

    public function english_missing()
    {
      $movies=DB::table('movies')
       ->join('en_servers','en_servers.movies_id','=','movies.id')
       ->where('en_name1',"")
       ->select('movies.id as id','title','cover','en_name1')
       ->orderBy('movies.created_at', 'desc')
       ->paginate(20);
       return view('admin.english_missing_links',compact('movies'));
    }

    public function french_missing()
    {
      $movies=DB::table('movies')
       ->join('fr_servers','fr_servers.movies_id','=','movies.id')
       ->where('fr_name1',"")
       ->select('movies.id as id','title','cover','fr_name1')
       ->orderBy('movies.created_at', 'desc')
       ->paginate(20);
       return view('admin.french_missing_links',compact('movies'));
    }

    public function spanish_missing()
    {
      $movies=DB::table('movies')
       ->join('es_servers','es_servers.movies_id','=','movies.id')
       ->where('es_name1',"")
       ->select('movies.id as id','title','cover','es_name1')
       ->orderBy('movies.created_at', 'desc')
       ->paginate(20);
       return view('admin.spanish_missing_links',compact('movies'));
    }

   
}
