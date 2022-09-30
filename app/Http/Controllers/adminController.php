<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //

    public function addDoctor(){

        return view('admin.doctors');
    }

    public function adding(Request $request){

        $doctor = new Doctor();
        $image = $request->file;

        $imageName = time().'.'.$image->getClientOriginalExtension();

        $image->move('ekhaneipicGula', $imageName);

        $doctor->file = $imageName;

        $doctor->d_name=$request->d_name;
        $doctor->p_number=$request->p_name;
        $doctor->speciality=$request->speciality;
        $doctor->room=$request->room;
       $doctor->save();

       return redirect()->back();



    }
}
