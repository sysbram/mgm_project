<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use \App\User;
use \App\Model\Access_admin;
use \App\Model\Menu;

class DashboardController extends Controller
{
    public function index(){

        $admin = User::all();
        $access = Access_admin::where('id',Auth::user()->id)->get();
        return view('dashboard/index', ['admin' => $admin]);
    }

}
