<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackEndController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkAdmin');
    }

    /**
     * dashboard
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * post manger
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function post()
    {
        return view('admin.post');
    }
}
