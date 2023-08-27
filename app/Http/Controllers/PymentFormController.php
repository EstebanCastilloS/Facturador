<?php

namespace App\Http\Controllers;

use App\Models\PymentForm;
use App\Http\Requests\StorePymentFormRequest;
use App\Http\Requests\UpdatePymentFormRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PymentFormController extends Controller
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
            //creamos la variaable PymentForm
            $pymentForm = PymentForm::get();

            return DataTables::of($pymentForm)
            ->addColumn('edit', 'admin/pyment_form/actions')
            ->rawColumns(['edit'])
            ->make(true);
        }
        return view('admin.pyment_form.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pyment_form.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePymentFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePymentFormRequest $request)
    {
        $pymentForm = new PymentForm;
        $pymentForm->name = $request->name;
        $pymentForm->code = $request->code;
        $pymentForm->save();
        return redirect('pymentForm');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PymentForm  $PymentForm
     * @return \Illuminate\Http\Response
     */
    public function show(PymentForm $pymentForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PymentForm  $PymentForm
     * @return \Illuminate\Http\Response
     */
    public function edit(PymentForm $pymentForm)
    {
        return view('admin.pyment_form.edit', compact('pymentForm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePymentFormRequest  $request
     * @param  \App\Models\PymentForm  $PymentForm
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePymentFormRequest $request, PymentForm $pymentForm)
    {
        $pymentForm->name = $request->name;
        $pymentForm->code = $request->code;
        $pymentForm->update();
        return redirect('pymentForm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pyment_form  $pyment_form
     * @return \Illuminate\Http\Response
     */
    public function destroy(PymentForm $pymentForm)
    {
        //
    }
}
