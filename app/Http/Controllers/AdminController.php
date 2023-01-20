<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;

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

    public function foodmenulist()
    {
        $data = food::all();
        $usertype = Auth::user()->usertype;
        return view("admin.pages.foodmenu", compact("data", "usertype"));
    }

    public function addfoodmenu()
    {
        return view("admin.pages.createfoodmenu");
    }

    public function uploadfood(Request $request)
    {
        $data = new food;
        $image = $request->productimage;
        $imagename = time().".".$image->getClientOriginalExtension();
        $imagepath = 'assets/images/foodimage';
        $request->productimage->move($imagepath , $imagename);

        $data->name = $request->productname;
        $data->img = $imagepath."/".$imagename;
        $data->price = $request->productprice;
        $data->desc = $request->productdescription;

        $data->save();
        
        return redirect("foodmenulist");
    }

    public function updatefoodmenu($id)
    {
        $data = food::find($id);
        return view("admin.pages.updatefoodmenu", compact("data"));
    }

    public function updatefood($id, Request $request)
    {
        $data = food::find($id);
        $image = $request->productimage;
        if($image){
            $imagename = time().".".$image->getClientOriginalExtension();
            $imagepath = 'assets/images/foodimage';
            $request->productimage->move($imagepath , $imagename);
            $data->img = $imagepath."/".$imagename;            
        }

        $data->name = $request->productname;
        $data->price = $request->productprice;
        $data->desc = $request->productdescription;

        $data->save();
        
        return redirect("foodmenulist");
    }

    public function delfoodmenu($id)
    {
        $data = food::find($id);
        $data -> delete();
        return redirect() -> back();
    }

    public function reservationlist()
    {
        $data = reservation::all();
        $usertype = Auth::user()->usertype;
        return view("admin.pages.reservationlist", compact("data", "usertype"));
    }
}
