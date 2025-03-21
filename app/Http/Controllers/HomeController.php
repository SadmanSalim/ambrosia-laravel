<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Dish;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function HomePage()
    {
        $dishes = Dish::all();
        $banners = Banner::find(1);
        $reviews = Review::all();
        return view('home', compact('dishes', 'banners', 'reviews'));
    }
}
