<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    //

    public function userBasedView(){

        if(Auth::id()){

            if(Auth::user()->user_designation == 'n_user'){

                return view('user.dashboard');

            }else{

                return view('admin.dashboard');
            }


        }else{

            return redirect()->back();
        }

    }
    public function index(){
        return view('user.dashboard');
    }


}
