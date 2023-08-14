<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Http\Requests\StorePurchaseRequest;
use App\Http\Requests\UpdatePurchaseRequest;
use App\Models\Branche;
use App\Models\Percentage;
use App\Models\Product;
use App\Models\productPurchase;
use App\Models\Provider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class PurchaseController extends Controller
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
            //creamos la variaable categorias, traigo a toas
            $purchase = Purchase::get();

            return DataTables::of($purchase)
            ->addColumn('edit', 'admin/purchase/actions')
            ->rawColumns(['edit'])
            ->make(true);
        }
        return view('admin.purchase.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $providers = Provider::get();
        $products = Product::get();
        $percentages = Percentage::get();
        return view('admin.purchase.create',compact('providers','products','percentages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePurchaseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePurchaseRequest $request)
    {
        //dd($request->all());

        $user = Auth::user();
        // $users = User::get();
        //dd($user);
        $product_id = $request->product_id;
        $quantity = $request->quantity;
        $price = $request->price;
        $iva = $request->iva;


        $purchase = new purchase;

        //cuando se tenga las llaves foraneas
        $purchase->provider_id = $request->provider_id;
        $purchase->branche_id = $user->branche_id;
        $purchase->percentage_id = $request->percentage_id[0];
        $purchase->user_id = $user->id;
        //dd($purchase);
        $purchase->generation_date = $request->generation_date;
        $purchase->due_date = $request->due_date;
        $purchase->pay = 0;
        $purchase->balance = $request->total_pay;
        $purchase->retention = $request->retention;
        $purchase->iva = $request->total_iva;
        $purchase->subtotal = $request->total;
        $purchase->total = $request->total_pay;
        $purchase->status = 'active';



        $purchase->save();

        //
        $cont = 0;

        while ($cont < count($product_id))
        {

            $subtotal = $quantity[$cont] * $price[$cont];
            $totalIva = $subtotal * $iva[$cont]/100;


            $productPurchase = new productPurchase();
            $productPurchase->quantity = $quantity[$cont];
            $productPurchase->price = $price[$cont];
            $productPurchase->totalIva = $totalIva;
            $productPurchase->subtotal = $subtotal;
            $productPurchase->porcentajeIva = $iva[$cont];
            $productPurchase->product_id = $product_id[$cont];
            $productPurchase->purchase_id = $purchase->id;
            $productPurchase->save();

            $product = Product::findOrFail($product_id[$cont]);
            $product->price_purchase = $price[$cont];
            $product->stock += $quantity[$cont];
            $product->update();

            $cont++;


        }
        return redirect('purchase');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {

        return view('admin.purchase.edit', compact('purchase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePurchaseRequest  $request
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePurchaseRequest $request, Purchase $purchase)
    {
        $purchase->generation_date = $request->generation_date;
        $purchase->due_date = $request->due_date;
        $purchase->pay = $request->pay;
        $purchase->balance = $request->balance;
        $purchase->retention = $request->retention;
        $purchase->iva = $request->iva;
        $purchase->subtotal = $request->subtotal;
        $purchase->total = $request->total;
        $purchase->status = $request->status;
        $purchase->update();
        return redirect('purchase');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        //
    }
}
