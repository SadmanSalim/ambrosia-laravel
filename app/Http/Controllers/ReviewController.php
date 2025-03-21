<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //
    function Review()
    {
        $reviews = Review::all();
        return view('admin.review', compact('reviews'));
    }

    function StoreReview(Request $request){
         Review::create([
            'link' => $request->link,
         ]);

         return back()->with('msg', 'Review Link Added Succesfully');
    }
    function ReviewDelete($id){
        $review = Review::findOrFail($id);
        $review->delete();
        return back()->with('msg', 'Review Link Deleted Succesfully');
    }
}
