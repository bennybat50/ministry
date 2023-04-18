<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("admin.users.index")->with('model', User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.users.create')->with(["model"=>new User(),'roles'=>Role::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adminRole=Role::where("name", "admin")->first();
        $authorRole=Role::where("name", "author")->first();
        $editorRole=Role::where("name", "editor")->first();

        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();

        if($request->role==1){
            $user->roles()->attach($adminRole);
        }else if($request->role==2){
            $user->roles()->attach($editorRole);
        }else{
            $user->roles()->attach($authorRole);
        }

        $request->session()->flash('success', 'User Created');
        return redirect('admin/users');

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
        $model=User::findOrFail($user->id);

        return view('admin.users.edit', ["model"=>$model, 'roles'=>Role::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $adminRole=Role::where("name", "admin")->first();
        $authorRole=Role::where("name", "author")->first();
        $editorRole=Role::where("name", "editor")->first();


        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();

        $user->Roles()->detach();

        if($request->role==1){
            $user->roles()->attach($adminRole);
        }else if($request->role==2){
            $user->roles()->attach($editorRole);
        }else{
            $user->roles()->attach($authorRole);
        }

        $request->session()->flash('success', 'User Updated');
        return redirect('admin/users');
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
