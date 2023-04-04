<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\Categorie;
use App\Models\Pricing;
use App\Models\Rooms;
use JetBrains\PhpStorm\NoReturn;

class BlogController extends Controller
{
    public function blogFunction() {

        $blgDetails = Blogs::all();
        $categories = Categorie::all();
        return view('frontend.blog_list',compact('blgDetails','categories'));
    }


//     public function roomDetails()
//    {
//
//        $roomCategory = Categorie::all();
//        dd($roomCategory);
//        return view('frontend.blog_list',compact('roomCategory'));
//    }
}
