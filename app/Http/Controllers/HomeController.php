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
        ["text" => "chef", "href" => "#chef"],
        ["text" => "testimonial", "href" => "#testimonial"],
        ["text" => "contact", "href" => "#contact"],
    ];

    private $fooddata = [
        ["name" => "Mexican Eggrolls", "img" => "assets/images/food1.jpg", 
        "price" => 14.50, "desc" => "Face together given moveth divided form Of Seasons that fruitful."],
        ["name" => "chicken burger", "img" => "assets/images/food2.jpg", 
        "price" => 9.10, "desc" => "Together face given divided moveth Seasons form Of that fruitful."],
        ["name" => "topu lasange", "img" => "assets/images/food3.jpg", 
        "price" => 12.09, "desc" => "Form face together moveth given divided Of that Seasons fruitful."],
        ["name" => "pepper potatoas", "img" => "assets/images/food4.jpg", 
        "price" => 13.20, "desc" => "Given Face together divided moveth form Of that fruitful Seasons."],
        ["name" => "bean salad", "img" => "assets/images/food5.jpg", 
        "price" => 8.55, "desc" => "Face together given moveth divided form Of Seasons that fruitful."],
        ["name" => "beatball hoagie", "img" => "assets/images/food6.jpg", 
        "price" => 11.80, "desc" => "Together face given divided moveth Seasons form Of that fruitful."],
    ];

    public function index()
    {
        $navdata = $this->navdata;
        $fooddata = $this->fooddata;
        return view("home.index", compact('navdata', 'fooddata'));
    }

    public function redirects()
    {
        $navdata = $this->navdata;
        $fooddata = $this->fooddata;
        $usertype = Auth::user()->usertype;
        if($usertype === '1'){
            return view("admin.index", compact('navdata'));
        }
        else{
            return view("home.index", compact('navdata', 'fooddata'));
        }
    }
}
