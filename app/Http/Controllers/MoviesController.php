<?php

namespace App\Http\Controllers;

 
use App\Http\Requests;
use App\Http\Controllers\Controller;
/*use Request;*/
use Illuminate\Http\Request;
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
use App;

class MoviesController extends Controller
{
    //
    public function detect()
    {
            $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
            
            switch ($lang){
        case "fr":
            //echo "PAGE FR";
           return Redirect::to('movies/fr');
            break;
        case "ar":
            //echo "PAGE IT";
            return Redirect::to('movies/ar');
            break;
        case "en":
            //echo "PAGE EN";
            return Redirect::to('movies/en');
            break;
        case "es":
            //echo "PAGE EN";
            return Redirect::to('movies/es');
            break;         

        default:
            //echo "PAGE EN - Setting Default";
            return Redirect::to('movies/en');//include EN in all other cases of different lang detection
            break;
        }
    }
    public function movies($lang)
    {
        if ($lang =='en' or $lang=='ar' or $lang =='fr' or $lang=='es') {
             App::setLocale($lang);
        }else return view('errors.404');
         
    	$films = DB::table('genremovies')
            ->join('movies', 'genremovies.movie_id', '=', 'movies.id')
            ->join('genres', 'genremovies.genre_id', '=', 'genres.id')
            ->join('rates', 'rates.id', '=', 'movies.rates_id')
            ->select('movies.id as idd','movies.*', 'genres.*','star')
            ->orderBy('movies.created_at', 'desc')
            ->paginate(20);
            $filmslider = DB::table('movies')->select('cover','id','title')->limit(15)->get();
            return view('movies.movies',compact('films','lang','filmslider'));
    }

    public function alphabetical($lang,$letter)
    {
        if ($lang =='en' or $lang=='ar' or $lang =='fr' or $lang=='es') {
             App::setLocale($lang);
        }else return view('errors.404');
        $alphabets = DB::table('genremovies')
             ->join('movies', 'genremovies.movie_id', '=', 'movies.id')
            ->join('genres', 'genremovies.genre_id', '=', 'genres.id')
            ->join('rates', 'rates.id', '=', 'movies.rates_id')
            ->where('title', 'LIKE', "$letter%")
            ->select('movies.id as idd','movies.*', 'genres.*','star')
            ->orderBy('movies.created_at', 'desc')
            ->paginate(20);
            $filmslider = DB::table('movies')->select('cover','id','title')->limit(15)->get();
            return view('movies.alphabetical-order',compact('lang','filmslider','alphabets','letter'));
    }

    public function numberorder($lang)
    {
       if ($lang =='en' or $lang=='ar' or $lang =='fr' or $lang=='es') {
             App::setLocale($lang);
        }else return view('errors.404');
        $numberorder = DB::table('genremovies')
             ->join('movies', 'genremovies.movie_id', '=', 'movies.id')
            ->join('genres', 'genremovies.genre_id', '=', 'genres.id')
            ->join('rates', 'rates.id', '=', 'movies.rates_id')
            ->where('title', 'LIKE', '0%')->orwhere('title', 'LIKE', '1%')->orwhere('title', 'LIKE', '2%')->orwhere('title', 'LIKE', '3%')
            ->orwhere('title', 'LIKE', '4%')->orwhere('title', 'LIKE', '5%')->orwhere('title', 'LIKE', '6%')
            ->orwhere('title', 'LIKE', '7%')->orwhere('title', 'LIKE', '8%')->orwhere('title', 'LIKE', '9%')
             ->select('movies.id as idd','movies.*', 'genres.*','star')
            ->orderBy('movies.created_at', 'desc')
            ->paginate(20);
            $filmslider = DB::table('movies')->select('cover','id','title')->limit(15)->get();
            return view('movies.numberorder',compact('lang','filmslider','numberorder'));
    }

    public function categorieorder($lang,$categorie)
    {
          
       if ($lang =='en' or $lang=='ar' or $lang =='fr' or $lang=='es') {
             App::setLocale($lang);
        }else return view('errors.404');
        $categorieorder = DB::table('genremovies')
            ->join('movies', 'genremovies.movie_id', '=', 'movies.id')
            ->join('genres', 'genremovies.genre_id', '=', 'genres.id')
            ->join('rates', 'rates.id', '=', 'movies.rates_id')
            ->where('genre_1', 'LIKE', "%$categorie%")->orwhere('genre_2', 'LIKE', "%$categorie%")
            ->orwhere('genre_3', 'LIKE', "%$categorie%")

            ->select('movies.id as idd','movies.*', 'genres.*','star')
            ->paginate(20);
            $filmslider = DB::table('movies')->select('cover','id','title')->limit(15)->get();
            return view('movies.categorieorder',compact('lang','filmslider','categorieorder','categorie'));
    
             
        }
        public function yearorder($lang,$year)
        {
            if ($lang =='en' or $lang=='ar' or $lang =='fr' or $lang=='es') {
             App::setLocale($lang);
        }else return view('errors.404');
            $yearorder = DB::table('genremovies')
            ->join('movies', 'genremovies.movie_id', '=', 'movies.id')
            ->join('genres', 'genremovies.genre_id', '=', 'genres.id')
            ->join('rates', 'rates.id', '=', 'movies.rates_id')
            ->where('year', '=', "$year")
            ->select('movies.id as idd','movies.*', 'genres.*','star')
            ->paginate(20);
            $filmslider = DB::table('movies')->select('cover','id','title')->limit(15)->get();
            return view('movies.yearorder',compact('lang','filmslider','yearorder','year'));
        }

        public function movieslists($lang)
        {              
            if ($lang =='en' or $lang=='ar' or $lang =='fr' or $lang=='es') {
             App::setLocale($lang);
        }else return view('errors.404');
             $filmslider = DB::table('movies')->select('cover','id','title')->limit(15)->get();

             $lists = DB::table('movies')->select('title','id','year')->paginate(180);
             return view('movies.lists',compact('lang','filmslider','lists'));
        }
        public function searchmovies(Request $request,$lang)
        {   
            if ($lang =='en' or $lang=='ar' or $lang =='fr' or $lang=='es') {
             App::setLocale($lang);
        }else return view('errors.404');
            $lang=$request->input('lang');
            $keyword=$request->input('search');
            $search = DB::table('genremovies')
            ->join('movies', 'genremovies.movie_id', '=', 'movies.id')
            ->join('genres', 'genremovies.genre_id', '=', 'genres.id')
            ->join('rates', 'rates.id', '=', 'movies.rates_id')
            ->where('title', 'LIKE', "$keyword%")
            ->orwhere('title', 'LIKE', "%$keyword")->orwhere('title', 'LIKE', "%$keyword%")

            ->select('movies.id as idd','movies.*', 'genres.*','star')
            ->paginate(20);
            $filmslider = DB::table('movies')->select('cover','id','title')->limit(15)->get();

             return view('movies.search',compact('lang','search','filmslider','keyword'));
        }
        public function showmovies($lang,$id,$title)
        {
            if ($lang =='en' or $lang=='ar' or $lang =='fr' or $lang=='es') {
             App::setLocale($lang);
        }else return view('errors.404');
            $next=Movie::where('id','>',"$id")->orderby('created_at','desc')
            ->select('id','title')
            ->first();
            $prev=Movie::where('id','<',"$id")->orderby('created_at','desc')
            ->select('id','title')
            ->first();
            $movie = DB::table('genremovies')
            ->join('movies', 'genremovies.movie_id', '=', 'movies.id')
            ->join('genres', 'genremovies.genre_id', '=', 'genres.id')
            ->join('actors', 'actors.movies_id', '=', 'movies.id')
            ->join('rates', 'rates.id', '=', 'movies.rates_id')
            ->join('storylines', 'storylines.movies_id', '=', 'movies.id')
            ->join("$lang"."_servers", "$lang"."_servers.movies_id", '=', 'movies.id')
            ->where('movies.id', '=', "$id")
            ->select('movies.id as idd','movies.*', 'genres.*','star','actors.*',"storylines.$lang as storyline","$lang"."_servers.*")
            ->first();
            $related=DB::table('genremovies')
            ->join('movies', 'genremovies.movie_id', '=', 'movies.id')
            ->join('genres', 'genremovies.genre_id', '=', 'genres.id')
            ->where('genre_1',$movie->genre_1)->orwhere('genre_1',$movie->genre_2)->orwhere('genre_1',$movie->genre_3)
            ->orwhere('genre_2',$movie->genre_1)->orwhere('genre_2',$movie->genre_2)->orwhere('genre_2',$movie->genre_3)->where('movies.id','!=', $id)->select('movies.id as idd','movies.*')
            ->limit(9)->get();
 
             return view('movies.watch-movie',compact('related','lang','movie','id','next','prev'));
        }
        public function showactor($lang,$actor)
        {   
            if ($lang =='en' or $lang=='ar' or $lang =='fr' or $lang=='es') {
             App::setLocale($lang);
        }else return view('errors.404');
           $movies = DB::table('genremovies')
            ->join('movies', 'genremovies.movie_id', '=', 'movies.id')
            ->join('genres', 'genremovies.genre_id', '=', 'genres.id')
            ->join('rates', 'rates.id', '=', 'movies.rates_id')
            ->join('actors','actors.movies_id','=','movies.id')
            ->where('actor_name1', 'LIKE', "%$actor%")
            ->orwhere('actor_name2', 'LIKE', "%$actor%")
            ->orwhere('actor_name3', 'LIKE', "%$actor%")
            ->orwhere('actor_name4', 'LIKE', "%$actor%")
            ->orwhere('actor_name5', 'LIKE', "%$actor%")
            ->select('movies.id as idd','movies.*', 'genres.*','star')
            ->paginate(20);
            $filmslider = DB::table('movies')->select('cover','id','title')->limit(15)->get();
            return view('movies.showactor',compact('lang','movies','actor','filmslider'));
        }
        public function news()
        {
            return view('movies.news');
        }
                public function getorders()
        {
              $lang=App::getLocale();
              $orders=true;
            return view('movies.orders',compact('lang','orders'));
        }
        public function postorders(Request $request)
        {   
                $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email_orders'=>'required',
                'subject'=>'required',
                'description'=>'required',
                ]);

            if ($validator->fails()) {
              $request->flash();
               return redirect()->back()->withErrors($validator)->withInput();
            }

            $request->session()->flash('success_orders','Your order has been send successfuly');
            return redirect()->back();
        }
                public function getcontact()
        {
              $lang=App::getLocale();
              $contact=true;
            return view('movies.contact',compact('lang','contact'));
        }

                public function postcontact(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email_contact'=>'required',
                'subject'=>'required',
                'message'=>'required',
                ]);

            if ($validator->fails()) {
              $request->flash();
               return redirect()->back()->withErrors($validator)->withInput();
            }

            $request->session()->flash('success_contact','Your message has been send successfuly');
            return redirect()->back();
           
        }

        public function privacy_policy()
        {
            $lang=App::getLocale();
              $privacy=true;
            return view('movies.p_policy',compact('privacy','lang'));
        }
        public function help()
        {
            $lang=App::getLocale();
              $help=true;
                return view('movies.help',compact('help','lang'));
        }
        public function collaborate()
        {
            $lang=App::getLocale();
              $collaborate=true;
                return view('movies.collaborate',compact('lang','collaborate'));
        }
        public function about()
        {
            $lang=App::getLocale();
              $about=true;
                return view('movies.about',compact('lang','about'));
        }
        public function subscribe(Request $request)
        {
            $validator = Validator::make($request->all(), [
        'email' => 'required|email|unique:subscribes',
    ]);

    if ($validator->fails()) {
      $request->flash();
      return redirect()->back()->withErrors($validator)->withInput();
    
    }
    Subscribe::create($request->all());
     Session::flash('success','the email is added successfully');

     return redirect()->back();
        }

       
}