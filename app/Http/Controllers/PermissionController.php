<?php

namespace Web\Http\Controllers;

use Illuminate\Http\Request;

use Web\Http\Requests;
use Web\Http\Controllers\Controller;
use Web\Role;
use Web\Permission;
use DB;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try { 

            // $permissions = Permission::orderBy('id','DESC')->paginate(5);
            //   return view('admin.dashboard.permissions.index',compact('permissions'))
            //       ->with('i', ($request->input('page', 1) - 1) * 5);

            $permissions = Permission::all();
            return view('admin.dashboard.permissions.index', ['permissions' => $permissions]);
            

        } catch(Exception $e) {

            return redirect()->back()->withMessage("An error occurred ".$e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission = Permission::get();
        return view('admin.dashboard.permissions.create',compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required|unique:permissions,name',
            'display_name'  => 'required',
            'description'   => 'required',
            // 'permission' => 'required',
        ]);

        $permission = new Permission();
        $permission->name           = $request->input('name');
        $permission->display_name   = $request->input('display_name');
        $permission->description    = $request->input('description');
        $permission->save();

        // foreach ($request->input('permission') as $key => $value) {
        //     $role->attachPermission($value);
        // }

        return redirect()->route('permissions.index')
                        ->with('success','Permissions created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permission = Permission::findOrFail($id);
        return view('admin.dashboard.permissions.show', ['permission' => $permission]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = Permission::find($id);
        // $permission = Permission::get();
        //$rolePermissions = DB::table("permission_role")->where("permission_role.role_id",$id)
            //->lists('permission_role.permission_id','permission_role.permission_id');

        return view('admin.dashboard.permissions.edit',compact('permission'));
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
        $this->validate($request, [
            'display_name' => 'required',
            'description' => 'required',
            // 'permission' => 'required',
        ]);

        $permission = Permission::find($id);
        $permission->name = $request->input('name');
        $permission->display_name = $request->input('display_name');
        $permission->description = $request->input('description');
        $permission->update();

        return redirect()->route('permissions.index')
                        ->with('success','Role updated successfully');
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
}
