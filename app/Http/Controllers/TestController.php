<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Test;

class TestController extends Controller
{
    //
	public function index()
	{
		//$testvar = 'jann is awesome';
		$users = Test::get();
		//dd($users);
		
		return view('test.index',compact('users'));
	}

	public function create()
	{
		return view('test.create');
	}

	public function store(Request $request)
	{
		$this->validate($request,[
        'name' => 'required|max:20',
        'email' => 'required|unique:users,email|email',
        'password' => 'required'
        ]
       );

	 	Test::create($request->all());

	 	$request->session()->flash('success','User added successfully');
	 	 return back();
	}

}
