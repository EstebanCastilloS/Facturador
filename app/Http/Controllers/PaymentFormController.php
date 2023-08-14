<?php

namespace App\Http\Controllers;

use App\Models\payment_form;
use App\Http\Requests\Storepayment_formRequest;
use App\Http\Requests\Updatepayment_formRequest;

class PaymentFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storepayment_formRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storepayment_formRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\payment_form  $payment_form
     * @return \Illuminate\Http\Response
     */
    public function show(payment_form $payment_form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\payment_form  $payment_form
     * @return \Illuminate\Http\Response
     */
    public function edit(payment_form $payment_form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatepayment_formRequest  $request
     * @param  \App\Models\payment_form  $payment_form
     * @return \Illuminate\Http\Response
     */
    public function update(Updatepayment_formRequest $request, payment_form $payment_form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\payment_form  $payment_form
     * @return \Illuminate\Http\Response
     */
    public function destroy(payment_form $payment_form)
    {
        //
    }
}
