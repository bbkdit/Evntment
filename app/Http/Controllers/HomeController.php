<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\experience;
use App\Image;
use App\Decoration;
use App\Banquet;
use App\Bachlore;
use App\Conference;

use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    //7 show experiance data in experiance view----
        public function experianceview(){
            $data = experience::all();
            $image= Image::where('cat_id',1);
            return view('experiance',compact('data','image'));
        }

        public function experiencesingleview($id){
              $exp = experience::find($id);
              $image = \DB::table('images')->where('item_id','=',$id)->where('cat_id','=',1)->get();
              return view('singleview.s_exp',compact('exp','image'));

        }

        public function decorationview(){
            $data = Decoration::all();
            $image= Image::where('cat_id',2);
            return view('decorationpage',compact('data','image'));
        }

        public function decorationsingleview($id){
              $exp = Decoration::find($id);
              $image = \DB::table('images')->where('item_id','=',$id)->where('cat_id','=',2)->get();
              return view('singleview.s_exp',compact('exp','image'));

        }

        public function banquetsview(){
            $data = Banquet::all();
            $image= Image::where('cat_id',5);
            return view('banquet',compact('data','image'));
        }

        public function banquetsingleview($id){
              $exp = Banquet::find($id);
              $image = \DB::table('images')->where('item_id','=',$id)->where('cat_id','=',5)->get();
              return view('singleview.s_exp',compact('exp','image'));

        }

        public function bachloreview(){
            $data = Bachlore::all();
            $image= Image::where('cat_id',6);
            return view('bachlorepage',compact('data','image'));
        }

        public function bachloresingleview($id){
              $exp = Bachlore::find($id);
              $image = \DB::table('images')->where('item_id','=',$id)->where('cat_id','=',6)->get();
              return view('singleview.s_exp',compact('exp','image'));

        }

        public function conferenceview(){
            $data = Conference::all();
            $image = Image::where('cat_id',4);
            return view('confrenceview',compact('data','image'));
        }

        public function conferencesingleview($id){
              $exp = Conference::find($id);
              $image = \DB::table('images')->where('item_id','=',$id)->where('cat_id','=',4)->get();
              return view('singleview.s_exp',compact('exp','image'));

        }

    
}
