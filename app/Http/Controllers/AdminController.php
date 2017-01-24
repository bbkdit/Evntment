<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ValidRequest;
use App\experience;
use App\Image;
use App\Expimage;
use App\Decoration;
use App\Banquet;
use App\Bachlore;
use App\Conference;

use DB;

class AdminController extends Controller
{

	public function __construct(){
				$this->middleware('auth');
		}
		
		public function index(){
			$category = \DB::table('categories')->get();
			$experiance = experience::all();			
			return view('admin.index', compact('category','experiance'));
		}

		public function expform($id){
			return view('admin.expform');
		}

          // save experience data into database--
		public function store(ValidRequest $request){

                     $expnce = new experience;
					 $expnce->name = $request->name;
					 $expnce->min_price = $request->min_price;
					 $expnce->max_price = $request->max_price;
					 $expnce->price = $request->price;
					 $expnce->is_negotiable = $request->is_neg;
					 $expnce->description = $request->desc;
					 $expnce->city = "Banglore";
					 $expnce->area = $request->area;
					 $expnce->slug_n = str_slug($request->name);
					 $expnce->cat_id = $request->cat_id;
					 $expnce->save();
					
					return back()->with('success', 'Data inserted sucessfily!');
					
		}

         // show required form by category id---
		public function showform($id){ 
            $experience = experience::all();
            $decoration = Decoration::all();
            $banquet = Banquet::all();
            $bachlore = Bachlore::all();
            $confrence = Conference::all();
			return view('admin.form', compact('id','experience','decoration','banquet','bachlore','confrence'));

		}
		public function deleteRecord($c_id , $id){
			if($c_id==1){
				$exp = experience::find($id);
				$exp->delete();
				Image::where('item_id','=',$id)->where('cat_id','=',$c_id)->delete();
			}elseif($c_id==2){
				$exp = Decoration::find($id);
				$exp->delete();
				Image::where('item_id','=',$id)->where('cat_id','=',$c_id)->delete();
			}elseif($c_id==3){
				$exp = Rooms::find($id);
				$exp->delete();
				Image::where('item_id','=',$id)->where('cat_id','=',$c_id)->delete();
			}elseif($c_id==4){
				$exp = Confrence::find($id);
				$exp->delete();
				Image::where('item_id','=',$id)->where('cat_id','=',$c_id)->delete();
			}elseif($c_id==5){
				$exp = Banquet::find($id);
				$exp->delete();
				Image::where('item_id','=',$id)->where('cat_id','=',$c_id)->delete();
			}elseif($c_id==6){
				$exp = Bachlore::find($id);
				$exp->delete();
				Image::where('item_id','=',$id)->where('cat_id','=',$c_id)->delete();
			}else{
				return back()->with('success', 'Data deleted sucessfily!');
			}
		        return back()->with('success', 'Data deleted sucessfily!');
		}
         
         // show image form ie dropzone.js----
		public function imgform($c_id , $id){
			if($c_id==1){
				$exp = experience::find($id);
			}elseif($c_id==2){
				$exp = Decoration::find($id);
			}elseif($c_id==3){
				$exp = Rooms::find($id);
			}elseif($c_id==4){
				$exp = Conference::find($id);
			}elseif($c_id==5){
				$exp = Banquet::find($id);
			}elseif($c_id==6){
				$exp = Bachlore::find($id);
			}else{
				print_r($c_id);
			}
			return view('admin.addimg',compact('exp','c_id'));
		}
		
		// store images---
		public function image(Request $request){

			$file =  $request->file('file');
			$file_count = count($file);// start count how many uploaded
			$destinationPath = 'images'; // upload folder in public directory
			$filename = $file->getClientOriginalName();
			$upload_success = $file->move($destinationPath, $filename);

						// save into database
			$extension = $file->getClientOriginalExtension();
			$entry = new Image();
			$entry->mime = $file->getClientMimeType();
			$entry->original_filename = $filename;
			$entry->filename = $file->getFilename().'.'.$extension;
			$entry->file_path = 'images/'. $filename;
			$entry->cat_id = $request->cat_id;
			$entry->item_id = $request->item_id;
			$entry->save();
	
		}

	       //Decoration part

		public function storeDecoration(ValidRequest $request){    
                     
                     $expnce = new Decoration;
					 $expnce->name = $request->name;
					 $expnce->min_price = $request->min_price;
					 $expnce->max_price = $request->max_price;
					 $expnce->price = $request->price;
					 $expnce->is_negotiable = $request->is_neg;
					 $expnce->description = $request->desc;
					 $expnce->city = "Banglore";
					 $expnce->area = $request->area;
					 $expnce->slug_n = str_slug($request->name);
					 $expnce->cat_id = $request->cat_id;
					 $expnce->save();
					
					return back()->with('success', 'Data inserted sucessfily!');
					
		}

		//Banquet part

		public function storeBanquets(ValidRequest $request){

			         $expnce = new Banquet;
					 $expnce->name = $request->name;
					 $expnce->min_price = $request->min_price;
					 $expnce->max_price = $request->max_price;
					 $expnce->price = $request->price;
					 $expnce->is_negotiable = $request->is_neg;
					 $expnce->is_perhead = $request->is_perhead;
					 $expnce->description = $request->desc;
					 $expnce->city = "Banglore";
					 $expnce->area = $request->area;
					 $expnce->duration = $request->duration;
					 $expnce->booking_term = $request->booking_terms;
					 $expnce->min_capacity = $request->min_capacity;
					 $expnce->max_capacity = $request->max_capacity;
					 $expnce->slug_n = str_slug($request->name);
					 $expnce->cat_id = $request->cat_id;
					 $expnce->save();
					
					return back()->with('success', 'Data inserted sucessfily!');
		}

		// Bachlore part

		public function storeBachlore(ValidRequest $request){

			         $expnce = new Bachlore;
					 $expnce->name = $request->name;
					 $expnce->min_price = $request->min_price;
					 $expnce->max_price = $request->max_price;
					 $expnce->price = $request->price;
					 $expnce->is_negotiable = $request->is_neg;
					 $expnce->is_perhead = $request->is_perhead;
					 $expnce->description = $request->desc;
					 $expnce->city = "Banglore";
					 $expnce->area = $request->area;
					 $expnce->duration = $request->duration;
					 $expnce->booking_term = $request->booking_terms;
					 $expnce->min_capacity = $request->min_capacity;
					 $expnce->max_capacity = $request->max_capacity;
					 $expnce->slug_n = str_slug($request->name);
					 $expnce->cat_id = $request->cat_id;
					 $expnce->save();
					
					return back()->with('success', 'Data inserted sucessfily!');
		}


		public function storeConference(ValidRequest $request){

			         $expnce = new Conference;
					 $expnce->name = $request->name;
					 $expnce->min_price = $request->min_price;
					 $expnce->max_price = $request->max_price;
					 $expnce->price = $request->price;
					 $expnce->is_negotiable = $request->is_neg;
					// $expnce->is_perhead = $request->is_perhead;
					 $expnce->description = $request->desc;
					 $expnce->city = "Banglore";
					 $expnce->area = $request->area;
					 $expnce->duration = $request->duration;
					 $expnce->booking_term = $request->booking_terms;
					 $expnce->min_capacity = $request->min_capacity;
					 $expnce->max_capacity = $request->max_capacity;
					 $expnce->slug_n = str_slug($request->name);
					 $expnce->cat_id = $request->cat_id;
					 $expnce->save();
					
					return back()->with('success', 'Data inserted sucessfily!');
		}


}
