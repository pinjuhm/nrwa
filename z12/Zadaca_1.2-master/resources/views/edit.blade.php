<!-- edit.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Product Data
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
    <form action="{{ route('Products.destroy')}}" method="post">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">First Name:</label>
              <input type="text" class="form-control" name="first_name"name="name" value="{{ $Students->first_name }}"/>
          </div>
		            <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">last name:</label>
              <input type="text" class="form-control" name="last_name" value="{{ $Students->last_name }}"/>
          </div>
          <div class="form-group">
              <label for="cases">department_id :</label>
              <input type="number" class="form-control" name="department_id" value="{{ $Students->department_id }}"/>
          </div>

          <div class="form-group">
            <label for="cases">Phone :</label>
            <input type="text" class="form-control" name="phone" value="{{ $Students->phone }}"/>
        </div>

        <div class="form-group">
            <label for="cases">admission_data :</label>
            <input type="date" class="form-control" name="admission_date" value="{{ $Students->admission_date }}"/>
        </div>

        <div class="form-group">
            <label for="cases">cet_marks :</label>
            <input type="number" class="form-control" name="cet_marks" value="{{ $Students->cet_marks }}"/>
        </div>

        
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection
