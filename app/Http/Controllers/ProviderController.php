<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Http\Requests\StoreProviderRequest;
use App\Http\Requests\UpdateProviderRequest;
use App\Models\Company;
use App\Models\Department;
use App\Models\IdentificationType;
use App\Models\Municipality;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProviderController extends Controller
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
            //creamos la variaable departm
            $providers = Provider::get();

            return DataTables::of($providers)
            ->addIndexColumn()
            ->addColumn('municipality', function (Provider $provider) {
                return $provider->municipality->name;
            })
            ->addColumn('company', function (Provider $provider) {
                return $provider->company->name;
            })
            ->addColumn('identification_type', function (Provider $provider) {
                return $provider->identificationType->name;
            })
            ->addColumn('Department', function (Provider $provider) {
                return $provider->municipality->department->name;
            })
            ->addColumn('edit', 'admin/provider/actions')
            ->rawColumns(['edit'])
            ->make(true);
        }

        return view('admin.provider.index');
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
        return view('admin.provider.create', compact('municipalities','companies','identification_types','departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProviderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProviderRequest $request)
    {
        $provider = new provider();
        $provider->company_id = $request->company_id;
        $provider->municipality_id = $request->municipality_id;
        $provider->identification = $request->identification;
        $provider->identification_type_id = $request->identification_type_id;
        $provider->name = $request->name;
        $provider->address = $request->address;
        $provider->email = $request->email;
        $provider->phone = $request->phone;
        $provider->status = $request->status;
        $provider->save();

        return redirect('provider');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function show(Provider $provider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit(Provider $provider)
    {
        $municipalities = Municipality::get();
        $companies = Company::get();
        $identification_types = IdentificationType::get();
        $departments = Department::get();
        return view('admin.provider.edit', compact('municipalities', 'companies','identification_types','departments', 'provider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProviderRequest  $request
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProviderRequest $request, Provider $provider)
    {
        $provider->company_id = $request->company_id;
        $provider->municipality_id = $request->municipality_id;
        $provider->identification = $request->identification;
        $provider->identification_type_id = $request->identification_type_id;
        $provider->name = $request->name;
        $provider->address = $request->address;
        $provider->email = $request->email;
        $provider->phone = $request->phone;
        $provider->status = $request->status;
        $provider->update();

        return redirect('provider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provider $provider)
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
