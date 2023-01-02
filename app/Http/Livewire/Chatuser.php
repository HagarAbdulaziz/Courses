<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Message;
use Livewire\Component;

class Chatuser extends Component
{
    public $messageText;
    public $reciever ;
    public $name;
    public $count = 0;
    public $user;
    public $searchh;
    public $searchchat;
    public $schat;
    public function increment()
    {
        $this->count++;
    }
    public function searchchat()
    {
        $this->schat = Message::where('message_text', 'LIKE' , '%'.$this->searchchat.'%')
        ->get();
    }
    public function search()
    {
        $this->user = User::where('name', 'LIKE' , '%'.$this->searchh.'%')
        ->get();


    }

    public function render()
    {
        $messages = Message::
        whereIn('user_id', [1, auth()->user()->id])
        ->whereIn('reciever_id', [ auth()->user()->id ,  1])
        ->with('user')->latest()->take(1000000)->get()->sortBy('id');
        $this->name = User::find($this->reciever);
        $name = $this->name;
       /* $users = User::join
        (
            'messages', function ($join)
                {
                    $join->on('messages.user_id', '=', 'users.id');
                    $join->orOn('messages.reciever_id','=','users.id');
                }
        )


        ->distinct('users.id')
        ->select(['users.*'])

    ->get();*/

       $users = User::all();

        return view('livewire.chatuser', compact('messages','name','users'));
    }

    public function sendMessage()
    {
       /* Message::create([
            'user_id' => auth()->user()->id,
            'message_text' => 'eslam',
            'reciever_id' => '5',
        ]);*/
        $msg = new Message();
        $msg->user_id = auth()->user()->id;
        $msg->reciever_id = 1;
        $msg->message_text = $this->messageText;
        $msg->save();

        $this->reset('messageText');
    }

}
