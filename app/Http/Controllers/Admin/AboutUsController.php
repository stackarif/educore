<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){
        $about_us = AboutUs::first();
        //return $about_us;
        return view('Backend.About.about_us', compact('about_us'), ['navItem' => 'about_us']);


    }

    public function update(Request $request,  $id)
    {
        return $request;
        $web              = AboutUs::find($id);
        // $web->slider_image     = $request->slider_image;
        $web->description       = $request->description;
        $web->students     = $request->students;
        $web->faculties     = $request->faculties;
        $web->branches     = $request->branches;
        $web->awards     = $request->awards;
        $web->experties_name     = $request->experties_name;
        $web->experties_title     = $request->experties_title;
        // $web->experties_image     = $request->experties_image;
        $web->reviewer_name     = $request->reviewer_name;
        $web->reviewer_title     = $request->reviewer_title;
        $web->reviewer_comments     = $request->reviewer_comments;
        $web->reviewer_description     = $request->reviewer_description;
        $web->save();
        
        session()->flash('success', 'Data Update Successfully!!');
        return redirect()->route('about_us.index');
    }
    
}
