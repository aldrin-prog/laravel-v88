<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function index(){
        $employees=Employee::all();
        return view('employee_list',['employees'=>$employees]);
    }
    public function show($id){
        $employee=Employee::find($id);
        return view('employee_view',['employee'=>$employee]);
    }
    public function edit($id){
        $employee=Employee::find($id);
        return view('employee_edit',['employee'=>$employee]);
    }
    public function new(){
        return view('employee_new');
    }
    public function patch($id){
        request()->validate(Employee::$rules);
        $employee = Employee::findOrFail($id);
        $employee->name=request()->input('name');
        $employee->age=request()->input('age');
        $employee->job_title=request()->input('job_title');
        $employee->department=request()->input('department');
        $employee->save();
        return redirect(route('employee'));
    }
    public function destroy($id){
        $employee=Employee::find($id);
        $employee->delete();
        return redirect(route('employee'));
    }
    public function add(Request $request){
        $request->validate(Employee::$rules);
        $name=$request->input('name');
        $age=$request->input('age');
        $job_title=$request->input('job_title');
        $department=$request->input('department');
        $new_employee=Employee::create(['name'=>$name,'age'=>$age,'job_title'=>$job_title,'department'=>$department]);
        return redirect(route('employee'));
    }
    public function goback(){
        return redirect()->back(); 
    }
}
