<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use App\Models\Student;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();
        return $this->http_response($departments, 200);
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
    public function store(StoreDepartmentRequest $request)
    {
        $data = $request->validated();
        Department::create($data);
        return $this->http_response($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartmentRequest $request, Department $department)
    {
        $valiedata_request = $request->validated();
        $department->update($valiedata_request);
        return $this->http_response($valiedata_request, 202);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        if ($department->students()->exists()) {
            return $this->http_response(['message' => 'Cannot delete department with existing students'], 400);
        }
        if ($department->delete()) {
            return $this->http_response(['message' => 'Deleted success'], 202);
        }
        return $this->http_response(['message' => 'Deleted failed'], 404);
    }
}
