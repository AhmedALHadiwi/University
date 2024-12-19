<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Http\Requests\StoreClassroomRequest;
use App\Http\Requests\UpdateClassroomRequest;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classrooms = Classroom::all();
        return $this->http_response($classrooms, 200);
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
    public function store(StoreClassroomRequest $request)
    {
        $data = $request->validated();
        Classroom::create($data);
        return $this->http_response($data, 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Classroom $classroom)
    {
        // return $classroom;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classroom $classroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClassroomRequest $request, Classroom $classroom)
    {
        $valiedata_request = $request->validated();
        $classroom->update($valiedata_request);
        return $this->http_response($valiedata_request, 202);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classroom $classroom)
    {
        if ($classroom->delete()) {
            return $this->http_response(['message' => 'Deleted success'], 202);
        }
        return $this->http_response(['message' => 'Deleted failed'], 404);
    }
}
