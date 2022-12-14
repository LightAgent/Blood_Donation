@extends('layouts.app')

@section('title',"All Users")

@section("content")
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Admin</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                @php
                echo $user->isAdmin ? "Yes":"No" 
                @endphp
            </td>
        </tr>
        @endforeach
      
    </tbody>
</table>

@endsection