<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return Students::all();
    }

    public function getSignleStudent(Students $student)
    {
        return $student;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'department_id'=>'required',
            'addmission_date'=>'required',
            'cet_marks'=>'required'     
        ]);

        return Students::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'phone' => request('phone'),
            'department_id'=>request('department_id'),
            'addmission_date'=>request('addmission_date'),
            'cet_marks'=>request('cet_marks')
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(Students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(Students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Students $students)
    {
        request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'department_id'=>'required',
            'addmission_date'=>'required',
            'cet_marks'=>'required'     
        ]);

        $success = $students->update([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'phone' => request('phone'),
            'department_id'=>request('department_id'),
            'addmission_date'=>request('addmission_date'),
            'cet_marks'=>request('cet_marks')
        ]);

        return [
            'success'=> $success
        ]; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy(Students $students)
    {
        //
        $success = $students->delete();

        return $success;
    }
}
