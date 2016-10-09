<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    //
    private $contentArray = array();
    public function __construct(){
	   	$this->contentArray = range(1,100);
    }
    public function removeNumber($number){
   		unset($this->contentArray[$number-1]);
    }
    public function getSelectedNumber(){
    	   	$compareArray = range(1,100);
    	   	$missingNumber = array_diff($compareArray,$this->contentArray);
    	   	return array_values($missingNumber);
    }
}
