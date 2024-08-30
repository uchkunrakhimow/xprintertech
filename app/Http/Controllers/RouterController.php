<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouterController extends Controller

{
    public function home()
    {

        return view('pages.home');
    }

    public function drivers()
    {

        return view('pages.drivers');
    }

    public function products_list()
    {

        return view('pages.products-list');
    }

    public function about()
    {

        return view('pages.about');
    }

    public function news()
    {

        return view('pages.news');
    }

    public function product_detail()
    {

        return view('pages.product-detail');
    }

    public function contact()
    {

        return view('pages.contact');
    }
}
