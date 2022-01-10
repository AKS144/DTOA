<?php

namespace App\Http\Controllers;

//use App\Models\Ticket;
use App\Book;
use Carbon\Carbon;
use App\Models\Ticket;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class TicketsController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
       /*$this->validate($request, [
            'title'     => 'required',
            'category'  => 'required',
            'priority'  => 'required',
            'message'   => 'required'
        ]);*/

        /*    $ticket = new Book();
            $ticket->name       =   $request->name;
            $ticket->email      =   $request->email;
            $ticket->mobile     =   $request->mobile;
            $ticket->ticket_id  =   strtoupper(Str::random(7));
            $ticket->category   =   $request->category;
            $ticket->qty        =   $request->qty;
            $ticket->total      =   $request->total;//($ticket->category * $ticket->qty);
            $ticket->time_slot  =   $request->time_slot;
            $ticket->book_date  =   $request->book_date;
            $ticket->payment_id = $request->payment_id;
            $ticket->save();*/

      //  DB::table('timeslots')->where('book_date','=',$ticket->book_date)->where('time_slot','=',$ticket->time_slot)->decrement('seats',$ticket->qty);
       // return redirect()->back()->with("status", "A ticket with ID: #$ticket->ticket_id has been .");


       $slot = DB::table('timeslots')->select('seats')->where('book_date','=',$request->book_date)
                                       ->where('time_slot','=',$request->time_slot)->first();
            $ticket             =   new Book();
            $ticket->name       =   $request->name;
            $ticket->email      =   $request->email;
            $ticket->mobile     =   $request->mobile;
            $ticket->ticket_id  =   strtoupper(Str::random(7));
            $ticket->time_slot  =   $request->time_slot;
            $ticket->book_date  =   $request->book_date;
            $ticket->category   =   $request->category;
           //$ticket->qty        =   $request->qty;
            $ticket->total      =   $request->total;//($ticket->category * $ticket->qty);

            if($request->category == '70')
            {
                $total_seats = $request->qty*7;
                $ticket->qty = $total_seats;
                if($ticket->qty > $slot->seats)
                {//dd($ticket);
                    return redirect()->back()->with('status','Requested seats are not available');
                }//dd($ticket);
                elseif($ticket->qty <= $slot->seats)
                {
                   //dd($ticket);
                   $ticket->save();
                //    $message = $client->message()->send([
                //     'to' => $ticket->mobile,
                //     'from' => 'DTOA Dudhsagarjeeps',
                //     'text' => "Your booking ID: #$ticket->ticket_id."
                // ]); return $message;
              /*  Nexmo::message()->send([
                    'to' => $ticket->mobile,
                    'from' => 'DTOA',
                    'text' => $ticket->ticket_id
                ]);*/
                   DB::table('timeslots')->where('book_date','=',$request->book_date)
                                  ->where('time_slot','=',$request->time_slot)
                                  ->update([
                                        'seats' => DB::raw('seats-'.$ticket->qty),
                                        'updated_at' => Carbon::now()
                            ]);
                }
            }
            elseif($request->category == '10')
            {
                $ticket->qty = $request->qty;
                if($ticket->qty > $slot->seats)
                {//dd($ticket);
                    return redirect()->back()->with('status','Requested seats are not available');
                }//dd($ticket);
                elseif($ticket->qty <= $slot->seats)
                {
                    $ticket->save();
                    // $message = $client->message()->send([
                    //     'to' => $ticket->mobile,
                    //     'from' => 'DTOA Dudhsagarjeeps',
                    //     'text' => "Your booking ID: #$ticket->ticket_id."
                    // ]); return $message;
                   /* Nexmo::message()->send([
                        'to' => '919766958183',
                        'from' => 'DTOA',
                        'text' => $ticket->ticket_id
                    ]);*/
                    DB::table('timeslots')->where('book_date','=',$request->book_date)
                                      ->where('time_slot','=',$request->time_slot)
                                      ->update([
                                            'seats' => Db::raw('seats-'.$ticket->qty),
                                            'updated_at' => Carbon::now()
                                      ]);//->where('seats','>',0)
                                      //->decrement('seats',$ticket->qty);
                }
            }
           // return view('show')->with('ticket',$ticket);
            return redirect()->action('TicketsController@show', ['ticket' => $ticket]);
    }

    public function show(Book $ticket)
    {
        return view('show')->with('ticket',$ticket);
    }

    public function checkavail($time_slot=0,$book_date=0)
    {
        $check = DB::table("timeslots")
                    ->where("time_slot",$time_slot)
                    ->where("book_date",$book_date)->get();

        return json_encode($check);
    }
}
