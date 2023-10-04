<?php

namespace App\Http\Controllers\StudentManagement;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
        // $userData = User::with( 'role' )->get();
        $roleData = Role::all();
        return view( 'backend.StudentManagement.users.create', compact( 'roleData' ) );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request ) {
        // dd( $request->all() );
        try {
            $request->validate( [
                'name'             => 'required|min:3|max:100',
                'email'            => 'required|email|unique:users',
                'phone'            => 'unique:users',
                'dob'              => 'required|date',
                'gender'           => 'required',
                'rid'              => 'required', // rid from select field
                'password' => 'required|min:6|max:32',
                'confirm_password' => 'required|same:password',
            ] );
            User::create( [
                'name'    => $request->name,
                'email'   => $request->email,
                'phone'   => $request->phone,
                'dob'     => $request->dob,
                'gender'  => $request->gender,
                'role_id' => $request->rid, // rid from select field
                'password' => $request->password,

            ] );
            return redirect()->back();
        } catch ( Exception $e ) {

            dd( $e->getMessage() );

        }
    }

    /**
     * Display the specified resource.
     */
    public function show( string $id ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( string $id ) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, string $id ) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id ) {
        //
    }

}
