<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;
use App\Models\marks;

class studentsController extends Controller
{
    //
    function getData(){
        
        $students =students::all();
        return view('students', compact('students'));
    }

    public function create(){
        return view('students');
    }

    public function store(Request $request){
        $this->validate($request,[
            'roll_num'=> 'required',
            'first_name'=> 'required',
            'last_name'=> 'required',
            'phone'=>'required',
            'admission_date'=> 'required',
            'cet_marks'=> 'required',
            
            


        ]);

        $emps = new students;
        $emps->roll_num = $request->input('roll_num');
        $emps->first_name = $request->input('first_name');
        $emps->last_name = $request->input('last_name');
        $emps->phone = $request->input('phone');
        $emps->admission_date = $request->input('admission_date');
        $emps->cet_marks = $request->input('cet_marks');

        $emps->save();

        return redirect()->route('students')->with('success','Data Inserted');


    }

    public function destroy(students $post)
{
    $post->delete();
    return redirect()->route('posts.index')
                     ->with('success','Post deleted successfully');
}

  
}
