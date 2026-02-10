<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardUserManagement extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('roles')->whereHas('roles',
        fn($query) => $query->where('name', '!=', 'Admin'))
        ->get();

        $adminNumber = User::with('roles')->whereHas('roles', 
        fn($query) => $query->where('name', 'Admin'))
        ->count();

        $clientNumber = User::with('roles')->whereHas('roles',
        fn($query) => $query->where('name', 'Client'))
        ->count();

        $managerNumber = User::with('roles')->whereHas('roles',
        fn($query) => $query->where('name', 'Gerant'))
        ->count();
        
        $banned = User::where('is_banned', true)->count();

        return view('dashboard.user-management', compact( 'clientNumber',
         'adminNumber', 'managerNumber', 'banned', 'users'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
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
    public function update(Request $request, User $user)
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
