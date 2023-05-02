<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Student
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="POST" action="{{ route('update-edit', ['roll_num' => $students->roll_num]) }}">
      
          <div class="form-group">
              @csrf
              <label for="country_name">Roll_num</label>
              <input type="number" class="form-control" value="{{ $students->roll_num }}"  name="roll_num"/>
          </div>
          <div class="form-group">
              @csrf
              <label for="country_name">First_name:</label>
              <input type="text" class="form-control" value="{{ $students->first_name }}" name="first_name"/>
          </div>

          <div class="form-group">
              <label for="cases">Last_name :</label>
              <input type="text" class="form-control" value="{{ $students->last_name }}" name="last_name"/>
          </div>

          <div class="form-group">
            <label for="cases">Department_id:</label>
            <input type="number" class="form-control" value="{{ $students->department_id }}" name="department_id"/>
        </div>


          <div class="form-group">
            @csrf
            <label for="country_name">Phone:</label>
            <input type="text" class="form-control" value="{{ $students->phone }}" name="phone"/>
        </div>

        <div class="form-group">
            @csrf
            <label for="country_name">Admision date:</label>
            <input type="date" class="form-control" value="{{ $students->admission_date }}" name="admission_date"/>
        </div>

        <div class="form-group">
            @csrf
            <label for="country_name">cet_marks:</label>
            <input type="number" class="form-control" value="{{ $students->cet_marks }}" name="cet_marks"/>
        </div>

          <button type="submit" class="btn btn-primary">Update</button>

          
      </form>
  </div>
</div>
@endsection
