<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function user()
    {
        $data = user::all();
        return view("admin.pages.users", compact("data"));
    }

    public function deleteuser($id)
    {
        $data = user::find($id);
        $data -> delete();
        return redirect() -> back();
    }
}
