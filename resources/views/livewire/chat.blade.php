<div wire:poll>
    <div class="container">
        <h3 class=" text-center">

            @if (!$reciever)

                    </h3>
                    <div class="messaging">
                        <div class="inbox_msg row">
                            <div class="col-12 col-md-4 border-1 border p-0">
                                <div class="headind_srch ">
                                    <div class="recent_heading">
                                    <h4>Recent</h4>
                                    </div>
                                </div>
                                <!-- inbox chat users -->
                                <div class="inbox_chat h-100">


                                @if ($user != null)
                                    @foreach ($user as $item)

                                        <div class="chat_list active_chat">
                                            <div class="chat_people">
                                                <div class="chat_img">
                                                    <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                                                </div>
                                                <div class="chat_ib">
                                                    <a href="{{url('patientchatnow/'.$item->id)}}" >
                                                        <h5>
                                                            {{$item->name}}
                                                            <span class="chat_date"></span>
                                                        </h5>
                                                    </a>
                                                    <p>
                                                        @if(\App\Models\Message::where('reciever_id',1)->where('user_id',$item->id)->where('status',0)->count()==0)
                                                        {{\App\Models\Message::where('reciever_id',1)->where('user_id',$item->id)->where('status',0)->count()}}
                                                        @else
                                                        <audio autoplay="true">
                                                            <source src="audios/ms.mp3" type="audio/mpeg">
                                                          </audio>
                                                    <p style="color: red">{{\App\Models\Message::where('reciever_id',1)->where('user_id',$item->id)->where('status',0)->count()}} New Messages
                                                    </p>
                                                @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                        @if(Auth::user()->usertype == '1')
                                                @foreach ($users as $item)
                                                    <div class="chat_list active_chat">
                                                        <div class="chat_people">
                                                            <div class="chat_img">
                                                                <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                                                            </div>
                                                            <div class="chat_ib">
                                                                <a href="{{url('patientchatnow/'.$item->id)}}" >
                                                                    <h5>
                                                                        {{$item->name}}
                                                                        <span class="chat_date"></span>
                                                                    </h5>
                                                                </a>
                                                                <p>
                                                                    @if(\App\Models\Message::where('reciever_id',1)->where('user_id',$item->id)->where('status',0)->count()==0)
                                                                    {{\App\Models\Message::where('reciever_id',1)->where('user_id',$item->id)->where('status',0)->count()}}
                                                                    @else
                                                                    <audio autoplay="true">
                                                                        <source src="audios/ms.mp3" type="audio/mpeg">
                                                                      </audio>
                                                                <p style="color: red">{{\App\Models\Message::where('reciever_id',1)->where('user_id',$item->id)->where('status',0)->count()}} New Messages
                                                                </p>
                                                            @endif
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                        @else

                                            @foreach ($users as $item)
                                                   @if($item->usertype != 'Admin')
                                                        @if (auth()->user()->usertype == 'Doctor')
                                                            <div class="chat_list active_chat">
                                                                <div class="chat_people">
                                                                        <div class="chat_img">
                                                                            <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                                                                        </div>
                                                                        <div class="chat_ib">
                                                                            <a href="{{url('patientchatnow/'.$item->id)}}" >
                                                                                <h5>
                                                                                    {{$item->name}}
                                                                                    <span class="chat_date"></span>
                                                                                </h5>
                                                                            </a>
                                                                            <p>
                                                                                @if(\App\Models\Message::where('reciever_id',1)->where('user_id',$item->id)->where('status',0)->count()==0)
                                                                                {{\App\Models\Message::where('reciever_id',1)->where('user_id',$item->id)->where('status',0)->count()}}
                                                                                @else
                                                                                <audio autoplay="true">
                                                                                    <source src="audios/ms.mp3" type="audio/mpeg">
                                                                                  </audio>
                                                                            <p style="color: red">{{\App\Models\Message::where('reciever_id',1)->where('user_id',$item->id)->where('status',0)->count()}} New Messages
                                                                            </p>
                                                                        @endif
                                                                            </p>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        @else
                                                            <div class="chat_list active_chat">
                                                                <div class="chat_people">
                                                                        <div class="chat_img">
                                                                            <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                                                                        </div>
                                                                        <div class="chat_ib">
                                                                            <a href="{{url('patientchatnow/'.$item->id)}}" >
                                                                                <h5>
                                                                                    {{$item->name}}
                                                                                    <span class="chat_date"></span>
                                                                                </h5>
                                                                            </a>
                                                                            <p>
                                                                                @if(\App\Models\Message::where('reciever_id',1)->where('user_id',$item->id)->where('status',0)->count()==0)
                                                                                {{\App\Models\Message::where('reciever_id',1)->where('user_id',$item->id)->where('status',0)->count()}}
                                                                                @else
                                                                                <audio autoplay="true">
                                                                                    <source src="audios/ms.mp3" type="audio/mpeg">
                                                                                  </audio>
                                                                            <p style="color: red">{{\App\Models\Message::where('reciever_id',1)->where('user_id',$item->id)->where('status',0)->count()}} New Messages
                                                                            </p>
                                                                        @endif
                                                                            </p>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endif
                                                @endforeach
                                        @endif
                                @endif
                                </div>
                            </div>
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
                                                        <a class="btn btn-danger" href="{{url('deletmsg/'.$message->id)}}" >Delete</a>
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
                                                        <a class="btn btn-danger" href="{{url('deletmsg/'.$message->id)}}" >Delete</a>
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
                                    <h5 style="text-align: center;color:red"> اختر محادثة لبدء الدردشة </h5>
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
                                                    <a class="btn btn-danger" href="{{url('deletmsg/'.$message->id)}}" >Delete</a>
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
                                                        <a class="btn btn-danger" href="{{url('deletmsg/'.$message->id)}}" >Delete</a>
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
                                    <h5 style="text-align: center;color:red"> اختر محادثة لبدء الدردشة</h5>
                                @endforelse
                                    @endif


                                </div>

            @else
            <br>
            <a class="btn btn-danger" href="{{ Url('/deletchat/'.$reciever) }}">حذف المحادثة</a>
{{--
             @if($name->name != null)
            <p>{{$name->name}}</p>
            @endif  --}}
        </h3>
        <div class="messaging">
            <div class="inbox_msg row">
                <div class="col-12 col-md-4 border-1 border p-0">
                    <div class="headind_srch ">
                        <div class="recent_heading">
                        <h4>Recent</h4>
                        </div>
                        <div class="srch_bar">
                            <div class="stylish-input-group">

                                    <input type="text" class="search-bar" wire:keydown="search" wire:model.defer="searchh"  placeholder="Search" >

                            </div>
                        </div>
                    </div>
                    <!-- inbox chat users -->
                    <div class="inbox_chat h-100">


                    @if ($user != null)
                        @foreach ($user as $item)

                            <div class="chat_list active_chat">
                                <div class="chat_people">
                                    <div class="chat_img">
                                        <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                                    </div>
                                    <div class="chat_ib">
                                        <a href="{{url('patientchatnow/'.$item->id)}}" >
                                            <h5>
                                                {{$item->name}}
                                                <span class="chat_date"></span>
                                            </h5>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                            @if(Auth::user()->usertype == '1')
                                    @foreach ($users as $item)
                                        <div class="chat_list active_chat">
                                            <div class="chat_people">
                                                <div class="chat_img">
                                                    <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                                                </div>
                                                <div class="chat_ib">
                                                    <a href="{{url('patientchatnow/'.$item->id)}}" >
                                                        <h5>
                                                            {{$item->name}}
                                                            <span class="chat_date"></span>
                                                        </h5>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                            @else

                                @foreach ($users as $item)
                                       @if($item->usertype != 'Admin')
                                            @if (auth()->user()->usertype == 'Doctor')
                                                <div class="chat_list active_chat">
                                                    <div class="chat_people">
                                                            <div class="chat_img">
                                                                <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                                                            </div>
                                                            <div class="chat_ib">
                                                                <a href="{{url('patientchatnow/'.$item->id)}}" >
                                                                    <h5>
                                                                        {{$item->name}}
                                                                        <span class="chat_date"></span>
                                                                    </h5>
                                                                </a>

                                                            </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="chat_list active_chat">
                                                    <div class="chat_people">
                                                            <div class="chat_img">
                                                                <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                                                            </div>
                                                            <div class="chat_ib">
                                                                <a href="{{url('patientchatnow/'.$item->id)}}" >
                                                                    <h5>
                                                                        {{$item->name}}
                                                                        <span class="chat_date"></span>
                                                                    </h5>
                                                                </a>

                                                            </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endif
                                    @endforeach
                            @endif
                    @endif
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <input style="margin-bottom: 20px;margin-left:30px;" class="search-bar w-75 d-block m-auto my-2 form-control rounded-pill" type="text"  wire:keydown="searchchat" wire:model.defer="searchchat"  placeholder="Search" >
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
                                            <a class="btn btn-danger" href="{{url('deletmsg/'.$message->id)}}" >Delete</a>
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
                                            <a class="btn btn-danger" href="{{url('deletmsg/'.$message->id)}}" >Delete</a>
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
                                        <a class="btn btn-danger" href="{{url('deletmsg/'.$message->id)}}" >Delete</a>
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
                                            <a class="btn btn-danger" href="{{url('deletmsg/'.$message->id)}}" >Delete</a>
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

                            <form wire:submit.prevent="sendMessage" style="position:relative">
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
@endif

