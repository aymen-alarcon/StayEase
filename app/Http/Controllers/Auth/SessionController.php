<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
<<<<<<< .merge_file_xZgqs3
// use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
=======
use Illuminate\Support\Facades\Auth;
>>>>>>> .merge_file_GDmtG2

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
