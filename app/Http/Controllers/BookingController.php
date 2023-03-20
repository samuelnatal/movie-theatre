<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Transaction;
use App\Models\Ticket;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('notification');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $seats = explode(',', $request->seats);

        //Create a customer for booking
        Customer::create(
            [
                'customer_name' => $request->name,
                'customer_email' => $request->email,
                'customer_phone' => $request->phone,
            ]

        );

        //Fetch created customer
        $customer = Customer::orderBy('created_at', 'DESC')->first();

        //Make transaction by recently created customer.
        Transaction::create(
            [
                'amount' => $request->amount,
                'customer_id' => $customer->customerID,
            ]
        );

        //Fetch the current transaction made by the former customer
        $transaction = Transaction::orderBy('created_at', 'DESC')->first();

        //Book a ticket seat(s) after the transaction completed successful
        foreach ($seats as $seat) {
            Ticket::create(
                [
                    'seat' => $seat,
                    'schedule_id' => $request->scheduleID,
                    'customer_id' => $customer->customerID,
                    'payment_id' => $transaction->transactionID,
                ]
            );
        }

        //Fetch data to be returned back to the notification page
        $tickets = Ticket::where('customer_id','=',$customer->customerID)
        ->where('payment_id','=',$transaction->transactionID)
        ->get();

        //Redirect to the transaction successful page.
        return view('notification', compact('customer','transaction','tickets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function seats(Request $request)
    {
        $seats = Ticket::select('seat')
        ->where('schedule_id','=',$request->scheduleID)
        ->get();

        return $seats;
    }


}
