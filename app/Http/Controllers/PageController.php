<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
//    public function show($slug)
//    {
////        return view("pages.$slug");
//        return view("pages.show", ['slug' => $slug]);
//    }

    public function show()
    {
        return view("pages.about");
    }
}
