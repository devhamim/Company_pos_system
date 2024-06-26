<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //role
    function role() {
        return view('backend.role.role');
    }

    public function permission_store(Request $request) {
        Permission::create(['name' => $request->permission]);
        return back()->with('permission', $request->permission.' permission created successfully');
    }
}
