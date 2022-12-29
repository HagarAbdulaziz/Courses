<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class Chatuser extends Component
{
    public $messageText;
    public $clientid;
    public function render()
    {
        $messages = Message::with('client')->latest()->take(10)->get()->sortBy('id');
        return view('livewire.chatuser', compact('messages'));

    }
    public function sendMessage()
    {
        Message::create([
            'client_id'=>$this->clientid,
            'message_text' => $this->messageText,
        ]);
        $this->reset('messageText');
    }
}
