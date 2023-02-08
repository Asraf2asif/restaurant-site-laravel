<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Specialdishes;


class HomeController extends Controller
{
    private $navdata = [
        ["text" => "home", "href" => "#home"],
        ["text" => "about", "href" => "#about"],
        ["text" => "menu", "href" => "#menu"],        
        ["text" => "testimonial", "href" => "#testimonial"],
        ["text" => "book", "href" => "#book"],
        ["text" => "contact", "href" => "#contact"],
    ];

    public function homeCtr@index()
    {
        $navdata = $this->navdata;
        $fooddata = food::all();
        $dishesdata = specialdishes::all();
        return view("home.index", compact('navdata', 'fooddata', 'dishesdata'));
    }

    public function ReservationCtr@create(Request $request)
    {
        $data = new reservation;
        $data->name = $request->name;
        $data->phone_number = $request->phone;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->person = $request->person;

        $data->save();
        
        return redirect()->back();
    }
}
