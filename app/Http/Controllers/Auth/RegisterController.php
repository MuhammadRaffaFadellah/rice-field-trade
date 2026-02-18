<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Auth
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::where('id', '!=', 1)->get();

        return view('auth.register', compact('roles'));
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
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|email|unique:users',
            'phone'     => 'nullable|string|max:20',
            'address'   => 'nullable|string',
            'password'  => 'required|min:6|confirmed',
        ]);

        $buyerRole = Role::where('slug', 'buyer')->first();

        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'address'   => $request->address,
            'role_id'   => 3,
            'password'  => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silahkan login.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
