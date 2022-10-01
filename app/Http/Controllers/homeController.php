<?php

namespace App\Http\Controllers;

use App\Models\Appoinment;
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

    public function appoinmentIn(Request $request){

        $appoinment = new Appoinment();



        $appoinment->full_name = $request->full_name;
        $appoinment->email = $request->email;
        $appoinment->date = $request->date;
        $appoinment->department = $request->doctors;
        $appoinment->number = $request->number;
        $appoinment->message = $request->message;
        $appoinment->status = 'in Progress';

        if (Auth::id())
        {
            $appoinment->user_id = Auth::user()->id;
        }

        $appoinment->save();

        return redirect()->back()->with('message','Appoinment is successfully done');




    }


}
