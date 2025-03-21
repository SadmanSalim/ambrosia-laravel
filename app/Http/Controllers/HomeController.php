<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Dish;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function HomePage()
    {
        $dishes = Dish::all();
        $banners = Banner::find(1);
        return view('home', compact('dishes', 'banners'));
    }
}
