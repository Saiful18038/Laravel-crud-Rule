<?php

namespace App\Http\Controllers\BatchTeacher;

use App\Http\Controllers\Controller;
use App\Models\Batch;
use App\Models\Teacher;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $batchData = Batch::with( 'teacher' )->get();
        $tname = Teacher::all()->toArray();
        return view( 'backend.Relations.Batch', compact( 'tname', 'batchData' ) );

    }

    /**
     * Store a newly created resource in storage.
     */
    public function batchCreate( Request $request ) {
        $request->validate( [
            'batchNo' => 'required',
        ] );
        Batch::create( [
            'batchNo'    => $request->batchNo,
            'teacher_id' => $request->tid,
        ] );
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     */
    public function show(Batch $batch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Batch $batch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Batch $batch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Batch $batch)
    {
        //
    }
}
