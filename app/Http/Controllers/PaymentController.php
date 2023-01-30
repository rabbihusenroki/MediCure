<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Cart;
use Session;
use Mail;
use App\Mail\InvoiceMail;

class PaymentController extends Controller
{


  //Here is your payment code its not free to use
   public function Payment(Request $request){

    if ($request->payment == 'stripe') {

    return view('pages.payment.stripe',compact('data'));

    }elseif ($request->payment == 'paypal') {
    	# code...
    }elseif ($request->payment == 'ideal') {
    	# code...
    }else{
    	echo "Cash On Delivery";
    }


   }

  public function SuccessList(){

  $order = DB::table('orders')->where('user_id',Auth::id())->where('status',3)->orderBy('id','DESC')->limit(5)->get();

  return view('pages.returnorder',compact('order'));


  }


  public function RequestReturn($id){
    DB::table('orders')->where('id',$id)->update(['return_order'=>1]);
     $notification=array(
                        'messege'=>'Order Request Done',
                        'alert-type'=>'success'
                         );
                       return Redirect()->back()->with($notification);


  }

}
