<?php

namespace App\Http\Controllers;
use App\SellerAndBuyerUsers;
use Illuminate\Support\Str;
use App\ticket;
use DB;
use Illuminate\Http\Request;

class TicketController extends Controller
{


    public function index()
        {
//            $concert = concert::latest()->get;
//            return view("index", ['concert' => $concert]);
        }

        public function show($concert_id){
            $tickets=ticket::where('concert_id',$concert_id)->get();
            return view('showAllTickets',['tickets'=> $tickets]);
    }
//            $ticket=new ticket();
//            $ticket->concert_id=$concert_id;
//            $ticket = TicketController::where('concert_id',$ticket->concert_id)->toSql();
//            return view('showAllTickets', ['ticket' =>  $ticket]);}

        public function create($user_id)
        {
    //    print($user_id);
         //   return view('concertForm', ['user_id' => $user_id]);
    //    $sellerAndBuyerUsers=new SellerAndBuyerUsers();
    //    $sellerAndBuyerUsers->email=request('email');
    //    $results = sellerAndBuyerController::where('email',$sellerAndBuyerUsers->email)->toSql();
    //    $results->id;
    //    dd($results);
        }

        public function store($concert_id)
        {
            $ticket=new ticket();
            $string=Str::random(16);
            $ticket->id=$string;
            $ticket->price=request('price');
            $ticket->name=request('name');
            $ticket->numberOfTickets=request('numberOfTickets');
            $ticket->concert_id=$concert_id;
            $ticket->save();
            if(request('addAntherTickets')==="I would like to add another type"){
                return view('ticketsForm', ['concert_id' =>$ticket->concert_id]);
            }
            else{
                printf("you are creat concert successfully");
            }
        }

        public function edit()
        {
        }

        public function update($concert_id)
        {


        }

        public function editTickets($tickets)
        {
            return view('updateConcert',['tickets'=> $tickets]);
        }
        public function editPriceOfTickets($tickets)
        {
            $price=request('price');
            $affectedRows = ticket::where('id',$tickets)->update(array('price'=> $price));
        }



}

