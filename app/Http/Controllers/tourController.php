<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;

class tourController extends Controller
{
    public function getFilteredTours(Request $request){
        $tours = Tour::orderBy('created_at', 'DESC');
        if($request->id != null){
            $tours->where('id', $request->id);
        }
        if($request->name != null){
            $tours->where('name', 'LIKE', '%' . $request->name . '%');
        }
        if($request->min_price != null){
            $tours->where('price', '>=', $request->min_price);
        }
        if($request->max_price != null){
            $tours->where('price', '<=', $request->max_price);
        }
        if($request->location != null){
            $tours->where('location', 'LIKE', '%' . $request->location . '%');
        }
        return $tours->get();
    }
    public function viewAllTour(Request $request){
        $tours = $this->getFilteredTours($request);
        return view('all-tour')->with('tours', $tours)->with('filters', [
            'id' => $request->id,
            'name' => $request->name,
            'min_price' => $request->min_price,
            'max_price' => $request->max_price,
            'location' => $request->location,
        ]);
    }
    public function editTour(Request $request, $id){
        $tour = Tour::where('id', $id)->first();
        return view('edit-tour')->with('tour', $tour);
    }
    public function updateTour(Request $request, $id){
        $tour = Tour::findOrFail($id);
        $tour->name = $request->name;
        $tour->location = $request->location;
        if ($request->hasFile('image1')) {
            $name1 = $request->file('image1')->getClientOriginalName();
            $request->file('image1')->storeAs('public/tour', $name1);
            $tour->image1 = $name1;
        }
        if ($request->hasFile('image2')) {
            $name2 = $request->file('image2')->getClientOriginalName();
            $request->file('image2')->storeAs('public/tour', $name2);
            $tour->image2 = $name2;
        }
        if ($request->hasFile('image3')) {
            $name3 = $request->file('image3')->getClientOriginalName();
            $request->file('image3')->storeAs('public/tour', $name3);
            $tour->image3 = $name3;
        }
        if ($request->hasFile('image4')) {
            $name4 = $request->file('image4')->getClientOriginalName();
            $request->file('image4')->storeAs('public/tour', $name4);
            $tour->image4 = $name4;
        }
        $tour->price = $request->price;
        $tour->description = $request->description;
        $tour->save();
        return redirect()->route('tours.all');
    }
    public function addNewTour(Request $request){
        $tour = new Tour();
        $tour->name = $request->name;
        $tour->location = $request->location;
        $size1 = $request->file('image1')->getSize();
        $name1 = $request->file('image1')->getClientOriginalName();
        $request->file('image1')->storeAs('public/tour', $name1);
        $tour->image1 = $name1;
        $size2 = $request->file('image2')->getSize();
        $name2 = $request->file('image2')->getClientOriginalName();
        $request->file('image2')->storeAs('public/tour', $name2);
        $tour->image2 = $name2;
        $size3 = $request->file('image3')->getSize();
        $name3 = $request->file('image3')->getClientOriginalName();
        $request->file('image3')->storeAs('public/tour', $name3);
        $tour->image3 = $name3;
        $size4 = $request->file('image4')->getSize();
        $name4 = $request->file('image4')->getClientOriginalName();
        $request->file('image4')->storeAs('public/tour', $name4);
        $tour->image4 = $name4;
        $tour->price = $request->price;
        $tour->description = $request->description;
        $tour->save();
        return redirect()->route('tours.all');
    }
    public function deleteTour(Request $request){
        Tour::where('id', $request->tour_id)->delete();
        return redirect()->route('tours.all');
    }
}
