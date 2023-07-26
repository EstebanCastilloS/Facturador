<?php

namespace App\Http\Controllers;

use App\Models\Branche;
use App\Http\Requests\StoreBrancheRequest;
use App\Http\Requests\UpdateBrancheRequest;
use App\Models\Company;
use App\Models\Municipality;
use App\Models\Department;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class BrancheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if($request->ajax()){
            //creamos la variaable departm
            $branches = Branche::get();

            return DataTables::of($branches)
            ->addIndexColumn()
            ->addColumn('company', function (Branche $branche) {
                return $branche->company->name;
            })
            ->addColumn('municipality', function (Branche $branche) {
                return $branche->municipality->name;
            })
            ->addColumn('department', function (Branche $branche) {
                return $branche->municipality->department->name;
            })
            ->addColumn('edit', 'admin/branche/actions')
            ->rawColumns(['edit'])
            ->make(true);
        }

        return view('admin.branche.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $companies = Company::get();
        $municipalities = Municipality::get();
        $departments = Department::get();
        return view('admin.branche.create', compact('companies', 'municipalities','departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBrancheRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrancheRequest $request)
    {
        $branche = new branche();
        $branche->company_id = $request->company_id;
        $branche->municipality_id = $request->municipality_id;
        $branche->name = $request->name;
        $branche->nit = $request->nit;
        $branche->address = $request->address;
        $branche->email = $request->email;
        $branche->phone = $request->phone;
        $branche->contact = $request->contact;
        $branche->save();

        return redirect('branche');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branche  $branche
     * @return \Illuminate\Http\Response
     */
    public function show(Branche $branche)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branche  $branche
     * @return \Illuminate\Http\Response
     */
    public function edit(Branche $branche)
    {
        $companies = Company::get();
        $municipalities = Municipality::get();
        $departments = Department::get();
        return view('admin.branche.edit', compact('companies', 'municipalities','departments', 'branche'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBrancheRequest  $request
     * @param  \App\Models\Branche  $branche
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrancheRequest $request, Branche $branche)
    {
        $branche->company_id = $request->company_id;
        $branche->municipality_id = $request->municipality_id;
        $branche->name = $request->name;
        $branche->nit = $request->nit;
        $branche->address = $request->address;
        $branche->email = $request->email;
        $branche->phone = $request->phone;
        $branche->contact = $request->contact;
        $branche->update();

        return redirect('branche');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branche  $branche
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branche $branche)
    {
        //
    }

    //método para adquirir los municipios
    public function getmunicipalities(Request $request, $id)
    {
        if($request)
        {
            $municipalities = municipality::where('department_id', '=', $id)->get();

            return response()->json($municipalities);
        }
    }
}
