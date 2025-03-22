<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Dish;
use App\Models\Review;
use App\Models\Service;
use App\Models\ServiceDetails;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function HomePage()
    {
        $dishes = Dish::all();
        $banners = Banner::find(1);
        $service = Service::find(1);
        $service_details = ServiceDetails::all();
        $reviews = Review::all();
        return view('home', compact('dishes', 'banners', 'reviews', 'service', 'service_details'));
    }
}
