<?php

namespace App\Http\Controllers\StudentManagement;

use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view( 'backend.StudentManagement.roles.create' );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request ) {
        $request->validate( [
            'role_name' => 'required|unique:roles',
        ] );

        Role::create( [
            'role_name' => $request->role_name,
        ] );
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show( Role $role ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Role $role ) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, Role $role ) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Role $role ) {
        //
    }

}
