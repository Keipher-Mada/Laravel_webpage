<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
          return view('admin.home');
        }
        else
        {
          return view('user.booking');
        }
    }

    public function index()
    {

      if(Auth::id())
      {
        return view('admin.home');
      }
      else{
        return view('user.booking');
      }
     
    }
}
