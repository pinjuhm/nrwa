
@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">List students</div>
                    <div class="card-body">
                        <a href="{{ url('/contact/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Students
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                        
                            <table class="table">

                                <thead>
                                    <tr>
            
                                        <th scope="col">Roll_num</th>
                                        <th scope="col">Ime</th>
                                        <th scope="col">Prezime</th>
                                        <th scope="col">Odjeljenje</th>
                                        
                                        <th scope="col">Phone</th>  
                                        <td rowspan="1"></td>
                                        <th scope="col">admission_data</th>
                                        <td rowspan="1">   </td>
                                        <th scope="col">cet_marks</th>
                                      </tr>
                                </thead>
                                <tbody>

                                @foreach($students as $row)
                                    <tr>
                                        <tr>
                                            <td>{{ $row->roll_num}}</td>
                                            <td>{{ $row->first_name}}</td>
                                            <td>{{ $row->last_name}}</td>
                                            <td>{{ $row->department_id}}</td>
                                            <td>{{ $row->phone}}</td>
                                            <td rowspan="1"></td>
                                            <td>{{ $row->admission_date}}</td>
                                            <td rowspan="1">   </td>
                                            <td>{{ $row->cet_marks}}</td>
 
                                        <td>
                                            <a href="{{ url('contact-view/' . $row->roll_num . $row->marks) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('update-edit/' . $row->roll_num) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/contact' . '/' . $row->roll_num) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                            
 
                                            
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                       
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop

