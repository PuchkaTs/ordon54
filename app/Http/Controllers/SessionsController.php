<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class SessionsController extends Controller
{	
	public function __construct(){
		$this->middleware('guest')->except('destroy');
	}

    public function destroy(){

    	auth()->logout();

    	return redirect('/');
    }
}
