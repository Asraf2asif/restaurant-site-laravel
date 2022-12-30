<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    private $navdata = [
            ["text" => "home", "href" => "#home"],
            ["text" => "about", "href" => "#about"],
            ["text" => "menu", "href" => "#menu"],
            ["text" => "shef", "href" => "#shef"],
            ["text" => "testimonial", "href" => "#testimonial"],
            ["text" => "contact", "href" => "#contact"],
        ];

    public function index()
    {
        $navdata = $this->navdata;
        return view("home.index", compact('navdata'));
    }

    public function redirects()
    {
        $navdata = $this->navdata;
        if($usertype === '1'){
            return view("admin.index", compact('navdata'));
        }
        else{
            return view("home.index", compact('navdata'));
        }
    }
}
