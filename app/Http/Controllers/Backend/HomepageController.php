<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //
    public function bannerSection()
    {
        return view('backend.home-page.banner');
    }

    public function priceSection()
    {
        return view('backend.home-page.price');
    }

    public function videoSection()
    {
        return view('backend.home-page.video');
    }


    // service section
    public function serviceSection()
    {
        return view('backend.home-page.service');
    }

    // cta section
    public function ctaSection()
    {
        return view('backend.home-page.cta');
    }

    // offer section
    public function offerSection()
    {
        return view('backend.home-page.offer');
    }


    // top package section
    public function topPackageSection()
    {
        return view('backend.home-page.top-package');
    }
}
