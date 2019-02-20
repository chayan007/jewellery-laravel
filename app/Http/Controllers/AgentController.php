<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{
    public function profile(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();
        //change profile details
    }

    public function getUsers()
    {
        $users = User::paginate(20);
        return view('users', ['users' => $users]);
    }
}
