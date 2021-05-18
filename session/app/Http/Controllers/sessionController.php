<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    public function get_session_data(Request $request){
    	if ($request->session()->has('name')) {
    		echo $request->session()->get('name');
    	}else{
    		echo "No Data in the Session";
    	}
    }


    public function set_session_data(Request $request){
    	$request->session()->put('name','eyryru##423677');
    	echo "Data Added in the session";
    }


    public function delete_session_data(Request $request){
    	$request->session()->forget('name');
    	echo "Data has been removed from the session";
    }


}
