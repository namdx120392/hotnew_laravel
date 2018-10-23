<?php

namespace AdsNews\Http\Controllers\Admin;

use Illuminate\Http\Request;

use AdsNews\Http\Requests;
use AdsNews\Http\Controllers\Controller;
use Auth;

class DashBoardController extends Controller
{
    public function index(Request $request)
    {
        $breadcrumbs = array('dashboard', null);
        return view('admin.dashboard.dashboard')->with(compact('breadcrumbs'));
    }
}
