<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect(){
        if(!empty(Auth::user()) && Auth::user()->usertype == 1 ){
              return view('admin.home');

        }
        else{
            $data = product::paginate(3);
            return view('user.home',compact('data'));
        }
    }
    public function index(){

  if(Auth::id()){


    return redirect('redirect');
  } else {
        $data = product::paginate(3);
    return view('user.home',compact('data'));

  }
    }
}
