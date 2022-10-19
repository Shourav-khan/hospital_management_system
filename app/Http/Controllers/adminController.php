<?php

namespace App\Http\Controllers;

use App\Models\Appoinment;
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
        $doctor->p_number=$request->p_number;
        $doctor->speciality=$request->speciality;
        $doctor->room=$request->room;
       $doctor->save();

       return redirect()->back()->with('message','Doctor added successfully');



    }

    public function adminAppointments(){

        $appoint = (new AppoinmentController())->getAllAppointment();

        return view('admin.appointments',compact('appoint'));

    }

    public function approve($id){

        $data = Appoinment::find($id);

        $data->status='approved';

        $data->save();

        return redirect()->back();



    }

    public function cancel($id){

        $data = Appoinment::find($id);

        $data->status='cancel';

        $data->save();

        return redirect()->back();

    }

    public function allDoctors(){

        $doctors  = Doctor::all();

        return view('admin.allDoctors',compact(['doctors']));
    }

    public function delete($id){

        $data = Doctor::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function updateDoctor($id){

        $data = Doctor::find($id);

        return view('admin.updateDoctor',compact('data'));
    }

    public function updateDone(Request $request, Doctor $doctors){


        $request->validate([
            'd_name' => 'required',
            'p_number' => 'required',
            'speciality' => 'required',
            'room' => 'required',
            'file' => 'required'

        ]);

//        $image = $request->file;
//        if($image){
//        $imageName = time().'.'.$image->getClientOriginalExtension();
//        $image->move('ekhaneipicGula', $imageName);
//        $doctors->file=$imageName;
//
//        }

        $doctors->update($request->all());

        return redirect()->back();
    }
}
