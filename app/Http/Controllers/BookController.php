<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allbook = Book::latest()->get();
        return view('source.book.index')->with(["allbook"=>$allbook]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('source.book.create');
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
        $request->file('image')->move(public_path('BookImages'),$img_name);
        //$request->all();
        $request['author_id']=auth()->user()->id;
        $request['author']=auth()->user()->name;
        $allbook = $request->toArray();
        $allbook['image'] = $img_name;
        //dd($request->all());
        Book::create($allbook);
        return redirect()->route('book.index')->with('success', 'book created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {

        $allbook = Book::latest()->get();

        $allbook= Book::latest()->get();

        return view('source.book.show',compact('allbook'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book,$id)
    {
        $allbook=Book::find($id);
        return view('source.book.update',compact("allbook"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book,$id)
    {
        $allbook=Book::find($id);

        $allbook->book_name = $request->input('book_name');
        // $bachelors->category = $request->input('category');
        $allbook->description = $request->input('description');
        //dd($request->all());
        if($request->hasfile('image')) {
            $img = $request->file('image');
            $extension = $img->getClientOriginalExtension();
            $img_name = time().'.'.$img->extension();
            $img->move(public_path('BookImages'),$img_name);
            $allbook->image = $img;
            $allbook_arr = $request->toArray();
            $allbook_arr['image'] = $img_name;
            $allbook->update($allbook_arr);
            }
    $allbook->save();
    return redirect()->route('book.index');
    }



     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book,$id)
    {
        $allbook= Book::find($id);
        $allbook->delete();

        return redirect()->route('book.index');
    }

    public function delete(Book $book,$id)
    {
        $allbook= Book::find($id);
        $allbook->delete();

        return redirect()->route('book.index');
    }
}


