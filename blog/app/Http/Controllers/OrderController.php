<?php

namespace App\Http\Controllers;

use App\Mail\Mail;
use App\order;
use App\ticket;
use Illuminate\Http\Request;
use App\Mail\SendMailable;
use App\SellerAndBuyerUsers;
class OrderController extends Controller
{
    //
    public function orderStore($ticket_id,$concert_id,$user_id){
//        print($ticket_id);
//        print ($concert_id);
//        print($user_id);
          $order = new order();
          $order->ticket_id=$ticket_id;
          $order->concert_id=$concert_id;
          $order->user_id=$user_id;
          $order->numberOfTickets=request('totalNumberOfTickets');
         $numberOfTicket=new ticket();
         $numberOfTicket= ticket::where('id', $ticket_id)->first();
         if(($numberOfTicket->numberOfTickets)>=($order->numberOfTickets)){
            $order->save();
             //return $this->sendEmail($order->user_id);
         }else{
             printf("the number of tickets you order more than concert tickets");
         }
      }

      public function userOrder($user_id){
          $order = order::where('user_id', $user_id)->get();
         return view('showAllConcertsForBuyer2', ['order' => $order]);

      }
    public function sendEmail()
    {
//        printf($id);
        $sellerAndBuyerUsers = new SellerAndBuyerUsers();
//        $sellerAndBuyerUsers = SellerAndBuyerUsers::where('id', $id)->first();
//        $email = $sellerAndBuyerUsers->email;
//        $details=['title'=>'cinema',
//            'body'=>'lslkdla'.$email];
//
//        Mail\Mail::to($email)->send(new Mail($details));
////        Mail::raw('its work', function ($message, $email) {
//            $message->to($email)
//                ->subject("hello");
//        });
//        \Mail::send('emails.mail', array('name' => 'Elvis'), function($message) {
//            $message->to('edautovic99@gmail.com', 'Elvis')
//                ->subject('edautovic99@gmail.com');
//        });
//        return 'Email was sent';
    }





//    public function mail()
//    {
//        $name = 'Krunal';
//        Mail::to('krunal@appdividend.com')->send(new SendMailable($name));
//
//        return 'Email was sent';
//    }
}


//      }
////}
