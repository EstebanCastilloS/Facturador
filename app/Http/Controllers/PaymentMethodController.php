<?php

namespace App\Http\Controllers;

use App\Models\paymentMethod;
use App\Http\Requests\StorepaymentMethodRequest;
use App\Http\Requests\UpdatepaymentMethodRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax())
        {
            //creamos la variaable pyment_form
            $paymentMethod = paymentMethod::get();

            return DataTables::of($paymentMethod)
            ->addColumn('edit', 'admin/paymentMethod/actions')
            ->rawColumns(['edit'])
            ->make(true);
        }
        return view('admin.paymentMethod.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.paymentMethod.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepaymentMethodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepaymentMethodRequest $request)
    {
        $paymentMethod = new paymentMethod;
        $paymentMethod->name = $request->name;
        $paymentMethod->code = $request->code;
        $paymentMethod->save();
        return redirect('paymentMethod');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\paymentMethod  $paymentMethod
     * @return \Illuminate\Http\Response
     */
    public function show(paymentMethod $paymentMethod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\paymentMethod  $paymentMethod
     * @return \Illuminate\Http\Response
     */
    public function edit(paymentMethod $paymentMethod)
    {
        return view('admin.paymentMethod.edit', compact('paymentMethod'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepaymentMethodRequest  $request
     * @param  \App\Models\paymentMethod  $paymentMethod
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepaymentMethodRequest $request, paymentMethod $paymentMethod)
    {
        $paymentMethod->name = $request->name;
        $paymentMethod->code = $request->code;
        $paymentMethod->update();
        return redirect('paymentMethod');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\paymentMethod  $paymentMethod
     * @return \Illuminate\Http\Response
     */
    public function destroy(paymentMethod $paymentMethod)
    {
        //
    }
}
