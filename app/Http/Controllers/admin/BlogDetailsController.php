<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogDetailsController extends Controller
{
    public function blogDetailsFunction () {
        return view('frontend.blog_details');
    }
}
