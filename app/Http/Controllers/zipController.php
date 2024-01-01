<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zip;

class zipController extends Controller
{
    public function getHomePage(){
        return view('index');
    }
    public function getProjectsPage(){
        return view('projects');
    }
    public function getToursPage(){
        return view('tours');
    }
    public function getZipPage(){
        return view('ziplines');
    }
    public function getTokebiPage(){
        return view('tokebi');
    }
    public function getContactPage(){
        return view('contact');
    }
    public function createZip(){
        $zip = new Zip();
        $zip->name = "ბალდას კანიონი";
        $zip->location = "მარტვილი";
        $zip->image1 = "ფოტო1";
        $zip->image2 = "ფოტო2";
        $zip->image3 = "ფოტო3";
        $zip->image4 = "ფოტო4";
        $zip->price = 60;
        $zip->description = "ბალდა ეს არის უნიკალური უაღრესი აჰაჰა";
        $zip->save();
        return $zip;
    }
    public function viewAllZip(){
        $zips = Zip::all();
        return view('all-zip')->with('zips', $zips);
    }
    public function editZip(Request $request, $id){
        $zip = Zip::where('id', $id)->first();
        return view('edit-zip')->with('zip', $zip);
    }
    public function updateZip(Request $request, $id){
        $zip = Zip::findOrFail($id);
        $zip->name = $request->name;
        $zip->location = $request->location;
        if ($request->hasFile('image1')) {
            $name1 = $request->file('image1')->getClientOriginalName();
            $request->file('image1')->storeAs('public/zip', $name1);
            $zip->image1 = $name1;
        }
        if ($request->hasFile('image2')) {
            $name2 = $request->file('image2')->getClientOriginalName();
            $request->file('image2')->storeAs('public/zip', $name2);
            $zip->image2 = $name2;
        }
        if ($request->hasFile('image3')) {
            $name3 = $request->file('image3')->getClientOriginalName();
            $request->file('image3')->storeAs('public/zip', $name3);
            $zip->image3 = $name3;
        }
        if ($request->hasFile('image4')) {
            $name4 = $request->file('image4')->getClientOriginalName();
            $request->file('image4')->storeAs('public/zip', $name4);
            $zip->image4 = $name4;
        }
        $zip->price = $request->price;
        $zip->description = $request->description;
        $zip->save();
        return redirect()->route('zips.all');
    }
    public function addNewZip(Request $request){
        $zip = new Zip();
        $zip->name = $request->name;
        $zip->location = $request->location;
        $size1 = $request->file('image1')->getSize();
        $name1 = $request->file('image1')->getClientOriginalName();
        $request->file('image1')->storeAs('public/zip', $name1);
        $zip->image1 = $name1;
        $size2 = $request->file('image2')->getSize();
        $name2 = $request->file('image2')->getClientOriginalName();
        $request->file('image2')->storeAs('public/zip', $name2);
        $zip->image2 = $name2;
        $size3 = $request->file('image3')->getSize();
        $name3 = $request->file('image3')->getClientOriginalName();
        $request->file('image3')->storeAs('public/zip', $name3);
        $zip->image3 = $name3;
        $size4 = $request->file('image4')->getSize();
        $name4 = $request->file('image4')->getClientOriginalName();
        $request->file('image4')->storeAs('public/zip', $name4);
        $zip->image4 = $name4;
        $zip->price = $request->price;
        $zip->description = $request->description;
        $zip->save();
        return redirect()->route('zips.all');
    }
    public function deleteZip(Request $request){
        Zip::where('id', $request->zip_id)->delete();
        return redirect()->route('zips.all');
    }
}
