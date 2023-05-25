<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    //
    public function result(Request $request){
        $request->validate([
            'fullname'=>'required',
            'email'=>'required|email',
            'phoneNumber'=>'required|numeric',
            'resumeLink'=>'required',
            'coverLetter'=>'required',
            'position'=>'required',
            'expectedSalary'=>'required|numeric'
        ]);
        $data=[
            'fullname'=>$request->input('fullname'),
            'email'=>$request->input('email'),
            'phoneNumber'=>$request->input('phoneNumber'),
            'resumeLink'=>$request->input('resumeLink'),
            'coverLetter'=>$request->input('coverLetter'),
            'position'=>$request->input('position'),
            'expectedSalary'=>$request->input('expectedSalary')
        ];

        return view('result',$data);
    }
}
