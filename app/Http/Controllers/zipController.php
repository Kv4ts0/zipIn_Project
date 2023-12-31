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
        $zip = Zip::all();
        return $zip;
        return view('all-zip')->with('zips', $zips);
    }
}
