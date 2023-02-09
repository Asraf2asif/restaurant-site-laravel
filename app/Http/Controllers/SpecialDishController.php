<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Specialdishes;


class SpecialDishController extends Controller
{
    /**
     * Check if current user is admin.
     *
     * @return Boolean true/false
     */
    public function GetIsAdmin()
    {
        return Auth::id() && Auth::user()->usertype = "1" ? true : false;
    }

    /**
     * Display a listing of the specialdishes entry.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = specialdishes::all();
        $user = Auth::id() ? Auth::user() : null;
        $isAdmin = $this->GetIsAdmin();
        return view("admin.pages.spdishes.spdishes", compact("data", "isAdmin", "user"));
    }

    /**
     * Show the form for creating a new specialdishes entry.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::id() ? Auth::user() : null;
        $isAdmin = $this->GetIsAdmin();
        return view("admin.pages.spdishes.createspdishes", compact("user", "isAdmin"));
    }

    /**
     * Store a newly created specialdishes entry in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
            return redirect()->route('spdish.index')->with('msg', 'New Special-Dish entry created');
        }        
        return redirect()->route('spdish.index')->with('msg', 'Can\'t create Special-Dish entry');
    }

    /**
     * Display the specified specialdishes entry.
     *
     * @param  $specialdishes->id
     * @return \Illuminate\Http\Response
     */
    public function show($specialdishes)
    {
        //
    }
    
    /**
     * Show the form for editing the specified specialdishes entry.
     *
     * @param  $specialdishes->id
     * @return \Illuminate\Http\Response
     */
    public function edit($specialdishes)
    {
        $data = specialdishes::findOrFail($specialdishes);
        $user = Auth::id() ? Auth::user() : null;
        $isAdmin = $this->GetIsAdmin();
        return view("admin.pages.spdishes.editspdishes", compact("data", "user", "isAdmin"));
    }

    /**
     * Update the specified specialdishes entry in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $specialdishes->id
     * @return \Illuminate\Http\Response
     */
    public function update($specialdishes, Request $request)
    {
        $isAdmin = $this->GetIsAdmin();
        if($isAdmin === true){
            $data = specialdishes::findOrFail($specialdishes);

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
            return redirect()->route('specialdishes.index')->with('msg', 'Special-Dish entry edited');
        }        
        return redirect()->route('specialdishes.index')->with('msg', 'Can\'t edit Special-Dish entry');
    }

    /**
     * Remove the specified specialdishes entry from storage.
     *
     * @param  $specialdishes->id
     * @return \Illuminate\Http\Response
     */
    public function destroy($specialdishes)
    {
        $isAdmin = $this->GetIsAdmin();
        if($isAdmin === true){
            $data = specialdishes::findOrFail($specialdishes);
            $data -> delete();
            return redirect() -> back()->with('msg', 'Special-Dish entry deleted successfully');
        }
        return redirect()->route('specialdishes.index')->with('msg', 'Can\'t delete Special-Dish entry');
    }
}
