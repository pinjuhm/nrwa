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
    Add Products Data
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
      <form method="post" action="{{ route('product.store') }}">
          <div class="form-group">
              @csrf
              <label for="country_name">Roll_num</label>
              <input type="number" class="form-control" name="roll_num"/>
          </div>
          <div class="form-group">
              @csrf
              <label for="country_name">First_name:</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>

          <div class="form-group">
              <label for="cases">Last_name :</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>

          <div class="form-group">
            <label for="cases">Department_id:</label>
            <input type="number" class="form-control" name="department_id"/>
        </div>


          <div class="form-group">
            @csrf
            <label for="country_name">Phone:</label>
            <input type="text" class="form-control" name="phone"/>
        </div>

        <div class="form-group">
            @csrf
            <label for="country_name">Admision date:</label>
            <input type="date" class="form-control" name="admission_date"/>
        </div>

        <div class="form-group">
            @csrf
            <label for="country_name">cet_marks:</label>
            <input type="number" class="form-control" name="cet_marks"/>
        </div>

          <button type="submit" class="btn btn-primary">Add Product</button>

          
      </form>
  </div>
</div>
@endsection
