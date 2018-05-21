<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelamar;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pelamars'] = Pelamar::all();
        return view('admin', $data);
    }
}
