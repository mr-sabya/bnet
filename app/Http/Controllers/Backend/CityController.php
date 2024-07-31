<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CityController extends Controller
{
    //

    public function index()
    {
        return view('backend.city.index');
    }
}
