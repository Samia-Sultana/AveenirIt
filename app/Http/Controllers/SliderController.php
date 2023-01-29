<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.slider');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if ($request->file('image')) {
            $thumbnailImage = $request->file('image');
            $thumbnailImageName = date('YmdHi') . $thumbnailImage->getClientOriginalName();
            Image::make($thumbnailImage)->save('photos/'.$thumbnailImageName);
            $save_url = 'photos/'.$thumbnailImageName;
        }
        Slider::create([
            'title' => $input['title'],
            'pre_title' => $input['pre-title'],
            'post_title' => $input['post-title'],
            'image' => $thumbnailImageName,
            'button' => $input['button'],
           
        ]);


        $notification = array(
            'message' => 'New Slider added!',
            'alert-type' => 'success'
        );
        return redirect()->route('addSliderPage')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        $sliders = Slider::all();
        return view('admin.sliderList', compact('sliders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $input = $request->all();
        $slider = Slider::find($request->update_sliderId);

        if ($request->file('update_image')) {
            
            $thumbnailImage = $request->file('update_image');
            $thumbnailImageName = date('YmdHi') . $thumbnailImage->getClientOriginalName();
            Image::make($thumbnailImage)->save('photos/'.$thumbnailImageName);
            $save_url = 'photos/'.$thumbnailImageName;
            $slider['image'] = $thumbnailImageName;
        }
        
        $slider['title'] = $input['update_title'];
        $slider['pre_title'] = $input['update_pre_title'];
        $slider['post_title'] = $input['update_post_title'];
        $slider['button'] = $input['update_button'];
        $slider->save();

        $notification = array(
            'message' => 'Slider updated!',
            'alert-type' => 'success'
        );
        return redirect()->route('sliderList')->with($notification);

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Slider $slider)
    {
        Slider::find($request->slider_id)->delete();
        $notification = array(
            'message' => 'Slider deleted!',
            'alert-type' => 'success'
        );
        return redirect()->route('sliderList')->with($notification);

    }
}
