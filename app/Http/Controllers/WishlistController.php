<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
   public function addWishlist($id){

   //Here is your payment code its not free to use

   }



   public function wishlistDelete($id){
      $wishlist = DB::table('wishlists')->where('product_id', $id)->delete();
      $notification=array(
        'messege'=>'Status Code Invalid',
        'alert-type'=>'success'
         );
       return Redirect()->back()->with($notification);
  }










}
