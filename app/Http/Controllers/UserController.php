<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($token) {
        $user = User::where('token', $token)->first();

        abort_if($user == null, 404);

        return view('users.show', compact('user'));
    }

    public function store(Request $request, $token) {
        $user = User::where('token', $token)->first();

        abort_if($user == null, 404);

        $data = $request->validate([
            'name' => 'nullable',
            'message' => 'required'
        ]);

        dd($data);
        Answer::create([
            'user_id' => $user->id,
            'name' => $data['name'],
            'message' => $data['message'],
        ]);

        return redirect()->back();
    }
}
