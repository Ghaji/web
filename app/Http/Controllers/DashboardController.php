<?php

namespace Web\Http\Controllers;

use Illuminate\Http\Request;
use Web\Http\Controllers\Controller;

use Web\Http\Requests;

class DashboardController extends Controller
{
    public function __construct() {
    	$this->middleware('auth');
    }
    
    public function index() {
    	try {
    		return view('admin.dashboard.index');
    	} catch(Exception $e) {
    		return redirectBackWithMessage($e->getMessage());
    	}
    }
}
