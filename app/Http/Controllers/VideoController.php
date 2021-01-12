<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allvid = Video::latest()->get();
        return view('source.video.index')->with(["allvid"=>$allvid]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('source.video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = $request->file('image');
        $img_name = time().'.'.$img->extension();
        $request->file('image')->move(public_path('VideoImages'),$img_name);
        //$request->all();
        $request['author_id']=auth()->user()->id;
        $request['author']=auth()->user()->name;
        $allvid = $request->toArray();
        $allvid['image'] = $img_name;
        //dd($request->all());
        Video::create($allvid);
        return redirect()->route('video.index')->with('success', 'video created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        $allvid= Video::latest()->get();
        return view('source.video.show',compact('allvid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video,$id)
    {
        $allvid=Video::find($id);
        return view('source.video.update',compact("allvid"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video,$id)
    {
        $allvid=Video::find($id);

        $allvid->video_name = $request->input('video_name');
        // $bachelors->category = $request->input('category');
        $allvid->description = $request->input('description');
        //dd($request->all());
        if($request->hasfile('image')) {
            $img = $request->file('image');
            $extension = $img->getClientOriginalExtension();
            $img_name = time().'.'.$img->extension();
            $img->move(public_path('VideoImages'),$img_name);
            $allvid->image = $img;
            $allvid_arr = $request->toArray();
            $allvid_arr['image'] = $img_name;
            $allvid->update($allvid_arr);
            }
    $allvid->save();
    return redirect()->route('video.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video,$id)
    {
        $allvid= Video::find($id);
        $allvid->delete();

        return redirect()->route('video.index');
    }

    public function delete(Video $video,$id)
    {
        $allvid= Video::find($id);
        $allvid->delete();

        return redirect()->route('video.index');
    }
}
