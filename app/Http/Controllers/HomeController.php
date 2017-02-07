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
use Illuminate\View\View;

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
    /**
     * Show the Homepage
     */
    public function showHomePage()
    {
        $data = [
            'experience' => [],
            'decoration' => [],
            'banquets' => [],
            'bachelors_party' => [],
        ];
        $dummy_img = 'images/dummy.jpg';
        $experience = experience::all();
        foreach($experience as $exp) {
            $exp_img = \DB::table('images')->where('item_id','=',$exp->id)->where('cat_id','=',1)->get();
            $expData = [
                'id'          => $exp->id,
                'name'        => $exp->name,
                'price'  =>      $exp->price,
                'city'  =>       $exp->city,
                'is_per_head' => $exp->is_per_head,
                'img' => $exp_img
            ];
            if(isset($expData['img']) && count($expData['img']) > 0) {
                $expData['profile_img'] = $expData['img'][0]->file_path;
            }
            else {
                $expData['profile_img'] = $dummy_img;
            }
            $data['experience'][] = $expData;
        }

        $decoration = Decoration::all();
        foreach($decoration as $decor) {
            $decor_img = \DB::table('images')->where('item_id','=',$decor->id)->where('cat_id','=',2)->get();
            $decorData = [
                'id'          => $decor->id,
                'name'        => $decor->name,
                'price'  =>      $decor->price,
                'city'  =>       $decor->city,
                'is_per_head' => $decor->is_perhead,
                'img' => $decor_img
            ];
            if(count($decorData['img']) > 0) {
                $decorData['profile_img'] = $decorData['img'][0]->file_path;
            }
            else {
                $decorData['profile_img'] = $dummy_img;
            }
            $data['decoration'][] = $decorData;
        }

        $banquets = Banquet::all();
        foreach($banquets as $banquet) {
            $banquet_img = \DB::table('images')->where('item_id','=',$banquet->id)->where('cat_id','=',5)->get();
            $banquetData = [
                'id'          => $banquet->id,
                'name'        => $banquet->name,
                'price'  =>      $banquet->price,
                'city'  =>       $banquet->city,
                'is_per_head' => $banquet->is_perhead,
                'img' => $banquet_img
            ];
            if(count($banquetData['img']) > 0) {
                $banquetData['profile_img'] = $banquetData['img'][0]->file_path;
            }
            else {
                $banquetData['profile_img'] = $dummy_img;
            }
            $data['banquets'][] = $banquetData;
        }

        $bachelors_party = Bachlore::all();
        foreach($bachelors_party as $bachelors) {
            $bachelors_img = \DB::table('images')->where('item_id','=',$bachelors->id)->where('cat_id','=',6)->get();
            $bachelorsData = [
                'id'          => $bachelors->id,
                'name'        => $bachelors->name,
                'price'  =>      $bachelors->price,
                'city'  =>       $bachelors->city,
                'is_per_head' => $bachelors->is_perhead,
                'img' => $bachelors_img
            ];
            if(count($bachelorsData['img']) > 0) {
                $bachelorsData['profile_img'] = $bachelorsData['img'][0]->file_path;
            }
            else {
                $banquetData['profile_img'] = $dummy_img;
            }
            $data['bachelors_party'][] = $bachelorsData;
        }
        return view('base.home', ['data' => $data]);
    }

    public function showAboutPage()
    {
        return view('about');
    }
    public function showFAQPage()
    {
        return view('faq');
    }
    public function showTermsPage()
    {
        return view('terms');
    }
    public function showBookingPage()
    {
        return view('book');
    }

    //7 show experiance data in experiance view----
        public function showExperienceList(){
            $data = experience::all();
            $image= Image::where('cat_id',1);
            return view('experiance',compact('data','image'));
        }

        public function showExperienceProfile($id){
              $data = experience::find($id);
              $image = \DB::table('images')->where('item_id','=',$id)->where('cat_id','=',1)->get();
              return view('profile.experience',compact('data','image'));

        }

        public function showDecorationList(){
            $data = Decoration::all();
            $image= Image::where('cat_id',2);
            return view('decorationpage',compact('data','image'));
        }

        public function showDecorationProfile($id){
              $decoration = Decoration::find($id);
              $image = \DB::table('images')->where('item_id','=',$id)->where('cat_id','=',2)->get();
              return view('profile.decoration',compact('decoration','image'));

        }

        public function showBanquetsList(){
            $data = Banquet::all();
            $image= Image::where('cat_id',5);
            return view('banquet',compact('data','image'));
        }

        public function showBanquetsProfile($id){
              $data = Banquet::find($id);
              $image = \DB::table('images')->where('item_id','=',$id)->where('cat_id','=',5)->get();
              return view('profile.banquets',compact('data','image'));

        }

        public function showBachelorsList(){
            $data = Bachlore::all();
            $image= Image::where('cat_id',6);
            return view('bachlorepage',compact('data','image'));
        }

        public function showBachelorsProfile($id){
              $data = Bachlore::find($id);
              $image = \DB::table('images')->where('item_id','=',$id)->where('cat_id','=',6)->get();
              return view('profile.banquets',compact('data','image'));
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
