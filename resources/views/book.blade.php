@extends('layouts.app')
@section('title',"Booking")

@section("head")
<link href="{{ asset('styles/main.css') }}" rel="stylesheet" type="text/css" >
@endsection

@section('content')

<div class="center-div">
  <!-- Start Card -->
  <div class="card h-100 d-flex align-items-center justify-content-center" style="width: 25rem;">
    <!-- Start Card Body -->
    <div class="card-body">
      <!-- Start Form -->
      <form id="bookingForm" action="#" method="" >
        <div class="center-div"><h3>Donor's information</h3></div>
        <!-- Start Input Name -->
        <div class="form-group">
          <label for="finputName">Name</label>
          <input type="text" class="form-control" id="inputFName" name="fname" placeholder="Donor's Full Name" required />
        </div>
        <!-- End Input Name -->
        
        <!-- Start Input Email -->
        <div class="form-group">
          <label for="inputEmail">Email</label>
          <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Donor's Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
          <small class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <!-- End Input Email -->

        <!-- Start Input Telephone -->
        <div class="form-group">
          <label for="inputPhone">Phone</label>
          <input type="tel" class="form-control" id="inputPhone" name="phone" placeholder="+20XXXXXXXXX" pattern="\d{3}\d{3}\d{4}" required />
          <small class="form-text text-muted">We'll never share your phone number with anyone else.</small>
        </div>
        <!-- End Input Telephone -->
        <!-- Start Input ID -->
        <div class="form-group space">
          <label for="nationalid">National ID</label>
          <input type="number" class="form-control" id="nationalid" name="nationalid" placeholder="XXXXXXXXXXXXXX" required />
        </div>
        <!-- End Input ID -->
        
        <!-- Start Input Date , Start Time and End Time -->
        <div class="form-row">
          <!-- Start Input Date -->
          <div class="form-group ">
            <label for="inputDate">Date</label>
            <input type="date" class="form-control" id="inputDate" name="date" required />
            <small class="form-text text-muted">Please choose date and time for meeting.</small>
          </div>
          <!-- End Input Date -->

        <!-- Start Submit Button -->
        <div class="center-div"><button class="btn btn-primary btn-block " type="submit">Submit</button></div>
        <!-- End Submit Button -->
      </form>
      <!-- End Form -->
    </div>
    <!-- End Card Body -->
  </div>
</div>
<script>
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();

    if (dd < 10) {
    dd = '0' + dd
    }

    if (mm < 10) {
    mm = '0' + mm
    }

    today = yyyy + '-' + mm + '-' + dd;
    document.getElementById('inputDate').setAttribute("min", today);
</script>

@endsection