<?php

namespace App\Http\Controllers;

use App\Models\ScholarshipBachelor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScholarshipBachelorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bachelors= ScholarshipBachelor::latest()->simplepaginate(5);
        return view('admin.post.scholarship.bachelor.index',compact("bachelors"))->with('i', (request()->input('page', 1) - 1) * 5);;
    }

    public function datable(Request $request) {
        if ($request->ajax()) {
            $bachelors = ScholarshipBachelor::all();
            return Datatables::of($bachelors)
                ->addIndexColumn()
                ->addColumn('action', function($row) {
                    $action_btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                    return $action_btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.post.scholarship.bachelor.datableindex',compact("bachelors"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.scholarship.bachelor.create');
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
        $request->file('image')->move(public_path('ScholarshipBachelorImages'),$img_name);
        //$request->all();
        $request['author_id']=auth()->user()->id;
        $request['author']=auth()->user()->name;
        $bachelors = $request->toArray();
        $bachelors['image'] = $img_name;
        //dd($request->all());
        ScholarshipBachelor::create($bachelors);
        return redirect()->route('bachelor.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ScholarshipBachelor  $scholarshipBachelor
     * @return \Illuminate\Http\Response
     */
    public function show(ScholarshipBachelor $scholarshipBachelor)
    {
        $bachelors= ScholarshipBachelor::latest()->get();
        return view('admin.post.scholarship.bachelor.show',compact('bachelors'));
    }
    public function bachelorsallcontent(ScholarshipBachelor $scholarshipBachelor)
    {
        $bachelors= ScholarshipBachelor::latest()->get();
        dd($bachelors);
        return view('viewwebsite.scholarship.allcontent',compact('bachelors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ScholarshipBachelor  $scholarshipBachelor
     * @return \Illuminate\Http\Response
     */
    public function edit(ScholarshipBachelor $scholarshipBachelor,$id)
    {
        $bachelors=ScholarshipBachelor::find($id);
        return view ('admin.post.scholarship.bachelor.update',compact("bachelors"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ScholarshipBachelor  $scholarshipBachelor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ScholarshipBachelor $scholarshipBachelor,$id)
    {
        $bachelors=ScholarshipBachelor::find($id);

        $bachelors->country_name = $request->input('country_name');
        $bachelors->category = $request->input('category');
        $bachelors->description = $request->input('description');
        //dd($request->all());
        if($request->hasfile('image')) {
            $img = $request->file('image');
            $extension = $img->getClientOriginalExtension();
            $img_name = time().'.'.$img->extension();
            $img->move(public_path('ScholarshipBachelorImages'),$img_name);
            $bachelors->image = $img;
            $bachelors_arr = $request->toArray();
            $bachelors_arr['image'] = $img_name;
            $bachelors->update($bachelors_arr);
        }
        $bachelors->save();
        return redirect()->route('bachelor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ScholarshipBachelor  $scholarshipBachelor
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScholarshipBachelor $scholarshipBachelor,$id)
    {
        $bachelors= ScholarshipBachelor::find($id);
        $bachelors->delete();

        return redirect()->route('bachelor.index');
    }
    public function delete(ScholarshipBachelor $scholarshipBachelor,$id)
    {
        $bachelors= ScholarshipBachelor::find($id);
        $bachelors->delete();

        return redirect()->route('bachelor.index');
    }
}
