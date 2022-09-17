@extends('layouts.app')

@section('title',"Unconfirmed Appointments")

@section("content")
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">National ID</th>
        <th scope="col">Date</th>
        <th scope="col">Confirm</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->nationalid}}</td>
            <td>{{$user->date}}</td>
            <td><a href="/admin/confirm/{{$user->id}}"><button class="btn btn-success">Confirm Appointment</button></a></td>    
        </tr>
        @endforeach
      
    </tbody>
</table>
@endsection