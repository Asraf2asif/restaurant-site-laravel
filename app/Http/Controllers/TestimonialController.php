<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Testimonial;


class TestimonialController extends Controller
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
     * Display a listing of the testimonial entry.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = testimonial::all();
        $user = Auth::id() ? Auth::user() : null;
        $isAdmin = $this->GetIsAdmin();
        return view("admin.pages.review.review", compact("data", "isAdmin", "user"));
    }

    /**
     * Show the form for creating a new testimonial entry.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::id() ? Auth::user() : null;
        $isAdmin = $this->GetIsAdmin();
        return view("admin.pages.review.createreview", compact("user", "isAdmin"));
    }

    /**
     * Store a newly created testimonial entry in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $isAdmin = $this->GetIsAdmin();
        if($isAdmin === true){
            $data = new testimonial;

            $image = $request->reviewimage;
            $imagename = time().".".$image->getClientOriginalExtension();
            $imagepath = 'assets/images/testimonialimage';
            $request->reviewimage->move($imagepath , $imagename);
            $data->img = $imagepath."/".$imagename;

            $data->name = $request->reviewname;
            $data->bio = $request->reviewbio;
            $data->review = $request->reviewtext;
            $data->rating = $request->reviewrating;

            $data->save();

            return redirect()->route('review.index')->with('msg', 'New testimonial created');
        }        
        return redirect()->route('review.index')->with('msg', "Can't create testimonial" );
    }

    /**
     * Display the specified testimonial entry.
     *
     * @param  $testimonial->id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified testimonial entry.
     *
     * @param  $testimonial->id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = testimonial::findOrFail($id);
        $user = Auth::id() ? Auth::user() : null;
        $isAdmin = $this->GetIsAdmin();
        return view("admin.pages.review.editreview", compact("data", "user", "isAdmin"));
    }

    /**
     * Update the specified testimonial entry in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $testimonial->id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $isAdmin = $this->GetIsAdmin();
        if($isAdmin === true){
            $data = testimonial::findOrFail($id);

            $image = $request->reviewimage;
            if($image){
                $imagename = time().".".$image->getClientOriginalExtension();
                $imagepath = 'assets/images/testimonialimage';
                $request->reviewimage->move($imagepath , $imagename);
                $data->img = $imagepath."/".$imagename;            
            }
            
            $data->name = $request->reviewname;
            $data->bio = $request->reviewbio;
            $data->review = $request->reviewtext;
            $data->rating = $request->reviewrating;

            $data->save();

            return redirect()->route('review.index')->with('msg', 'testimonial edited');
        }
        return redirect()->route('review.index')->with('msg', "Can't create testimonial" );
    }

    /**
     * Remove the specified testimonial entry from storage.
     *
     * @param  $testimonial->id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isAdmin = $this->GetIsAdmin();
        if($isAdmin === true){
            $data = testimonial::findOrFail($id);
            $data -> delete();
            return redirect() -> back()->with('msg', 'testimonial deleted');
        }
        return redirect()->route('review.index')->with('msg', "Can't delete testimonial menu" );
    }
}
