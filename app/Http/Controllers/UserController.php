<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Restoran;
use App\Models\Rate;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $users = User::latest()->get();
        return view('user', compact('users'));
    }
}
