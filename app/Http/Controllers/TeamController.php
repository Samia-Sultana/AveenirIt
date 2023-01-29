<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Image;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.team');
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
        Team::create([
            'member' => $input['name'],
            'designation' => $input['designation'],
            'image' => $thumbnailImageName,
            'priority' => $input['priority'],

        ]);
        $notification = array(
            'message' => 'New Member added!',
            'alert-type' => 'success'
        );
        return redirect()->route('addTeamPage')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        $members = Team::all();
        return view('admin.teamList', compact('members'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $input = $request->all();
        $team = Team::find($request->update_memberId);

        if ($request->file('update_image')) {
            
            $thumbnailImage = $request->file('update_image');
            $thumbnailImageName = date('YmdHi') . $thumbnailImage->getClientOriginalName();
            Image::make($thumbnailImage)->save('photos/'.$thumbnailImageName);
            $save_url = 'photos/'.$thumbnailImageName;
            $team['image'] = $thumbnailImageName;
        }
        
        $team['member'] = $input['update_name'];
        $team['designation'] = $input['update_designation'];
        $team['priority'] = $input['update_priority'];
        $team->save();

        $notification = array(
            'message' => 'Team updated!',
            'alert-type' => 'success'
        );
        return redirect()->route('teamList')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Team $team)
    {
        Team::find($request->member_id)->delete();

        $notification = array(
            'message' => 'Team member deleted!',
            'alert-type' => 'success'
        );
        return redirect()->route('teamList')->with($notification);

        
    }
}
