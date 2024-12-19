<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Http\Requests\StoreFacultyRequest;
use App\Http\Requests\UpdateFacultyRequest;
use App\Models\Student;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faculties = Faculty::all();
        return $this->http_response($faculties, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFacultyRequest $request)
    {
        $data = $request->validated();
        Faculty::create($data);
        return $this->http_response($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Faculty $faculty)
    {
        return $faculty;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faculty $faculty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFacultyRequest $request, Faculty $faculty)
    {
        $valiedata_request = $request->validated();
        $faculty->update($valiedata_request);
        return $this->http_response($valiedata_request, 202);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faculty $faculty)
    {
        
        if(  $faculty->delete()){

            return $this->http_response(['message'=>'Deleted success'],202);
        }
        return $this->http_response(['message'=>'Deleted failed'],404);
    }
}
