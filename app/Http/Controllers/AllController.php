<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function index()
    {
        return view('layouts.master');
    }

    public function admin()
    {
        return view('admin.index');
    }

    public function pending()
    {
        return view('admin.sanggahan_pending');
    }
}
