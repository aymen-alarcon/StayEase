<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
// use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SessionController extends Controller
{

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        Auth::logout();

        return redirect('/');
    }
}
