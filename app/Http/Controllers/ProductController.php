<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;

class ProductController extends Controller
{
    public function ProductView($id,$product_name){

    	$product = DB::table('products')
    			->join('categories','products.category_id','categories.id')
    			->join('subcategories','products.subcategory_id','subcategories.id')
    			->join('brands','products.brand_id','brands.id')
    			->select('products.*','categories.category_name','subcategories.subcategory_name','brands.brand_name')
    			->where('products.id',$id)
    			->first();
          

        $color = $product->product_color;
        $product_color = explode(',', $color);

         
          $size = $product->product_size;
          $product_size = explode(',', $size);

    	

        $related_product = DB::table('products')
        ->select('products.*')
        ->where('brand_id',$product->brand_id)->where('product_name','!=',$product->product_name)->orderBy('id','desc')->take(10)->get();

        $popular = DB::table('products')
        ->where('id',$id)->where('product_name',$product_name)
        ->increment('product_views');

    	return view('pages.product_details',compact('product','product_color','product_size','related_product'));

    }


  public function AddCart(Request $request, $id){
$product = DB::table('products')->where('id',$id)->first();

  $data = array();

 if ($product->discount_price == NULL) {
 	$data['id'] = $product->id;
 	$data['name'] = $product->product_name;
 	$data['qty'] = $request->qty;
 	$data['price'] = $product->selling_price;
 	$data['weight'] = 1;
 	$data['options']['image'] = $product->image_one;
 	$data['options']['color'] = $request->color;
 	$data['options']['size'] = $request->size;
 	 Cart::add($data);
 	$notification=array(
                        'messege'=>'Product Successfully Added',
                        'alert-type'=>'success'
                         );
                       return Redirect()->back()->with($notification);
 }else{

 	$data['id'] = $product->id;
 	$data['name'] = $product->product_name;
 	$data['qty'] = $request->qty;
 	$data['price'] = $product->discount_price;
 	$data['weight'] = 1;
 	$data['options']['image'] = $product->image_one;
 	$data['options']['color'] = $request->color;
 	$data['options']['size'] = $request->size;
 	 Cart::add($data);
 	 $notification=array(
                        'messege'=>'Product Successfully Added',
                        'alert-type'=>'success'
                         );
                       return Redirect()->back()->with($notification);

    }

      }



      public function ProductsView($id){

       $products = DB::table('products')->where('subcategory_id',$id)->paginate(5);
       $subcategory_name = DB::table('subcategories')->where('id',$id)->select('subcategories.subcategory_name')->first();
       $categorys = DB::table('categories')->get();

        //Popular Product
        $popular = DB::table('products')->where('status',1)->orderBy('product_views','desc')->limit(3)->get();
       $brands = DB::table('products')->where('subcategory_id',$id)->select('brand_id')->groupBy('brand_id')->get();

       return view('pages.all_products',compact('products','categorys','brands','subcategory_name','popular'));


      }





      public function ShopAll(){

        $products = DB::table('products')->where('status',1)->orderBy('product_views','desc')->paginate(21);

        return view('pages.shop',compact('products'));


       }








  public function CategoryView($id){

// $category_all = DB::table('products')
//     ->join('categories','products.category_id','categories.id')
//     ->select('products.*','categories.category_name')
//     ->where('products.category_id',$id)->where('category_id',$id)->paginate(21);


    $category_all =  DB::table('products')->where('category_id',$id)->paginate(21);
    $category_name = DB::table('categories')->where('id',$id)->select('categories.category_name')->first();
    return view('pages.all_category',compact('category_all','category_name'));


  }



}
