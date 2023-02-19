<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Testimonial;


class AdminController extends Controller
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
     * Display a admin dashboard of foodfun site.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::id() ? Auth::user() : null;
        $isAdmin = $this->GetIsAdmin();
        $testimonial = testimonial::take(4)->get();
        return view("admin.index", compact("user", "isAdmin", "testimonial"));
    }
}
