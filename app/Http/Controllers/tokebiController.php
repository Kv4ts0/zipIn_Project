<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tokebi;

class tokebiController extends Controller
{
    public function getFilteredTokebi(Request $request){
        $tokebi = Tokebi::orderBy('created_at', 'DESC');
        if($request->id != null){
            $tokebi->where('id', $request->id);
        }
        if($request->name != null){
            $tokebi->where('name', 'LIKE', '%' . $request->name . '%');
        }
        if($request->min_price != null){
            $tokebi->where('price', '>=', $request->min_price);
        }
        if($request->max_price != null){
            $tokebi->where('price', '<=', $request->max_price);
        }
        if($request->location != null){
            $tokebi->where('location', 'LIKE', '%' . $request->location . '%');
        }
        return $tokebi->get();
    }
    public function viewAllTokebi(Request $request){
        $tokebi = $this->getFilteredTokebi($request);
        return view('all-tokebi')->with('tokebi', $tokebi)->with('filters', [
            'id' => $request->id,
            'name' => $request->name,
            'min_price' => $request->min_price,
            'max_price' => $request->max_price,
            'location' => $request->location,
        ]);
    }
    public function editTokebi(Request $request, $id){
        $tokebi = Tokebi::where('id', $id)->first();
        return view('edit-tokebi')->with('tokebi', $tokebi);
    }
    public function updateTokebi(Request $request, $id){
        $tokebi = Tokebi::findOrFail($id);
        $tokebi->name = $request->name;
        $tokebi->location = $request->location;
        if ($request->hasFile('image1')) {
            $name1 = $request->file('image1')->getClientOriginalName();
            $request->file('image1')->storeAs('public/tokebi', $name1);
            $tokebi->image1 = $name1;
        }
        if ($request->hasFile('image2')) {
            $name2 = $request->file('image2')->getClientOriginalName();
            $request->file('image2')->storeAs('public/tokebi', $name2);
            $tokebi->image2 = $name2;
        }
        if ($request->hasFile('image3')) {
            $name3 = $request->file('image3')->getClientOriginalName();
            $request->file('image3')->storeAs('public/tokebi', $name3);
            $tokebi->image3 = $name3;
        }
        if ($request->hasFile('image4')) {
            $name4 = $request->file('image4')->getClientOriginalName();
            $request->file('image4')->storeAs('public/tokebi', $name4);
            $tokebi->image4 = $name4;
        }
        $tokebi->price = $request->price;
        $tokebi->description = $request->description;
        $tokebi->save();
        return redirect()->route('tokebi.all');
    }
    public function addNewTokebi(Request $request){
        $tokebi = new Tokebi();
        $tokebi->name = $request->name;
        $tokebi->location = $request->location;
        $size1 = $request->file('image1')->getSize();
        $name1 = $request->file('image1')->getClientOriginalName();
        $request->file('image1')->storeAs('public/tokebi', $name1);
        $tokebi->image1 = $name1;
        $size2 = $request->file('image2')->getSize();
        $name2 = $request->file('image2')->getClientOriginalName();
        $request->file('image2')->storeAs('public/tokebi', $name2);
        $tokebi->image2 = $name2;
        $size3 = $request->file('image3')->getSize();
        $name3 = $request->file('image3')->getClientOriginalName();
        $request->file('image3')->storeAs('public/tokebi', $name3);
        $tokebi->image3 = $name3;
        $size4 = $request->file('image4')->getSize();
        $name4 = $request->file('image4')->getClientOriginalName();
        $request->file('image4')->storeAs('public/tokebi', $name4);
        $tokebi->image4 = $name4;
        $tokebi->price = $request->price;
        $tokebi->description = $request->description;
        $tokebi->save();
        return redirect()->route('tokebi.all');
    }
    public function deleteTokebi(Request $request){
        Tokebi::where('id', $request->tokebi_id)->delete();
        return redirect()->route('tokebi.all');
    }
}
