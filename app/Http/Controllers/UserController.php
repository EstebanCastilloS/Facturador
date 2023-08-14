<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Branche;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    //

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
            $user = User::get();

            return DataTables::of($user)
            ->addColumn('edit', 'admin/user/actions')
            ->rawColumns(['edit'])
            ->make(true);
        }

        return view('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $branches = Branche::get();
        return view('admin.user.create', compact('branches'));
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        //
        $user = new user;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->user_role = $request->user_role;
        $user->address = $request->address;
        $user->status = $request->status;
        $user->password = $request->password;
        $user->branche_id = $request->branche_id;
        $user->save();
        return redirect('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        $branches = Branche::get();
        return view('admin.user.edit', compact('user','branches'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUsertRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
        $user->name = $request->name;
        $user->email = $request->email;
        $user->user_role = $request->user_role;
        $user->address = $request->address;
        $user->status = $request->status;
        $user->password = $request->password;
        $user->branche_id = $request->branche_id;
        $user->update();
        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

}
