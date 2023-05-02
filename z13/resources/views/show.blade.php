
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
    <form method="POST" action="{{ route('contact-view', ['roll_num' => $students->roll_num]) }}">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->first_name }}</h5>
       
       <p class="card-title">Ocjene : {{ $students->marks }}</p> 

       <div class="form-group">
        @csrf
       

    </div>
       
        
        
       
  </div>
    </form>
      
    </hr>
  
  </div>
</div>