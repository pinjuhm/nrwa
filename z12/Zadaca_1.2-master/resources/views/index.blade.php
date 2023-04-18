<!-- index.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td> ID </td>
          <td> Name </td>
          <td> Surname </td>
          <td> Department_id </td>
          <td> <p>phone </p></td>
          <td> Admission data </td>
          <td> Cet_marks </td>
         
        </tr>
    </thead>
    <tbody>
        @foreach($Students as $Student)
        <tr>
            <td>{{$Student->roll_num}}</td>
            <td>{{$Student->first_name}}</td>
            <td>{{$Student->last_name}}</td>
            <td>{{$Student->department_id}}</td>
            <td>{{$Student->phone}}</td>
            <td><p>{{$Student->admission_date}}</p></td>
            <td><p>{{$Student->cet_marks}}</p></td>
            
            <td>
                
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
