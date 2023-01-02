<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use App\Models\Message;
use Illuminate\Http\Request;

class ChatController extends Controller
{

    public function index()
    {
      return view('dashboard.Chat.index');
    }
    public function chatuser()
    {
        return view('chatuser');
    }
    public function contact()
    {
        return view('Contact');
    }

    public function contactstore(Request $request)
    {
        Client::create([
            'name'=>$request->name,
        ]);
        return redirect(route('chatuser'))->with(['success' => 'Added  Successfully']);
    }

    public function patientchatnow($id)
    {
        $reciever = $id;
        Message::where('reciever_id',1)->where('user_id',$id)->update([
         'status'=>1
        ]);
        return view('dashboard.Chat.chatnow',compact('reciever'));
    }
    public function patientdeletmsg($id)
    {
        Message::findOrFail($id)->delete();
        return redirect()->back();
    }
    public function deletchat($id)
    {
        Message::where('user_id',$id)->orWhere('reciever_id',$id)->delete();
        return redirect()->back();
    }

    public function deletchats()
    {
        Message::where('user_id',auth()->user()->id)->orWhere('reciever_id',auth()->user()->id)->delete();
        return redirect()->back();
    }

    public function deletmsgs($id)
    {
        Message::findOrFail($id)->delete();
        return redirect()->back();
    }



    public function patientsearch(Request $request)
    {
        $users = User::where('usertype','user')->where('name', 'LIKE' , '%'.$request->search.'%')
        ->get();
        return view('dashboard.Chat.index',compact('users'));
    }












    public function chatnow($id)
    {
        $reciever = $id;
        return view('chatusernow',compact('reciever'));
    }
    public function deletmsg($id)
    {
        $deletmsg = Message::find($id);
        $deletmsg->delete();

    }
    public function search(Request $request)
    {
        $users = User::where('name', 'LIKE' , '%'.$request->search.'%')
        ->get();
        return view('chatuser',compact('users'));
    }
















    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
