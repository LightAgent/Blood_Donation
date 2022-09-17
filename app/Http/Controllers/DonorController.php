<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;
use Illuminate\Support\Facades\Auth;

class DonorController extends Controller
{
    public function index() // show the home page
    {
        return view("user.welcome");
    }
    
    public function create() // book a new appointment
    {
        return view("user.book");
    }
    public function appointments() // view all appointments
    {
        $donor = Donor::where("userId",Auth::id())->get();
        // error_log($donor);
        return view("user.appointments",['details'=>$donor]);
    }
    public function store() // store user's data
    {
        $donor = new Donor();
        $donor->name = request("name");
        $donor->email = request("email");
        $donor->phone = request("phone");
        $donor->userId = Auth::id();
        $donor->nationalid = request("nationalid");
        $donor->date = request("date");

        $donor->save();

        return redirect("/thanks");
    }
    public function thanks() // view thanks page
    {
        return view("user.thanks");
    }
    public function show($id) // show donor appointment
    {
        $donor = Donor::where(["id"=>$id,"userId"=>Auth::id()])->firstOrFail();
        // error_log($donor);
        return view("user.show",['donor'=>$donor]);
    }
    public function update($id) //  update user's info
    {
        $donor = Donor::where(["id"=>$id,"userId"=>Auth::id()])->firstOrFail();
        $donor->name = request("name");
        $donor->email = request("email");
        $donor->phone = request("phone");
        $donor->userId = Auth::id();
        $donor->nationalid = request("nationalid");
        $donor->date = request("date");
        $donor->confirmed = false;
        
        $donor->save();

        return redirect(route("appointments"));
    }
    public function destroy($id) // remove appointment
    {
        $donor = Donor::where(["id"=>$id,"userId"=>Auth::id()])->firstOrFail();
        $donor->delete();
        return redirect(route("appointments"));
    }
}
