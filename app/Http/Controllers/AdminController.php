<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Donor;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() //Admin Home Page
    {
        return view("admin.home");
    }
    public function show() //View Dashboard
    {
        // get the number of users and thier confirmations
        $userCounts = User::all()->count();
        $confirmed = Donor::where("confirmed",1)->get()->count();
        $unConfirmed = Donor::where("confirmed",0)->get()->count();
        return view("admin.dashboard",["userCounts"=>$userCounts,"confirmed"=>$confirmed,"unConfirmed"=>$unConfirmed]);
    }
    public function users() //View All Users
    {
        $users = User::orderBy("isAdmin","desc")->get();   
        return view("admin.users",["users"=>$users]);
    }
    public function confirmed() //View confirmed appointments only
    {
        $users = Donor::where("confirmed",1)->get();   
        return view("admin.confirmed",["users"=>$users]);
    }
    public function unconfirmed()//View unconfirmed appointments only
    {
        $users = Donor::where("confirmed",0)->get();   
        return view("admin.unconfirmed",["users"=>$users]);
    }
    public function allAppointments() //View all appointments 
    {
        $users = Donor::all();   
        return view("admin.all_appointments",["users"=>$users]);
    }
    public function update($id) // confirm user appointment
    {
        $donor = Donor::where(["id"=>$id])->firstOrFail();
        $donor->confirmed = true;
        $donor->save();
        
        $users = Donor::where("confirmed",0)->get();   

        return redirect(route("admin.unconfirmed"))->with(["users"=>$users]);
    }
}
