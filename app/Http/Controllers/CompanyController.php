<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Department;
use App\Models\Municipality;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if($request->ajax())
        {
            //creamos la variaable departm
            $companies = Company::get();

            return DataTables::of($companies)
            ->addIndexColumn()
            ->addColumn('municipality', function (Company $company) {
                return $company->municipality->name;
            })
            ->addColumn('department', function (Company $company) {
                return $company->municipality->department->name;
            })
            ->addColumn('edit', 'admin/company/actions')
            ->rawColumns(['edit'])
            ->make(true);
        }


        return view('admin.company.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //Creamos este objeto es para llamar los datos ya creados
        $municipalities = Municipality::get();
        $departments = Department::get();
        return view('admin.company.create', compact('municipalities','departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequest $request)
    {
        //
        $company = new company();
        $company->municipality_id = $request->municipality_id;
        $company->name = $request->name;
        $company->nit = $request->nit;
        $company->dv = $request->dv;
        $company->address = $request->address;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->contact = $request->contact;
        $company->save();

        return redirect('company');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
        $municipalities = Municipality::get();
        $departments = Department::get();
        return view('admin.company.edit', compact('municipalities','departments', 'company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyRequest  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        //
        $company->municipality_id = $request->municipality_id;
        $company->name = $request->name;
        $company->nit = $request->nit;
        $company->dv = $request->dv;
        $company->address = $request->address;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->contact = $request->contact;
        $company->update();

        return redirect('company');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
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
