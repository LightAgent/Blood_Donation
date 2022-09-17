@extends('layouts.app')
@section('title',"Admin Dashboard")

@section("head")
<link href="{{ asset('styles/dashboard.css') }}" rel="stylesheet" type="text/css" >
@endsection

@section("content")

<div class="container py-5">
    <div class="row">
  
      <div class="col-xl-3 col-lg-6 mb-4">
        <div class="bg-white rounded-lg p-5 shadow">
          <h4 class="fonts-weight-bold text-center mb-4">All Appointments</h4>
  
          <!-- Progress bar 1 -->
          <div class="progress mx-auto" data-value='80'>
            <span class="progress-left">
                          <span class="progress-bar border-primary"></span>
            </span>
            <span class="progress-right">
                          <span class="progress-bar border-primary"></span>
            </span>
            <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
              <div class="h2 font-weight-bold">{{$unConfirmed + $confirmed}}</div>
            </div>
          </div>
          <!-- END -->
  
          <!-- Demo info -->
          <div class="row text-center mt-4">
            <a href="/allusers"><button class="btn btn-primary">Check All</button></a>          </div>
          <!-- END -->
        </div>
      </div>
  
      <div class="col-xl-3 col-lg-6 mb-4">
        <div class="bg-white rounded-lg p-5 shadow">
          <h4 class="text-center">Confirmed Appointments</h4>
  
          <!-- Progress bar 2 -->
          <div class="progress mx-auto" data-value='25'>
            <span class="progress-left">
                          <span class="progress-bar border-danger"></span>
            </span>
            <span class="progress-right">
                          <span class="progress-bar border-danger"></span>
            </span>
            <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
              <div class="h2 font-weight-bold">{{$confirmed}}</div>
            </div>
          </div>
          <!-- END -->
  
          <!-- Demo info-->
          <div class="row text-center mt-4">
            <a href="/allusers"><button class="btn btn-primary">Check All</button></a>        </div>
          <!-- END -->
        </div>
      </div>
  
      <div class="col-xl-3 col-lg-6 mb-4">
        <div class="bg-white rounded-lg p-5 shadow">
          <h4 class="font-weight-bold text-center mb-4">Unconfirmed Appointments</h2>
  
          <!-- Progress bar 3 -->
          <div class="progress mx-auto" data-value='76'>
            <span class="progress-left">
                          <span class="progress-bar border-success"></span>
            </span>
            <span class="progress-right">
                          <span class="progress-bar border-success"></span>
            </span>
            <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
              <div class="h2 font-weight-bold">{{$unConfirmed}}</div>
            </div>
          </div>
          <!-- END -->
  
          <!-- Demo info -->
          <div class="row text-center mt-4">
            <a href="/allusers"><button class="btn btn-primary">Check All</button></a>        </div>
          <!-- END -->
        </div>
      </div>
  
      <div class="col-xl-3 col-lg-6 mb-4">
        <div class="bg-white rounded-lg p-5 shadow">
          <h4 class="font-weight-bold text-center mb-4">All Users</h4>
  
          <!-- Progress bar 4 -->
          <div class="progress mx-auto" data-value='12'>
            <span class="progress-left">
                          <span class="progress-bar border-warning"></span>
            </span>
            <span class="progress-right">
                          <span class="progress-bar border-warning"></span>
            </span>
            <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
              <div class="h2 font-weight-bold">{{$userCounts}}</div>
            </div>
          </div>
          <!-- END -->
  
          <!-- Demo info -->
          <div class="row text-center mt-4">
            <a href="/allusers"><button class="btn btn-primary">Check All</button></a>
        </div>
          <!-- END -->
        </div>
      </div>
    </div>
  </div>
@endsection