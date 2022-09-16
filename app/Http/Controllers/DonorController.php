<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;
use Illuminate\Support\Facades\Auth;

class DonorController extends Controller
{
    public function index()
    {
        return view("welcome");
    }
    
    public function create()
    {
        return view("book");
    }
    public function appointments()
    {
        $donor = Donor::where("userId",Auth::id())->get();
        // error_log($donor);
        return view("appointments",['details'=>$donor]);
    }
    public function store()
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
    public function thanks()
    {
        return view("thanks");
    }
    public function show($id)
    {
        $donor = Donor::where(["id"=>$id,"userId"=>Auth::id()])->firstOrFail();
        // error_log($donor);
        return view("show",['donor'=>$donor]);
    }
    public function update($id)
    {
        $donor = Donor::where(["id"=>$id,"userId"=>Auth::id()])->firstOrFail();
        $donor->name = request("name");
        $donor->email = request("email");
        $donor->phone = request("phone");
        $donor->userId = Auth::id();
        $donor->nationalid = request("nationalid");
        $donor->date = request("date");
        
        $donor->save();

        return redirect(route("appointments"));
    }
    public function destroy($id)
    {
        $donor = Donor::where(["id"=>$id,"userId"=>Auth::id()])->firstOrFail();
        $donor->delete();
        return redirect(route("appointments"));
    }
}
