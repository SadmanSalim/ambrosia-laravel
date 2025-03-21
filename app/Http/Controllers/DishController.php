<?php

namespace App\Http\Controllers;

use App\Http\Requests\DishRequest;
use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    private function uploadImage($image)
    {
        $extension = $image->getClientOriginalExtension();
        $path = 'upload/dishes/';
        $filename = $path . time() . '.' . $extension;
        $image->move($path, $filename);
        return $filename;
    }

    function AddDish()
    {
        return view('admin.add-dish');
    }

    function AllDish()
    {
        $dishes = Dish::all();
        return view('admin.all-dish', compact('dishes'));
    }

    function StoreDish(DishRequest $request)
    {
        $filename = null;
        if ($request->has('image')) {
            $filename = $this->uploadImage($request->file('image'));
        }

        Dish::create([
            'name' => $request->name,
            'image' => $filename,
        ]);

        return back()->with('msg', 'Dish Uploaded Successfully');
    }

    function DeleteDish($id)
    {
        $dish = Dish::findOrFail($id);
        $dish->delete();

        return back();
    }

    function EditDish($id)
    {
        $dish = Dish::findOrFail($id);
        return view('admin.edit-dish', compact('dish'));
    }

    function UpdateDish(Request $request, $id)
    {
        $dish = Dish::findOrFail($id);

        $filename = $dish->image; // Keep the existing image if not changed
        if ($request->has('image')) {
            $filename = $this->uploadImage($request->file('image'));
        }

        $dish->update([
            'name' => $request->name,
            'image' => $filename,
        ]);

        return back()->with('msg', 'Dish Updated Successfully');
    }
}
