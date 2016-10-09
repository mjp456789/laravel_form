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
	
   public function store(\App\Http\Requests\FormRequest $request){
   	$postValues = $request->all();
   	$formModel = new \App\Form();
   	$formModel->removeNumber($postValues['number']);
   	$missingNumber = $formModel->getSelectedNumber();
      return view('response',array('number'=>$missingNumber[0]));
   }
 
   public function edit($id){}
 
   public function update(Request $request,$id){}
 
   public function destroy($id){}
}
