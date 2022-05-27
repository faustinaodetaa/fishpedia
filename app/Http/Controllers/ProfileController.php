<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //

    public function index(){
        $profile = auth()->user()->profile;
        return view('profile', compact('profile'));
    }
}
