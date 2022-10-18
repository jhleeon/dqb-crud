<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    public function home(){
        $students = DB::table('students')->get();
        return view('home',['students'=>$students]);
    }

    public function create(Request $request){
        DB::table('students')->insert([
            'name'=>$request->name,
            'city'=>$request->city,
            'mark'=>$request->mark,
        ]);
        return redirect(route('student.home'))->with('status','Student Added Successfully');
        
    }

    public function edit($id){
        $student = DB::table('students')->find($id);
        return view('edit',['student'=>$student]);
    }

    public function update(Request $request, $id){
        DB::table('students')->where('id',$id)->update([
            'name'=>$request->name,
            'city'=>$request->city,
            'mark'=>$request->mark,
        ]);

        return redirect(route('student.home'))->with('status',' Update Successfully!');
    }

    public function delete($id){
        DB::table('students')->where('id',$id)->delete();
        return redirect(route('student.home'))->with('status',' Delete Successfully!');
   
    }

}
