<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($token) {
        $user = User::where('token', $token)->first();

        abort_if($user == null, 404);

        return view('users.show', compact('user'));
    }
}
