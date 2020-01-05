<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    //
//    public function sendEmail($id)
//    {
////        printf($id);
//        $sellerAndBuyerUsers = new SellerAndBuyerUsers();
//        $sellerAndBuyerUsers = SellerAndBuyerUsers::where('id', $id)->first();
//        $email = $sellerAndBuyerUsers->email;
//        $details=['title'=>'cinema',
//        'body'=>'lslkdla'.$email];
//
//     Mail\Mail::to($email)->send(new Mail($details));
////        Mail::raw('its work', function ($message, $email) {
////            $message->to($email)
////                ->subject("hello");
////        });
//    }

}
//Route::get('\sendEmail\{id}', 'orderController@sendEmail');
