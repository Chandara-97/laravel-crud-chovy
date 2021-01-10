<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allpro = Product::latest()->get();
        return view('backend.product.index')->with(["allpro"=>$allpro]);
    }
    public function scholarship()
    {
        $allpro = Product::latest()->get();
        return view('backend.product.scholarship')->with(["allpro"=>$allpro]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = $request->file('img_url');
        $img_name = time().'.'.$img->extension();
        $request->file('img_url')->move(public_path('images'),$img_name);
        //$request->all();
        $request['user_id']=Auth::id();
        //$request['user_id']=auth()->user()->name;
        $pro_arr = $request->toArray();
        $pro_arr['img_url'] = $img_name;
        Product::create($pro_arr);
        return redirect()->route('products.index')->with('success', 'Product created successfully.');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $allpro = Product::find($id);
        return view ('backend.product.update')->with(["allpro"=>$allpro]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id, Product $product)
    {
        $allpro = Product::find($id);

        $allpro->name = $request->input('name');
        $allpro->description = $request->input('description');

        if($request->hasfile('img_url')) {
            $img = $request->file('img_url');
            $extension = $img->getClientOriginalExtension();
            $img_name = time().'.'.$img->extension();
            $img->move(public_path('images'),$img_name);
            $allpro->img_url = $img;
            $allpro_arr = $request->toArray();
            $allpro_arr['img_url'] = $img_name;
            $allpro->update($allpro_arr);
        }
        $allpro->save();

        return redirect()->route('products.index')->with('updated', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $allpro= Product::find($id);
        $allpro->delete();

        return redirect()->route('products.index')->with('deleted', 'Product deleted successfully.');
    }
}
