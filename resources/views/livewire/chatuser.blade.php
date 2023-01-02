<div wire:poll>
    <div class="container">
        <h3 class=" text-center">
         <!--   @if (auth()->user()->email == 'admin@admin.com')
            @endif-->
            <br>
            <a class="btn btn-danger" href="{{ Url('/deletchats/') }}">حذف المحادثة</a>
{{--
             @if($name->name != null)
            <p>{{$name->name}}</p>
            @endif  --}}
        </h3>

                <div class="col-12 col-md-8">

                    <hr>
                    <div id="chat" class=" w-100" style="min-height:80vh">

                        @if ($schat != null)
                        @forelse ($schat as $message)

                        @if ($message->user->name == auth()->user()->name)
                            <!-- Reciever Message-->
                            <div  class="outgoing_msg">
                                <div  class="sent_msg">
                                    @if ($message->message_text != null)
                                        <p>
                                            <a class="btn btn-danger" href="{{url('deletmsgs/'.$message->id)}}" >Delete</a>
                                            {{ $message->message_text }}


                                        </p>
                                        <span class="time_date">
                                            {{ $message->created_at->diffForHumans() }}</span>
                                    @elseif($message->message_file != null)
                                        <a href="..\chatfile\{{$message->message_file}}" download>
                                            <img src="" />
                                            <div style='margin-left:40px'>{{$message->message_file}}</div>
                                        </a>
                                    @endif
                                </div>
                            </div>

                        @else

                            <div class="incoming_msg">
                                <div class="incoming_msg_img"> <img
                                        src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                <div class="received_msg">
                                    <div class="received_withd_msg">
                                        @if ($message->message_text != null)
                                        <p>
                                            <a class="btn btn-danger" href="{{url('deletmsgs/'.$message->id)}}" >Delete</a>
                                            {{ $message->message_text }}


                                        </p>
                                        <span class="time_date">
                                            {{ $message->created_at->diffForHumans() }}</span>
                                    @elseif($message->message_file != null)
                                        <a href="..\chatfile\{{$message->message_file}}" download>
                                            <img src="" />
                                            <div style='margin-left:40px'>{{$message->message_file}}</div>
                                        </a>
                                    @endif
                                    </div>
                                </div>
                            </div>

                        @endif
                    @empty
                        <h5 style="text-align: center;color:red"> لاتوجد رسائل سابقة</h5>
                    @endforelse
                        @else
                        @php($i = 0)
                        @forelse ($messages as $message)

                        @if ($message->user->name == auth()->user()->name)
                            <!-- Reciever Message-->
                            <div class="outgoing_msg">
                                <div class="sent_msg rounded-10 rounded overflow-hidden pb-1" style="background-color:#d1d1d1">
                                    @if ($message->message_text != null)
                                    <p>
                                        <a class="btn btn-danger" href="{{url('deletmsgs/'.$message->id)}}" >Delete</a>
                                        {{ $message->message_text }}


                                    </p>
                                    <span class="time_date m-1">
                                        {{ $message->created_at->diffForHumans() }}</span>
                                @elseif($message->message_file != null)
                                    <a href="..\chatfile\{{$message->message_file}}" download>
                                        <img src="" />
                                        <div style='margin-left:40px'>{{$message->message_file}}</div>
                                    </a>
                                @endif
                                </div>
                            </div>



                            
                        @else
                            <div class="incoming_msg">
                                <div class="incoming_msg_img"> <img
                                        src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                <div class="received_msg">
                                    <div class="received_withd_msg">

                                        @if ($message->message_text != null)
                                        <p>
                                            <a class="btn btn-danger" href="{{url('deletmsgs/'.$message->id)}}" >Delete</a>
                                            {{ $message->message_text }}


                                        </p>
                                        <span class="time_date">
                                            {{ $message->created_at->diffForHumans() }}</span>
                                    @elseif($message->message_file != null)
                                        <a href="..\chatfile\{{$message->message_file}}" download>
                                            <img src="" />
                                            <div style='margin-left:40px'>{{$message->message_file}}</div>
                                        </a>
                                    @endif
                                    </div>
                                </div>
                            </div>

                        @endif
                    @empty
                        <h5 style="text-align: center;color:red"> لاتوجد رسائل سابقة</h5>
                    @endforelse
                        @endif


                    </div>
                    <div class="type_msg">
                        <div class="input_msg_write">

                            <form wire:submit.prevent="sendMessage" style="position:relative" >
                                <input onkeydown='scrollDown()' wire:model.defer="messageText" type="text"
                                    class="write_msg h-100 m-0 p-2" placeholder="اكتب رسالتك" />

                                    <button  class="msg_send_btn rounded-circle position-absolute top-0 right-0  border-0" style="position:absolute;top:2; right:5%; background-color: #2196f3;width:60px;height:60px;" type="submit">
ارسال
                                    </button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

