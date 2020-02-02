<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::All();
        return view('admin.roles', ['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = new Role;
        $role->name = $request->name;
        $role->display_name = $request->display_name;
        $role->description = $request->description;
        $role->save();
        return redirect(route('roles.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::find($id);
        return view('admin.edit', ['usuario' => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    

    public function destroy($id)
    {
        //
    }

    public function addRole($id)
    {
        $usuario = User::find($id);
        $roles = Role::All();
        return view('admin.addrole', ['usuario' => $usuario, 'roles' => $roles]);
    }

    public function storeRole(Request $request, $id)
    {
        $user_id = $request->get('user_id');
        User::find($user_id)->roles()->attach($id);
        return redirect(route('roles.index'));
    }

    public function editRole($id)
    {
        $usuario = User::find($id);
        return view('admin.editrole', ['usuario' => $usuario]);
    }

    public function deleteRole(Request $request, $id)
    {
        $user_id = $request->get('user_id');
        User::find($user_id)->roles()->detach($id);
        return redirect(route('roles.index'));
    }
}
