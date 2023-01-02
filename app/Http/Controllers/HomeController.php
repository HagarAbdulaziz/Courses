<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){

        if(Auth::id()){
          return redirect('redirects');
        }else{
          return view("welcome");
        }
       }
        public function index(){
          $usertype=Auth::user()->usertype;
          if($usertype=='Admin')
         {
           return view('dashboard.index');
           //دي عشان اليوزر تايب وانت بتضيف خلي بالك عند التلاتة دول
         }
         else{
             return view('chatuser');
         }
      }
}
