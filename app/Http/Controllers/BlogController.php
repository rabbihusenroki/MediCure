<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class BlogController extends Controller
{
    public function blog(){
    	$post = DB::table('posts')
		->join('post_category','posts.category_id','post_category.id')
		->select('posts.*','post_category.category_name_en','post_category.category_name_in')
		->orderBy('created_at','desc')->paginate(21);
		//return response()->json($post);
		return view('pages.blog',compact('post'));
    }


  public function English(){
  	Session::get('lang');
  	Session()->forget('lang');
  	Session::put('lang','english');
  	return redirect()->back();

  }

  public function Hindi(){
  	Session::get('lang');
  	Session()->forget('lang');
  	Session::put('lang','hindi');
  	return redirect()->back();

  }

  public function BlogSingle($id){
  	$posts = DB::table('posts')
    ->join('post_category','posts.category_id','post_category.id')
    ->select('posts.*','post_category.category_name_en','post_category.category_name_in')
    ->where('posts.id',$id)
    ->first();
    $setting = DB::table('sitesetting')->first();


    $related_post = DB::table('posts')
        ->join('post_category','posts.category_id','post_category.id')
        ->select('posts.*','post_category.category_name_en','post_category.category_name_in')
        ->where('posts.id','!=',$id)
        ->orderBy('created_at','desc')->take(2)->get();

        $latest_post = DB::table('posts')
        ->join('post_category','posts.category_id','post_category.id')
        ->select('posts.*','post_category.category_name_en','post_category.category_name_in')
        ->where('posts.id','!=',$id)
        ->orderBy('created_at','desc')->take(2)->get();


  	return view('pages.blog_single',compact('posts','setting','related_post','latest_post'));

  }

}
