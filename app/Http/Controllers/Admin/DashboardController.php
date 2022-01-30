<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
//        dd('start');
        return view('admin.dashboard');
    }
}
