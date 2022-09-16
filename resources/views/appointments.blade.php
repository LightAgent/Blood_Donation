@extends('layouts.app')
@section('title',"My Appointments")
@section("head")

@endsection
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">National ID</th>
        <th scope="col">Date</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($details as $detail)
        <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <td>{{$detail->name}}</td>
            <td>{{$detail->email}}</td>
            <td>{{$detail->phone}}</td>
            <td>{{$detail->nationalid}}</td>
            <td>{{$detail->date}}</td>            
            <td><a href="/edit/{{$detail->id}}"><button type="button" class="btn btn-info">Edit</button></a></td>            
            
            <td>
                <form action="/appointments/{{$detail->id}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button class="btn btn-danger">Remove</button>
                </form>

            </td>
        </tr>
        @endforeach
      
    </tbody>
</table>

@endsection