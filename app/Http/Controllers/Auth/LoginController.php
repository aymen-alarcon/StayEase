<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
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
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'email' => ['required', 'email', 'max:250'],
            'password' => ['required', 'min:6']
        ]);

        $result = Auth::attempt($validate);
        
        if(!$result){
            return back()->withErrors([
                'email' => 'incorrect email',
                'password' => 'incorrect password'
            ]);
        }
        
        $user = Auth::user();

        switch ($user->role->name) {
            case 'admin':
                // redirect to admin dashboard
                break;
            case 'Gerant':
                // redirect to client page with message
                break;
            case 'Client':
                // redirect to Clietn page
            default:
                return redirect('/');
                break;
        }
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
