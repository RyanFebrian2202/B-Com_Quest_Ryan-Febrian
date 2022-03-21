<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use App\Models\Pastry;
use App\Models\Tea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getHomePage(){
        return view('home.home');
    }

    public function getAboutPage(){
        return view('home.about');
    }

    public function getProductPage(){

        $teas = Tea::all();
        $coffees = Coffee::all();
        $pastries = Pastry::all();

        return view('home.product',compact('teas','coffees','pastries'));
    }

    public function getContactPage(){
        return view('home.contact');
    }

    public function getRegistrationPage(){
        return view('home.registration');
    }

    public function getLoginPage(){
        return view('home.login');
    }

    public function getMemberPage(){
        return view('member.member-home');
    }

}
