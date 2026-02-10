<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
