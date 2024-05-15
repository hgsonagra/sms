<?php

namespace App\Http\Controllers;

use App\Models\StudentRegistration;
use Illuminate\Http\Request;

class StudentRegistrationController extends Controller
{
    public function index(){
        return view('student.form');
    }

    public function save(Request $request){

        $request->validate([
            'photo'=> 'required',
            'name'=> 'required',
            'birthdate' => 'required',
            'fathername' => 'required',
            'number'=> 'required',
            'address'=> 'required',
            'gender'=> 'required',
        ]);

        $data = new StudentRegistration();




    }
}
