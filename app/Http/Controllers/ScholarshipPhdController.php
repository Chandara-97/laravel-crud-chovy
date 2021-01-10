<?php

namespace App\Http\Controllers;

use App\Models\ScholarshipPhd;
use Illuminate\Http\Request;

class ScholarshipPhdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phds= ScholarshipPhd::latest()->get();
        return view('admin.post.scholarship.phd.index',compact("phds"))->with('i', (request()->input('page', 1) - 1) * 5);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.scholarship.phd.create');
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
        $request->file('image')->move(public_path('ScholarshipphdImages'),$img_name);
        $request->all();
        $request['author_id']=auth()->user()->id;
        $request['author']=auth()->user()->name;
        $phds = $request->toArray();
        $phds['image'] = $img_name;
        //dd($request->all());
        ScholarshipPhd::create($phds);
        return redirect()->route('phd.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ScholarshipPhd  $scholarshipPhd
     * @return \Illuminate\Http\Response
     */
    public function show(ScholarshipPhd $scholarshipPhd)
    {
        $phds= ScholarshipPhd::latest()->get();
        return view('admin.post.scholarship.phd.show',compact('phds'));
    }
    public function phdsallcontent(ScholarshipPhd $scholarshipPhd)
    {
        $phds= ScholarshipPhd::latest()->get();
       // dd($phds);
        return view('viewwebsite.scholarship.allcontent',compact('phds'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ScholarshipPhd  $scholarshipPhd
     * @return \Illuminate\Http\Response
     */
    public function edit(ScholarshipPhd $scholarshipPhd,$id)
    {
        $phds=ScholarshipPhd::find($id);
        return view ('admin.post.scholarship.phd.update',compact("phds"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ScholarshipPhd  $scholarshipPhd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ScholarshipPhd $scholarshipPhd,$id)
    {
        $phds=ScholarshipPhd::find($id);
        $phds->country_name = $request->input('country_name');
        $phds->category = $request->input('category');
        $phds->description = $request->input('description');
        if($request->hasfile('image')) {
            $img = $request->file('image');
            $extension = $img->getClientOriginalExtension();
            $img_name = time().'.'.$img->extension();
            $img->move(public_path('ScholarshipPhdImages'),$img_name);
            $phds->image = $img;
            $phds_arr = $request->toArray();
            $phds_arr['image'] = $img_name;
            $phds->update($phds_arr);
        }
        $phds->save();

        return redirect()->route('phd.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ScholarshipPhd  $scholarshipPhd
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScholarshipPhd $scholarshipPhd)
    {
        //
    }

    public function delete(ScholarshipPhd $scholarshipPhd,$id)
    {
        $phds= ScholarshipPhd::find($id);
        $phds->delete();

        return redirect()->route('phd.index');
    }
}
