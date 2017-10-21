<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function purchase()
    {
        return view('pages.purchase');
    }
    public function top_up()
    {
        return view('pages.top_up');
    }
    public function transactions()
    {
        return view('pages.transactions');
    }
}
