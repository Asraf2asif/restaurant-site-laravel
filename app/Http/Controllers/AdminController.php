<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;

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

    public function foodmenu()
    {
        $data = food::all();
        $usertype = Auth::user()->usertype;
        return view("admin.pages.foodmenu", compact("data", "usertype"));
    }

    public function uploadfood(Request $request)
    {
        $data = new food;
        $image = $request->productimage;
        $imagename = time().".".$image->getClientOriginalExtension();
        $request->productimage->move('assets/images/foodimage', $imagename);

        $data->name = $request->productname;
        $data->img = $imagename;
        $data->price = $request->productprice;
        $data->desc = $request->productdescription;

        $data->save();
        
        return redirect() -> back();
    }
}
