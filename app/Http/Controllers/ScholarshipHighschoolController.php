<?php

namespace App\Http\Controllers;

use App\Models\ScholarshipHighschool;
use Illuminate\Http\Request;

class ScholarshipHighschoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $highschools= ScholarshipHighschool::latest()->get();
        return view('admin.post.scholarship.highschool.index',compact("highschools"))->with('i', (request()->input('page', 1) - 1) * 5);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.scholarship.highschool.create');
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
        $request->file('image')->move(public_path('ScholarshipHighschoolImages'),$img_name);
        //$request->all();
        $request['author_id']=auth()->user()->id;
        $request['author']=auth()->user()->name;
        $highschools = $request->toArray();
        $highschools['image'] = $img_name;
        //dd($request->all());
        ScholarshipHighschool::create($highschools);
        return redirect()->route('highschool.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ScholarshipHighschool  $ScholarshipHighschool
     * @return \Illuminate\Http\Response
     */
    public function show(ScholarshiphigHschool $ScholarshipHighschool)
    {
        $highschools= ScholarshipHighschool::latest()->get();
        return view('admin.post.scholarship.highschool.show',compact('highschools'));
    }
    public function highschoolsallcontent(ScholarshipHighschool $scholarshipHighschool)
    {
        $highschools= ScholarshipHighschool::latest()->get();
        return view('viewwebsite.scholarship.allcontent',compact('highschools'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ScholarshipHighschool  $ScholarshipHighschool
     * @return \Illuminate\Http\Response
     */
    public function edit(ScholarshipHighschool $scholarshipHighschool,$id)
    {
        $highschools=ScholarshipHighschool::find($id);
        return view ('admin.post.scholarship.highschool.update',compact("highschools"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ScholarshipHighschool  $ScholarshipHighschool
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ScholarshipHighschool $scholarshipHighschool,$id)
    {
        $highschools=ScholarshipHighschool::find($id);

        $highschools->country_name = $request->input('country_name');
        $highschools->category = $request->input('category');
        $highschools->description = $request->input('description');
        //dd($request->all());
        if($request->hasfile('image')) {
            $img = $request->file('image');
            $extension = $img->getClientOriginalExtension();
            $img_name = time().'.'.$img->extension();
            $img->move(public_path('ScholarshipHighschoolImages'),$img_name);
            $highschools->image = $img;
            $highschools_arr = $request->toArray();
            $highschools_arr['image'] = $img_name;
            $highschools->update($highschools_arr);
        }
        $highschools->save();
        return redirect()->route('highschool.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ScholarshipHighschool  $scholarshipHighschool
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScholarshiphigHschool $scholarshipHighschool,$id)
    {
        $highschools= ScholarshipHighschool::find($id);
        $highschools->delete();

        return redirect()->route('highschool.index');
    }
    public function delete(ScholarshipHighschool $scholarshipHighschool,$id)
    {
        $highschools= ScholarshipHighschool::find($id);
        $highschools->delete();
        return redirect()->route('highschool.index');
    }
}
