<?php

namespace App\Http\Controllers\Blog;

use App\Actions\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Blogslider;
use Illuminate\Http\Request;

class BlogSliderController extends Controller
{
    function index()
    {
        return view('Blogadmin.Slider.index', ['navItem' => 'slider']);
    }

    function fetchSlider()
    {
        return Blogslider::latest()->get();
    }

    public function store(SliderRequest $request)
    {
        dd($request);
        info($request->all());
        $Slider =  Blogslider::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => File::upload($request->file('image'), 'Slider')
        ]);
        if ($Slider) {
            return true;
        }
    }

    public function destroy(Blogslider $slider)
    {
        $img = $slider->image;
        $slider->delete();
        File::deleteFile($img);
        return true;
    }

    public function show(Blogslider $slider)
    {
        return $slider;
    }
    public function update(SliderRequest $request, Blogslider $slider)
    {
        info($request->file('image'));
        if ($request->has('file')) {
            dd($request->image);
            $olgImage = $slider->image;
            info($request->file('image'));
            $Slider =   $slider->update([
                'title' => $request->title,
                'content' => $request->content,
                'image' => File::upload($request->file('image'), 'Slider')
            ]);
            info('ok');
            File::deleteFile($olgImage);
        } else {
            $Slider =   $slider->update([
                'title' => $request->title,
                'content' => $request->content,
            ]);
        }

        if ($Slider) {
            return true;
        } else {
            return false;
        }
    }

    public function inActiveSlider(Blogslider $slider)
    {
        $slider->update([
            'status' => false
        ]);
    }
    public function activeSlider(Blogslider $slider)
    {
        $slider->update([
            'status' => true
        ]);
    }
}
