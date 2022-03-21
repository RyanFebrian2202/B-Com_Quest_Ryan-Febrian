<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use App\Models\Pastry;
use App\Models\Tea;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function getAdminPage(){

        $teas = Tea::all();
        $coffees = Coffee::all();
        $pastries = Pastry::all();

        return view('admin.admin-home',compact('teas','coffees','pastries'));
    }

    public function adminProductPage(){

        $teas = Tea::all();
        $coffees = Coffee::all();
        $pastries = Pastry::all();

        return view('admin.admin-product',compact('teas','coffees','pastries'));
    }
}
