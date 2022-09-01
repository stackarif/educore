<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\admissionForm;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function admission_form(){
        return view('website.educore_apply_form');
    }

        public function store(Request $request)
        {
            //return $request;
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
                'phone' => 'required|string|min:8|max:11',
            ]);
    
            $customer = admissionForm::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'last_education' => $request->last_education,
                'result' => $request->result,
                'board_institution' => $request->board,
                'passing_year' => $request->passing_year,
                'ielts_score' => $request->ielts,
                'description' => $request->notes,
            ]);
            session()->flash('success', 'Your Admission successfully');

            return back();
    
    
        }
}
