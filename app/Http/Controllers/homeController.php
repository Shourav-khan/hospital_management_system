<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    //

    public function userBasedView(){

        if(Auth::id()){

            if(Auth::user()->user_designation == 'n_user'){

                $doctors = Doctor::all();

                return view('user.dashboard', compact('doctors'));

            }else{

                return view('admin.dashboard');
            }


        }else{

            return redirect()->back();
        }

    }
    public function index(){

        if(Auth::id()){

            return redirect('home');

        }else

        $doctors = Doctor::all();
        return view('user.dashboard',compact('doctors'));

    }


}
