<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    function login(LoginRequest $request)
    {
        if(!$request->validated()){
            return $this->http_response(['error' => 'Invalid credentials'], 401);
        }

    $user = User::where('email', $request->email)->first();

    // Check if the user exists and the password matches
    if ($user && $user->password === $request->password) {
        return $this->http_response(['message' => 'Login successful'],200);
    }

    // If no match, return an error response
    return $this->http_response(['message' => 'You are not a user'], 401);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
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
    public function store(StoreUserRequest $request)
    {

        // return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        // return $user ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
