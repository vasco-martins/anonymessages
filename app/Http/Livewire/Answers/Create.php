<?php

namespace App\Http\Livewire\Answers;

use App\Models\Answer;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{

    public $name = '';
    public $message = '';
    public $token;

    public function mount($token) {
        $this->token = $token;
    }

    public function render()
    {
        return view('livewire.answers.create', );
    }

    public function submit() {
        if($this->message == '') return;
        $user = User::where('token', $this->token)->first();
        Answer::create([
            'name' => $this->name,
            'message' => $this->message,
            'user_id' => $user->id,
        ]);

        $this->emit('answerAdded');
    }
}
