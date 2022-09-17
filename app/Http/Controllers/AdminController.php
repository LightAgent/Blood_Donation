<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Donor;

class AdminController extends Controller
{
    public function index()
    {
        return view("admin.home");
    }
    public function users()
    {
        $users = User::orderBy("isAdmin","desc")->get();   
        return view("admin.users",["users"=>$users]);
    }
    public function show()
    {
        $userCounts = User::all()->count();
        $confirmed = Donor::where("confirmed",1)->get()->count();
        $unConfirmed = Donor::where("confirmed",0)->get()->count();
        return view("admin.dashboard",["userCounts"=>$userCounts,"confirmed"=>$confirmed,"unConfirmed"=>$unConfirmed]);
    }
}
