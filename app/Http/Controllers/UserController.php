<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Rol;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $rols = Rol::all();
        return view('Users.admUsuario', compact('users','rols'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rols = Rol::all();
        return view('Users.create',compact('rols'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        User::create($request->all());
        return redirect(route('users.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('Users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $previousUrl = URL::previous();
        session(['previous_url' => $previousUrl]);

        $rols = Rol::all();
        return view('Users.edit',compact('user','rols'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->all());
        $previousUrl = session('previous_url');
        return redirect($previousUrl);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
