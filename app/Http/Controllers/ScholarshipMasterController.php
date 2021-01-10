<?php

namespace App\Http\Controllers;

use App\Models\ScholarshipMaster;
use Illuminate\Http\Request;

class ScholarshipMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masters= ScholarshipMaster::latest()->get();
        return view('admin.post.scholarship.master.index',compact("masters"))->with('i', (request()->input('page', 1) - 1) * 5);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.scholarship.master.create');
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
        $request->file('image')->move(public_path('ScholarshipMasterImages'),$img_name);
        $request->all();
        $request['author_id']=auth()->user()->id;
        $request['author']=auth()->user()->name;
        $masters = $request->toArray();
        $masters['image'] = $img_name;
        //dd($request->all());
        ScholarshipMaster::create($masters);
        return redirect()->route('master.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ScholarshipMaster  $scholarshipMaster
     * @return \Illuminate\Http\Response
     */
    public function show(ScholarshipMaster $scholarshipMaster)
    {
        $masters= ScholarshipMaster::latest()->get();
        return view('admin.post.scholarship.master.show',compact('masters'));
    }

    public function mastersallcontents(ScholarshipMaster $scholarshipMaster)
    {
        $masters= ScholarshipMaster::latest()->get();
        return view('viewwebsite.scholarship.allcontent',compact('masters'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ScholarshipMaster  $scholarshipMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(ScholarshipMaster $scholarshipMaster,$id)
    {
        $masters=ScholarshipMaster::find($id);
        return view ('admin.post.scholarship.master.update',compact("masters"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ScholarshipMaster  $scholarshipMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ScholarshipMaster $scholarshipMaster,$id)
    {
        $masters=ScholarshipMaster::find($id);
        $masters->country_name = $request->input('country_name');
        $masters->category = $request->input('category');
        $masters->description = $request->input('description');
        if($request->hasfile('image')) {
            $img = $request->file('image');
            $extension = $img->getClientOriginalExtension();
            $img_name = time().'.'.$img->extension();
            $img->move(public_path('ScholarshipMasterImages'),$img_name);
            $masters->image = $img;
            $masters_arr = $request->toArray();
            $masters_arr['image'] = $img_name;
            $masters->update($masters_arr);
        }
        $masters->save();

        return redirect()->route('master.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ScholarshipMaster  $scholarshipMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScholarshipMaster $scholarshipMaster)
    {
        //
    }
    public function delete(ScholarshipMaster $scholarshipMaster,$id)
    {
        $masters= ScholarshipMaster::find($id);
        $masters->delete();

        return redirect()->route('master.index');
    }

}
