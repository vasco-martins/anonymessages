<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Str;
use Livewire\Component;

class Create extends Component
{

    public $name = '';

    public function render()
    {
        return view('livewire.user.create');
    }

    public function submit() {
        if(Str::length($this->name) == 0) return;
        $token = Str::random(12);
        User::create([
            'token' => $token,
            'name' => $this->name
        ]);

        session(['token' => $token]);

        return redirect()->route('user.show', compact('token'));
    }
}
