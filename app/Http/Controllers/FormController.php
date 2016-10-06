<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FormController extends Controller
{
    public function index()
	{
	    return view('form');
	}

   	public function create(){}

	public function show($id){}
	
   public function store(Request $request){
   

   }
 
   public function edit($id){}
 
   public function update(Request $request,$id){}
 
   public function destroy($id){}
}
