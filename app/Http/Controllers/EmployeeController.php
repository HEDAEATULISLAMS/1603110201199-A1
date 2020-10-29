<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function addemployee(){

        return view('employee.add');
    }
    public function all(){
        $employee= Employee::all();
        return view('employee.list',['employee'=>$employee]);
    }

    public function storeemployee(Request $req){
        $name=$req->name;
        $email=$req->email;
        $dob=$req->dob;
        $salary=$req->salary;
        $gender=$req->gender;
       
        $obj=new Employee();
        $obj->name=$name;
        $obj->email=$email;
        $obj->dob=$dob;
        $obj->salary=$salary;
        $obj->gender=$gender;

        if ($obj->save()){
            return redirect()->back()->with('success','Inserted Successfully');
        }
    }

}
