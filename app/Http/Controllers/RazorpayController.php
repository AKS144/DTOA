<?php

namespace App\Http\Controllers;

use App\Book;

use Redirect;
use App\Timeslot;
use Carbon\Carbon;
use Razorpay\Api\Api;
use App\Models\Ticket;
use App\Models\Payment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session as session;

class RazorpayController extends Controller
{
    public function payWithRazorpay(Request $request)
    {

        return view('user.index');
    }

    public function payment(Request $request)
    {
      /*  $this->validate($request, [
            'name'       => 'required|regex:/^[a-zA-ZÑñ\s]+$/|max:120',
            'time_slot'  => 'required',
            'email'      => 'required|email|max:120',
            'category'   => 'required',
            'mobile'     => 'required|digits:10|numeric',
        ]);
*/
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
            $ticket->total      =   $request->total;

            if($request->category == '70')
            {
                $total_seats = $request->qty*7;
                $ticket->qty = $total_seats;
                if($ticket->qty > $slot->seats)
                {
                    return redirect()->back()->with('status','Requested seats are not available');
                }
                elseif($ticket->qty <= $slot->seats)
                {
                   $ticket->save();

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
                {
                    return redirect()->back()->with('status','Requested seats are not available');
                }
                elseif($ticket->qty <= $slot->seats)
                {
                    $ticket->save();
                    DB::table('timeslots')->where('book_date','=',$request->book_date)
                                      ->where('time_slot','=',$request->time_slot)
                                      ->update([
                                            'seats' => Db::raw('seats-'.$ticket->qty),
                                            'updated_at' => Carbon::now()
                                    ]);
                }
            }

        $ticket_ID = $ticket->ticket_id;
        //$ticket_email = $ticket->email;



        $input = $request->all();

        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));

        $payment = $api->payment->fetch($request->razorpay_payment_id);

        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {

                $payment->capture(array('amount'=>$payment['amount']));

            } catch (\Exception $e) {
                return  $e->getMessage();
                session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }

        $payInfo = [
                        'name'       =>   $request->name,
                        'email'      =>   $request->email,
                        'mobile'     =>   $request->mobile,
                        'ticket_id'  =>   $ticket_ID,
                        'category'   =>   $request->category,
                        'qty'        =>   $request->qty,
                        'total'      =>   $request->total,
                        'time_slot'  =>   $request->time_slot,
                        'book_date'  =>   $request->book_date,
                        'razorpay_payment_id' => $request->razorpay_payment_id,
                ];

        Ticket::insertGetId($payInfo);
        DB::table('books')->where('ticket_id','=',$ticket_ID)->update(['payment'=> 'PAID','updated_at'=> Carbon::now()]);
        // DB::table('books')->select('payment')->where('ticket_id','=',$ticket_ID)->get();

        return redirect()->back()->with("status", "Selected seats are out range");
        //return redirect()->back()->with("status", "A ticket with ID: #$request->ticket_id has been .");

    }
}
