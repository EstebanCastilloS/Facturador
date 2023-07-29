<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Company;
use App\Models\Department;
use App\Models\IdentificationType;
use App\Models\Municipality;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CustomerController extends Controller
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
            //creamos la variaable customer
            $customers = Customer::get();

            return DataTables::of($customers)
            ->addIndexColumn()
            ->addColumn('municipality', function (Customer $customer) {
                return $customer->municipality->name;
            })
            ->addColumn('department', function (Customer $customer) {
                return $customer->municipality->department->name;
            })
            ->addColumn('company', function (Customer $customer) {
                return $customer->company->name;
            })
            ->addColumn('identification_type', function (Customer $customer) {
                return $customer->identificationType->name;
            })
            ->addColumn('edit', 'admin/customer/actions')
            ->rawColumns(['edit'])
            ->make(true);
        }

        return view('admin.customer.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipalities = Municipality::get();
        $companies = Company::get();
        $identification_types = IdentificationType::get();
        $departments = Department::get();
        return view('admin.customer.create', compact('municipalities','departments','companies','identification_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        $customer = new customer();
        $customer->company_id = $request->company_id;
        $customer->municipality_id = $request->municipality_id;
        $customer->identification_type_id = $request->identification_type_id;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->status = $request->status;
        $customer->save();

        return redirect('customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $municipalities = Municipality::get();
        $companies = Company::get();
        $identification_types = IdentificationType::get();
        $departments = Department::get();
        return view('admin.customer.edit', compact('municipalities','departments','companies', 'customer','identification_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $customer->municipality_id = $request->municipality_id;
        $customer->company_id = $request->company_id;
        $customer->identification_type_id = $request->identification_type_id;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->status = $request->status;
        $customer->update();

        return redirect('customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }

    public function getmunicipalities(Request $request, $id)
    {
        if($request)
        {
            $municipalities = municipality::where('department_id', '=', $id)->get();

            return response()->json($municipalities);
        }
    }
}

