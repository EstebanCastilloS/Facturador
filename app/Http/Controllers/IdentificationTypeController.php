<?php

namespace App\Http\Controllers;

use App\Models\IdentificationType;
use App\Http\Requests\StoreIdentificationTypeRequest;
use App\Http\Requests\UpdateIdentificationTypeRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class IdentificationTypeController extends Controller
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
            $identificationType = IdentificationType::get();

            return DataTables::of($identificationType)
            ->addColumn('edit', 'admin/identification_type/actions')
            ->rawColumns(['edit'])
            ->make(true);
        }

        return view('admin.identification_type.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.identification_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIdentificationTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIdentificationTypeRequest $request)
    {
        $identificationType = new identificationtype;
        $identificationType->name = $request->name;
        $identificationType->code = $request->code;
        $identificationType->save();
        return redirect('identification_type');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IdentificationType  $identificationType
     * @return \Illuminate\Http\Response
     */
    public function show(IdentificationType $identificationType)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IdentificationType  $identificationType
     * @return \Illuminate\Http\Response
     */
    public function edit(IdentificationType $identificationType)
    {
        return view('admin.identification_type.edit', compact('identificationType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIdentificationTypeRequest  $request
     * @param  \App\Models\IdentificationType  $identificationType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIdentificationTypeRequest $request, IdentificationType $identificationType)
    {
        $identificationType->name = $request->name;
        $identificationType->code = $request->code;
        $identificationType->update();
        return redirect('identification_type');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IdentificationType  $identificationType
     * @return \Illuminate\Http\Response
     */
    public function destroy(IdentificationType $identificationType)
    {
        //
    }
}
