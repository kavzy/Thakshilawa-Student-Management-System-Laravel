@extends('studentsearch')

@section('content')

<table class="table table-dark table-hover">
                    <th>ID</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Class</th>
                    <th>Birthday</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>NIC</th>
                    <th>Action</th>

                @foreach($students as $student)    
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->firstname}}</td>
                        <td>{{$student->lastname}}</td>
                        <td>{{$student->class}}</td>
                        <td>{{$student->birthday}}</td>
                        <td>{{$student->contact}}</td>
                        <td>{{$student->address}}</td>
                        <td>{{$student->nic}}</td>
                        <td><a href="/studentedit/{{$student->id}}" class="btn btn-primary">EDIT</a><span> </span><a href="/studentdelete/{{$student->id}}" class="btn btn-danger">DELETE</a></td>
                    </tr>
                @endforeach
                  
                </table>

@endsection