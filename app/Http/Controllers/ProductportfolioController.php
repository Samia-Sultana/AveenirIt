<?php

namespace App\Http\Controllers;

use App\Models\Productportfolio;
use Illuminate\Http\Request;
use Image;

class ProductportfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product_portfolio');
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
       

        $portfolio = new Productportfolio();
        if ($request->file('image')) {
            $thumbnailImage = $request->file('image');
            $thumbnailImageName = date('YmdHi') . $thumbnailImage->getClientOriginalName();
            Image::make($thumbnailImage)->save('photos/'.$thumbnailImageName);
            $save_url = 'photos/'.$thumbnailImageName;
            $portfolio['image'] = $thumbnailImageName;
        }
        $portfolio['productName'] = $request->name;
        $portfolio['content'] = $request->content;
        $portfolio['product_id'] = $request->product;
        $portfolio->save();

        $notification = array(
            'message' => 'New Porfolio added!',
            'alert-type' => 'success'
        );
        return redirect()->route('addProductPortfolioPage')->with($notification);
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productportfolio  $productportfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Productportfolio $productportfolio)
    {
        
        $portfolios = Productportfolio::all();
        return view('admin.product_portfolio_list', compact('portfolios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productportfolio  $productportfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Productportfolio $productportfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productportfolio  $productportfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productportfolio $productportfolio)
    {
        $input = $request->all();
        $portfolio = Productportfolio::find($request->portfolio);

        if ($request->file('update_image')) {
            $thumbnailImage = $request->file('update_image');
            $thumbnailImageName = date('YmdHi') . $thumbnailImage->getClientOriginalName();
            Image::make($thumbnailImage)->save('photos/'.$thumbnailImageName);
            $save_url = 'photos/'.$thumbnailImageName;
            $portfolio['image'] = $thumbnailImageName;

        }
        $portfolio['productName'] = $input['name'];
        $portfolio['product_id'] = $input['product'];
        $newVarName = 'content-' . $request->portfolio;
        $portfolio['content'] = $input[$newVarName];
        $portfolio->save();

        $notification = array(
            'message' => 'Portfolio updated!',
            'alert-type' => 'success'
        );
        return redirect()->route('productPortfolioListAll')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productportfolio  $productportfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Productportfolio $productportfolio)
    {
        Productportfolio::find($request->portfolio_id)->delete();

        $notification = array(
            'message' => 'Portfolio deleted!',
            'alert-type' => 'success'
        );
        return redirect()->route('productPortfolioListAll')->with($notification);
    }
}
