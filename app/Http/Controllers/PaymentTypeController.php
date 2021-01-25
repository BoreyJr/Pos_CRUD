<?php

namespace App\Http\Controllers;

use App\Models\Payment_Type;
use Faker\Provider\Payment;
use Illuminate\Http\Request;

class PaymentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payment_Type = Payment_Type::all();
        return view('admin.PaymentType.index')->with(['Payment_Type' => $payment_Type]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.PaymentType.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);
        if(isset($request->status)) {

            $request->status = $request->status == 'on' ? true : false;
        }

        Payment_Type::create([
            "name" => $request->name,
            "status" => $request->status == 'on' ? true : false
        ]);

        return redirect('/PaymentType/index')
            ->with('success', 'Payment Type created successfully.');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment_Type  $payment_Type
     * @return \Illuminate\Http\Response
     */
    public function show(Payment_Type $payment_Type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment_Type  $payment_Type
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment_Type $payment_Type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment_Type  $payment_Type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment_Type $payment_Type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment_Type  $payment_Type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment_Type $payment_Type)
    {
        //
    }
}
