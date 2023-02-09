<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Reservation;


class ReservationController extends Controller
{
    /**
     * Check if current user is admin.
     *
     * @return Boolean true/false
     */
    private function GetIsAdmin()
    {
        return Auth::id() && Auth::user()->usertype = "1" ? true : false;
    }

    /**
     * Display a listing of the reservation entry.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $isAdmin = $this->GetIsAdmin();
        $data = $isAdmin === true ? reservation::all() : null;
        $user = Auth::id() ? Auth::user() : null;
        return view("admin.pages.reservation", compact("data", "isAdmin", "user"));
    }

    /**
     * Store a newly created reservation entry in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new reservation;
        $data->name = $request->name;
        $data->phone_number = $request->phone;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->person = $request->person;

        $data->save();
        
        return redirect()->back()->with('msg', 'Reservation made successfully');
    }
}
