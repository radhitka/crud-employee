<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('employee.index');
    }

    public function add()
    {
        return view('employee.add');
    }

    public function edit()
    {
        return view('employee.edit');
    }
}
