<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Students;


class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Students = Students::all();
        
        return view('index',compact('Students'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return "view('create')";
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
   
        return redirect('/product')->with('success', 'Product is successfully saved');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($roll_num)
    {
            $Students = Students::findOrFail($roll_num);
    
            return view('edit', compact('Students'));
    }
    
    


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $roll_num)
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
        Students::whereId($roll_num)->update($validatedData);

        return redirect('/Products')->with('success', 'Product Data is successfully updated');

}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
