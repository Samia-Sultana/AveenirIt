<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Image;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.portfolio');
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
        Portfolio::create([
            'image' => $thumbnailImageName,
            'catagory_id' => $input['catagory'],
            'title' => $input['title'],
            
        ]);


        $notification = array(
            'message' => 'New Portfolio added!',
            'alert-type' => 'success'
        );
        return redirect()->route('addPortfolioPage')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolioList', compact('portfolios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $input = $request->all();
        $portfolio = Portfolio::find($request->update_portfolioId);


        if ($request->file('update_image')) {
            $thumbnailImage = $request->file('update_image');
            $thumbnailImageName = date('YmdHi') . $thumbnailImage->getClientOriginalName();
            Image::make($thumbnailImage)->save('photos/'.$thumbnailImageName);
            $save_url = 'photos/'.$thumbnailImageName;
            $portfolio['image'] = $thumbnailImageName;

        }
        $portfolio['title'] = $input['update_title'];
        $portfolio['catagory_id'] = $input['update_catagory'];
        $portfolio->save();

        $notification = array(
            'message' => 'Portfolio updated!',
            'alert-type' => 'success'
        );
        return redirect()->route('portfolioList')->with($notification);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Portfolio $portfolio)
    {
        Portfolio::find($request->portfolio_id)->delete();

        $notification = array(
            'message' => 'Portfolio deleted!',
            'alert-type' => 'success'
        );
        return redirect()->route('portfolioList')->with($notification);

        
    }
}
