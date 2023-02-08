<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;


class AdminController extends Controller
{
    public function GetIsAdmin()
    {
        return Auth::id() && Auth::user()->usertype = "1" ? true : false;
    }

    public function FoodMenuCtr@list()
    {
        $data = food::all();
        $user = Auth::id() ? Auth::user() : null;
        $isAdmin = $this->GetIsAdmin();
        return view("admin.pages.foodmenu.foodmenulist", compact("data", "isAdmin", "user"));
    }

    public function FoodMenuCtr@create()
    {
        $user = Auth::id() ? Auth::user() : null;
        $isAdmin = $this->GetIsAdmin();
        return view("admin.pages.foodmenu.createfoodmenu", compact("user", "isAdmin"));
    }

    public function FoodMenuCtr@store(Request $request)
    {
        $isAdmin = $this->GetIsAdmin();
        if($isAdmin === true){
            $data = new food;

            $image = $request->productimage;
            $imagename = time().".".$image->getClientOriginalExtension();
            $imagepath = 'assets/images/foodimage';
            $request->productimage->move($imagepath , $imagename);
            $data->img = $imagepath."/".$imagename;

            $data->name = $request->productname;
            $data->price = $request->productprice;
            $data->desc = $request->productdescription;

            $data->save();

            return redirect()->route('foodmenu.list')->with('msg', 'New Food menu created');
        }        
        return redirect()->route('foodmenu.list')->with('msg', "Can't create food menu" );
    }
    
    public function FoodMenuCtr@edit($id)
    {
        $data = food::findOrFail($id);
        $user = Auth::id() ? Auth::user() : null;
        $isAdmin = $this->GetIsAdmin();
        return view("admin.pages.foodmenu.editfoodmenu", compact("data", "user", "isAdmin"));
    }

    public function FoodMenuCtr@update($id, Request $request)
    {
        $isAdmin = $this->GetIsAdmin();
        if($isAdmin === true){
            $data = food::findOrFail($id);

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

            return redirect()->route('foodmenu.list')->with('msg', 'New Food menu edited');
        }
        return redirect()->route('foodmenu.list')->with('msg', "Can't create food menu" );
    }

    public function FoodMenuCtr@destroy($id)
    {
        $isAdmin = $this->GetIsAdmin();
        if($isAdmin === true){
            $data = food::findOrFail($id);
            $data -> delete();
            return redirect() -> back()->with('msg', 'Food menu deleted');
        }
        return redirect()->route('foodmenu.list')->with('msg', "Can't delete food menu" );
    }
}
