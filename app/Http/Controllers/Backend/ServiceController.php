<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function index()
    {
        return view('backend.service.index');
    }


    public function create()
    {
        return view('backend.service.create');
    }

    public function edit($id)
    {
        return view('backend.service.edit', compact('id'));
    }
}
