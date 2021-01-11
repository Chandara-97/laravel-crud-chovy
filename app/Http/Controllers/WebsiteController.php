<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allweb = Website::latest()->get();
        return view('source.website.index')->with(["allweb"=>$allweb]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('source.website.create');
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
        $request->file('image')->move(public_path('WebsiteImages'),$img_name);
        //$request->all();
        $request['author_id']=auth()->user()->id;
        $request['author']=auth()->user()->name;
        $allweb = $request->toArray();
        $allweb['image'] = $img_name;
        //dd($request->all());
        Website::create($allweb);
        return redirect()->route('website.index')->with('success', 'website created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function show(Website $website)
    {
        $allweb= Website::latest()->get();
        return view('source.website.show',compact('allweb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function edit(Website $website,$id)
    {
        $allweb=Website::find($id);
        return view('source.website.update',compact("allweb"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Website $website,$id)
    {
        $allweb=Website::find($id);

        $allweb->website_name = $request->input('website_name');
        // $bachelors->category = $request->input('category');
        $allweb->description = $request->input('description');
        //dd($request->all());
        if($request->hasfile('image')) {
            $img = $request->file('image');
            $extension = $img->getClientOriginalExtension();
            $img_name = time().'.'.$img->extension();
            $img->move(public_path('WebsiteImages'),$img_name);
            $allweb->image = $img;
            $allweb_arr = $request->toArray();
            $allweb_arr['image'] = $img_name;
            $allweb->update($allweb_arr);
            }
    $allweb->save();
    return redirect()->route('website.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function destroy(Website $website,$id)
    {
        $allweb= Website::find($id);
        $allweb->delete();

        return redirect()->route('website.index');
    }

    public function delete(Website $website,$id)
    {
        $allweb= Website::find($id);
        $allweb->delete();

        return redirect()->route('website.index');
    }
}
