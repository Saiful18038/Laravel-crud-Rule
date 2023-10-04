<?php

namespace App\Http\Controllers\StudentManagement;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $userData = User::all();
        return view( 'backend.StudentManagement.courses.create', compact( 'userData' ) );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request ) {
        $request->validate( [
            'course_title' => 'required|unique:courses',
            'uid'          => 'required',
        ] );
        dd( $request->all() );
        Course::create( [
            'course_title' => $request->course_title,
            'user_id'      => $request->uid,
        ] );
    }

    /**
     * Display the specified resource.
     */
    public function show( Course $course ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Course $course ) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, Course $course ) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Course $course ) {
        //
    }

}
