<?php

namespace App\Http\Controllers;

use App\Models\Useer;
use App\Http\Requests\StoreUseerRequest;
use App\Http\Requests\UpdateUseerRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UseerController extends Controller
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
        //Creamos la variable
        $useer = Useer::get();

        return DataTables::of($useer)
        ->addColumn('btn','admin/useer/actions')
        ->rawColumns(['btn'])
        ->make(true);
        }
        return view('admin.useer.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.useer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUseerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUseerRequest $request)
    {
        //creamos la el objeto para guardar los datos en mysql
        $useer = new useer;
        $useer->name = $request->name;
        $useer->email = $request->email;
        $useer->user_role = $request->user_role;
        $useer->address = $request->address;
        $useer->status = $request->status;
        $useer->save();
        return redirect('useer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Useer  $useer
     * @return \Illuminate\Http\Response
     */
    public function show(Useer $useer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Useer  $useer
     * @return \Illuminate\Http\Response
     */
    public function edit(Useer $useer)
    {
        //AGREGANDO LA PLANTILLA EDITAR
        return view('admin.useer.edit', compact('useer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUseerRequest  $request
     * @param  \App\Models\Useer  $useer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUseerRequest $request, Useer $useer)
    {
        //ACTUALIZAR DATOS
        $useer->name = $request->name;
        $useer->email = $request->email;
        $useer->user_role = $request->user_role;
        $useer->address = $request->address;
        $useer->status = $request->status;
        $useer->update();
        return redirect('useer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Useer  $useer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Useer $useer)
    {
        //
    }
}
