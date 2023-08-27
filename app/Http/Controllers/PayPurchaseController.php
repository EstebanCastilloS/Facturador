<?php

namespace App\Http\Controllers;

use App\Models\payPurchase;
use App\Http\Requests\StorepayPurchaseRequest;
use App\Http\Requests\UpdatepayPurchaseRequest;
use App\Models\Bank;
use App\Models\Card;
use App\Models\paymentMethod;
use App\Models\Purchase;
use App\Models\payment_form;
use App\Models\pyment_form;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class PayPurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            //creamos la variaable departm
            $payPurchase = payPurchase::get();

            return DataTables::of($payPurchase)
            ->addColumn('edit', 'admin/payPurchase/actions')
            ->rawColumns(['edit'])
            ->make(true);
        }
        return view('admin.payPurchase.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paymentForms = pyment_form::get();
        //dd($paymentForms);
        $purchase = Purchase::get();
        $paymentMethods = paymentMethod::get();
        $banks = Bank::get();
        $cards = Card::get();
        return view('admin.payPurchase.create', compact('paymentForms','purchase', 'paymentMethods','banks','cards'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepayPurchaseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepayPurchaseRequest $request)
    {
        // dd($request->all());
        //agregando los campos de row
        // $payment_form_id = $request->payment_form_id;
        // $payment_method_id = $request->payment_method_id;
        // $transaction = $request->transaction;
        // $pay = $request->pay;
        // $balance = $request->balance;

        $purchase_id= $request->purchase_id;
        $purchase = Purchase::findOrFail($purchase_id);
        $payPurchase = new payPurchase;
        //llaves foraneas

        $payPurchase->pay_pp = $request->totalpay;
        $payPurchase->balance = $purchase->balance - $request->totalpay;
        //dd($payPurchase);
        $payPurchase->purchase_id = $purchase_id;
        $payPurchase->user_id = Auth::user()->id;


        $payPurchase->save();
        return redirect('payPurchase');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\payPurchase  $payPurchase
     * @return \Illuminate\Http\Response
     */
    public function show(payPurchase $payPurchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\payPurchase  $payPurchase
     * @return \Illuminate\Http\Response
     */
    public function edit(payPurchase $payPurchase)
    {
        return view('admin.payPurchase.edit', compact('payPurchase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepayPurchaseRequest  $request
     * @param  \App\Models\payPurchase  $payPurchase
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepayPurchaseRequest $request, payPurchase $payPurchase)
    {
        $payPurchase->pay_pp = $request->pay_pp;
        $payPurchase->method_payment = $request->method_payment;
        $payPurchase->update();
        return redirect('payPurchase');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\payPurchase  $payPurchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(payPurchase $payPurchase)
    {
        //
    }
}
