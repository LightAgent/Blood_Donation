<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doner;

class DonerController extends Controller
{
    public function index()
    {
        return view("welcome");
    }
    
    public function create()
    {
        return view("book");
    }
    public function store()
    {
        $donor = new Doner();

        return view("thanks");
    }
    
}
