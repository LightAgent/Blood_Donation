@extends('layouts.app')

@section('title',"All Appointments")

@section("content")
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">National ID</th>
        <th scope="col">Appointment Date</th>
        <th scope="col">Last Update</th>
        <th scope="col">Confirmed</th>
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
            <td>{{$user->updated_at}}</td>
            <td>
                @php
                echo $user->confirmed ? "Yes":"No" 
                @endphp
            </td>
        </tr>
        @endforeach
      
    </tbody>
</table>
@endsection