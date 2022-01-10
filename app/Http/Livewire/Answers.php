<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Answers extends Component
{

    protected $listeners = ['answerAdded' => '$refresh'];

    public $token;

    public function mount($token) {
        $this->token = $token;
    }

    public function render()
    {
        $user = User::where('token', $this->token)->first();
        $answers = $user->answers;
        return view('livewire.answers', compact('answers', 'user'));
    }
}
