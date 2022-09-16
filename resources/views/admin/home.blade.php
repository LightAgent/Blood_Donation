@extends('layouts.app')

@section('title',"Logged in!")

@section("head")
<link href="{{ asset('styles/main.css') }}" rel="stylesheet" type="text/css" >
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body center-div">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}<br>
                    
                    
                </div>
                <div class="center-div">
                    <a href="/dashboard"><button class="btn btn-success">View Dashboard</button></a>
                </div>
                <div class="center-div">
                    <a href="/"><button class="btn btn-secondary">Back Home</button><br></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
