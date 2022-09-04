<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class EducoreController extends Controller
{
    public function categoryWiseProducts(Category $slug){
        return view('website.categorieswise');

    }
}
