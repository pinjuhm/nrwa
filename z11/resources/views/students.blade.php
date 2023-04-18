<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>




</head>
<body>
    <h1>Neki naslov</h1>
 
    @foreach ($students as $student)
    
    <p> {{ $student->first_name }} {{ $student->marks }}</p>
   
    @endforeach
    @csrf
   

    <form action="" method="POST">
        {{ csrf_field() }}
        
        <input type="roll_num" name="roll_num" placeholder="roll_num">
        <input type="first_name" name="first_name" placeholder="first_name">
        <input type="last_name" name="last_name" placeholder="last_name">
        <input type="phone" name="phone" placeholder="cet_marks">
        <input type="admission_date" name="admission_date" placeholder="admission_date">
        <input type="cet_marks" name="cet_marks" placeholder="cet_marks">

        <button type="submit" name="submit">Insert data</button>
    </form>

    <!-- views/posts/delete.blade.php -->
<div class="alert alert-danger">
    Are you sure you want to delete this post?
</div>

<form action="" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Yes, delete it!</button>
</form>









</body>






</html>