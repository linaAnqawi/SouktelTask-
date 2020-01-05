<?php
namespace App\Http\Controllers;
use App\SellerAndBuyerUsers;
use Illuminate\Support\Str;
use App\ticket;
use DB;
use App\Concert;
use Carbon\Carbon;

class concertController extends Controller
{
    public function index()
    {
        $concert = concert::latest()->get;
        return view("index", ['concert' => $concert]);
    }

    public function show($user_id)
    { //show the concert by user
        $concert = Concert::where('user_id', $user_id)->get();
        return view('showAllConcerts', ['concert' => $concert]);
    }
 public function create($user_id)
    {
//    print($user_id);
      return view('concertForm', ['user_id' => $user_id]);
//    $sellerAndBuyerUsers=new SellerAndBuyerUsers();
//    $sellerAndBuyerUsers->email=request('email');
//    $results = sellerAndBuyerController::where('email',$sellerAndBuyerUsers->email)->toSql();
//    $results->id;
//    dd($results);
    }

    public function store($user_id)
    {
        request()->validate([
            'name' => 'required',
            'Date' => 'required',
            'location' => 'required',
            'publishOrUnPublish' => 'required'
        ]);
        $concert = new Concert();
        $concert->user_id =$user_id;
        $concert->name = request('name');
        $concert->Date = request('Date');
        $concert->location = request('location');
        if (request('publishOrUnPublish') === "publish") {
            $concert->publishOrUnPublish = "publish";
        } else {
            $concert->publishOrUnPublish = "unPublish";
        }

        $concert->save();
        return view('ticketsForm', ['concert_id' =>$concert->id]);
//        $ticket=new ticket();
//        $string=Str::random(16);
//        $ticket->id=$string;
//        $ticket->price=request('price');
//        $ticket->name=request('name');
//        $ticket->numberOfTickets=request('numberOfTickets');
//        $ticket->concert_id=$concert->id;
//        $ticket->save();
    }

    public function edit()
    {
    }

    public function update()
    {

    }

    public function destroy()
    {
        $concert = Concert::whereDate('date', '<', Carbon::now()->toDateString())->delete();////delete concert that have a past date

    }

    public function showAllConcert($id)
    {
//           destroy();
        $concert = Concert::whereDate('date', '<', Carbon::now()->toDateString())->delete();////delete concert that have a past date
        $concert = Concert::whereDate('date', '>=', Carbon::now()->toDateString())->get();//show all date still active in the system
        return view('showAllConcertForBuyer', ['concert' => $concert,'id'=>$id]);
    }

    public function buyTickets($concert_id,$user_id)
    {
        $tickets=ticket::where('concert_id',$concert_id)->get();
        return view('showAllTicketsForBuyer',['tickets'=> $tickets,'concert_id' => $concert_id,'user_id'=>$user_id]);///to save all data in the order table
    }
}
