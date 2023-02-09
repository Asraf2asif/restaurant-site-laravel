<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;


class FoodMenuController extends Controller
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
     * Display a listing of the foodmenu entry.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = food::all();
        $user = Auth::id() ? Auth::user() : null;
        $isAdmin = $this->GetIsAdmin();
        return view("admin.pages.foodmenu.foodmenu", compact("data", "isAdmin", "user"));
    }

    /**
     * Show the form for creating a new foodmenu entry.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::id() ? Auth::user() : null;
        $isAdmin = $this->GetIsAdmin();
        return view("admin.pages.foodmenu.createfoodmenu", compact("user", "isAdmin"));
    }

    /**
     * Store a newly created foodmenu entry in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

            return redirect()->route('foodmenu.index')->with('msg', 'New Food menu entry created');
        }        
        return redirect()->route('foodmenu.index')->with('msg', "Can't create food menu entry" );
    }

    /**
     * Display the specified foodmenu entry.
     *
     * @param  $foodmenu->id
     * @return \Illuminate\Http\Response
     */
    public function show($foodmenu)
    {
        //
    }
    
    /**
     * Show the form for editing the specified foodmenu entry.
     *
     * @param  $foodmenu->id
     * @return \Illuminate\Http\Response
     */
    public function edit($foodmenu)
    {
        $data = food::findOrFail($foodmenu);
        $user = Auth::id() ? Auth::user() : null;
        $isAdmin = $this->GetIsAdmin();
        return view("admin.pages.foodmenu.editfoodmenu", compact("data", "user", "isAdmin"));
    }

    /**
     * Update the specified foodmenu entry in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $foodmenu->id
     * @return \Illuminate\Http\Response
     */
    public function update($foodmenu, Request $request)
    {
        $isAdmin = $this->GetIsAdmin();
        if($isAdmin === true){
            $data = food::findOrFail($foodmenu);

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

            return redirect()->route('foodmenu.index')->with('msg', 'Food menu entry edited');
        }
        return redirect()->route('foodmenu.index')->with('msg', "Can't edit food menu entry" );
    }

    /**
     * Remove the specified foodmenu entry from storage.
     *
     * @param  $foodmenu->id
     * @return \Illuminate\Http\Response
     */
    public function destroy($foodmenu)
    {
        $isAdmin = $this->GetIsAdmin();
        if($isAdmin === true){
            $data = food::findOrFail($foodmenu);
            $data -> delete();
            return redirect() -> back()->with('msg', 'Food menu entry deleted successfully');
        }
        return redirect()->route('foodmenu.index')->with('msg', "Can't delete food menu entry" );
    }
}
