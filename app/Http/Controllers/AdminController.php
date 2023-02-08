<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Reservation;


class AdminController extends Controller
{
    public function GetIsAdmin()
    {
        return Auth::id() && Auth::user()->usertype = "1" ? true : false;
    }

    public function AdminCtr@index()
    {
        $user = Auth::id() ? Auth::user() : null;
        $isAdmin = $this->GetIsAdmin();
        return view("admin.index", compact("user", "isAdmin"));
    }

    public function UserCtr@list()
    {
        $user = Auth::id() ? Auth::user() : null;
        $isAdmin = $this->GetIsAdmin();
        $data = $isAdmin === true ? user::all() : null;
        return view("admin.pages.userlist", compact("data", "isAdmin", "user"));
    }

    public function UserCtr@destroy($id)
    {
        $isAdmin = $this->GetIsAdmin();
        if($isAdmin === true){
            $data = user::findOrFail($id);
            $data -> delete();
            return redirect() -> back();
        }
        return redirect()->route('user.list');
    }

    public function ReservationCtr@list()
    {
        $isAdmin = $this->GetIsAdmin();
        $data = $isAdmin === true ? reservation::all() : null;
        $user = Auth::id() ? Auth::user() : null;
        return view("admin.pages.reservationlist", compact("data", "isAdmin", "user"));
    }
}
