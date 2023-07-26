<?php

namespace App\Http\Controllers;

use App\Models\Municipality;
use App\Models\Department;
use App\Http\Requests\StoreMunicipalityRequest;
use App\Http\Requests\UpdateMunicipalityRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class MunicipalityController extends Controller
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
            $municipalities = Municipality::get();

            return DataTables::of($municipalities)
            ->addIndexColumn()
            ->addColumn('department', function (Municipality $municipality) {
                return $municipality->department->name;
            })
            ->addColumn('edit', 'admin/municipality/actions')
            ->rawColumns(['edit'])
            ->make(true);
        }

        return view('admin.municipality.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Creamos este objeto es para llamar los datos ya creados
        $departments = Department::get();
        return view('admin.municipality.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMunicipalityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMunicipalityRequest $request)
    {
        //
        $municipality = new municipality();
        $municipality->department_id = $request->department_id;
        $municipality->code = $request->code;
        $municipality->name = $request->name;
        $municipality->save();

        return redirect('municipality');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Municipality  $municipality
     * @return \Illuminate\Http\Response
     */
    public function show(Municipality $municipality)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Municipality  $municipality
     * @return \Illuminate\Http\Response
     */
    public function edit(Municipality $municipality)
    {
        //
        $departments = Department::get();
        return view('admin.municipality.edit', compact('departments', 'municipality'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMunicipalityRequest  $request
     * @param  \App\Models\Municipality  $municipality
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMunicipalityRequest $request, Municipality $municipality)
    {
        //
        $municipality->department_id = $request->department_id;
        $municipality->code = $request->code;
        $municipality->name = $request->name;
        $municipality->update();

        return redirect('municipality');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Municipality  $municipality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Municipality $municipality)
    {
        //
    }
}
