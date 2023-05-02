<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;
use App\Models\departments;
use App\Models\marks;
use App\Models\subjects;
use Illuminate\Support\Facades\DB;

class Students_marksController extends Controller
{
    //
    public function index()
        {

        $marks=marks::with('students')->get();
        $students=students::with('marks')->get();
      
       
            return view('index', compact('students','marks'));
        }

        public function create()
        {
            return view('create');
        }

         /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(Request $request)
        {
        $validatedData = $request->validate([
        'roll_num' => 'required|max:11',
		'first_name' => 'required|max:25',
        'last_name' => 'required|max:25',
        'department_id' => 'required|max:11',
        'phone' => 'required|max:25',
        'admission_date' => 'required',
        'cet_marks' => 'required|max:11',
            
        ]);
        $show = Students::create($validatedData);
   
        return redirect('/contact')->with('success', 'Product is successfully saved');

    }



       

        public function destroy($roll_num)
        {
            students::where('roll_num', $roll_num)->delete();
            return redirect('/contact')->with('flash_message', 'Contact deleted!');  
        }

        public function edit($roll_num)
        {
            $students = students::find($roll_num);
          
       return view('edit', compact('students'));
         }

         public function update(Request $request,$roll_num){

            $students= students::find($roll_num);
            $students->first_name = $request->input('first_name');
            $students->last_name = $request->input('last_name');
            $students->department_id = $request->input('department_id');
            $students->phone = $request->input('phone');
            $students->admission_date = $request->input('admission_date');
            $students->cet_marks = $request->input('cet_marks');
            $students->update();
            return redirect('/contact')->with('status','Data update successfully');

         }

         public function show($roll_num)
         {
             $students = students::find($roll_num);
             return view('show')->with('students', $students);
         }

         public function update_marks(Request $request,$roll_num){

            
    
         }

         

      

       


       

       
        
        
        


 
  
    


   

}
