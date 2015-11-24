<?php

namespace App\Models;
use App\Models\BaseModel;

class Test extends BaseModel {

	// MASS ASSIGNMENT -------------------------------------------------------
	// define which attributes are mass assignable (for security)
	// we only want these 3 attributes able to be filled

	//protected $fillable = array('userid', 'updated_at', 'active', 'name', 'category', 'adtype', 'adfreedate', 'domain', 'ipaddress');

	// DEFINE RELATIONSHIPS --------------------------------------------------
	// each bear HAS one fish to eat
	//public function user() {
	//	return $this->belongsTo('User'); // this matches the Eloquent model
	//}


	//Validation

	//public $rules = array(
    //    'namePageCreate' => 'required|alpha_num|uniquePageName|between:2,32',
    //    'catPageCreate' => 'numeric|min:1|maxPages',
    //);



}
