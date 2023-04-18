<?php

namespace App\Http\Controllers;
use App\Models\students;
use App\Models\marks;
use App\Models\subjects;
use App\resources\view;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $marks=marks::with('students')->get();
        $students=students::with('marks')->get();
       return view('students',compact('marks','students'));
    }

  



}
