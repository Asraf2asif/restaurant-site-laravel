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

    public function SpDishCtr@list()
    {
        $data = specialdishes::all();
        $user = Auth::id() ? Auth::user() : null;
        $isAdmin = $this->GetIsAdmin();
        return view("admin.pages.spdishes.spdisheslist", compact("data", "isAdmin", "user"));
    }

    public function SpDishCtr@create()
    {
        $user = Auth::id() ? Auth::user() : null;
        $isAdmin = $this->GetIsAdmin();
        return view("admin.pages.spdishes.createspdishes", compact("user", "isAdmin"));
    }

    public function SpDishCtr@store(Request $request)
    {
        $isAdmin = $this->GetIsAdmin();
        if($isAdmin === true){
            $data = new specialdishes;

            $image = $request->spdishesimage;
            $imagename = time().".".$image->getClientOriginalExtension();
            $imagepath = 'assets/images/spdishimage';
            $request->spdishesimage->move($imagepath , $imagename);
            $data->img = $imagepath."/".$imagename;

            $data->namepart1 = $request->spdishesname1;
            $data->namepart2 = $request->spdishesname2;
            $data->price = $request->spdishesprice;
            $data->desc = $request->spdishesdesc;

            $data->save();
        }        
        return redirect()->route('spdish.list');
    }

    public function SpDishCtr@edit($id)
    {
        $data = specialdishes::findOrFail($id);
        $user = Auth::id() ? Auth::user() : null;
        $isAdmin = $this->GetIsAdmin();
        return view("admin.pages.spdishes.editspdishes", compact("data", "user", "isAdmin"));
    }

    public function SpDishCtr@update($id, Request $request)
    {
        $isAdmin = $this->GetIsAdmin();
        if($isAdmin === true){
            $data = specialdishes::findOrFail($id);

            $image = $request->spdishesimageedit;
            if($image){
                $imagename = time().".".$image->getClientOriginalExtension();
                $imagepath = 'assets/images/spdishimage';
                $request->spdishesimageedit->move($imagepath , $imagename);
                $data->img = $imagepath."/".$imagename;            
            }
            $data->namepart1 = $request->spdishesname1edit;
            $data->namepart2 = $request->spdishesname2edit;
            $data->price = $request->spdishespriceedit;
            $data->desc = $request->spdishesdescedit;

            $data->save();
        }        
        return redirect()->route('spdish.list');
    }

    public function SpDishCtr@destroy($id)
    {
        $isAdmin = $this->GetIsAdmin();
        if($isAdmin === true){
            $data = specialdishes::findOrFail($id);
            $data -> delete();
            return redirect() -> back();
        }
        return redirect()->route('spdish.list');
    }
}
