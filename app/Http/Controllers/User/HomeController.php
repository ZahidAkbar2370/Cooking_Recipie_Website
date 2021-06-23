<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("App/home");
    }


    public function recipie_detail()
    {
        return view("App/view_recipie_detail");
    }

}
