<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index(){
        $users = User::latest()->get();

        return view('admin.user.index',compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);;;
    }
    public function create(){

    }
    public function store(){

    }
    public function delete($id){
        $users = User::find($id);
        $users->delete();
        return redirect()->route('user.index');
    }

}
