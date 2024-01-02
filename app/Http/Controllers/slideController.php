<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;

class slideController extends Controller
{
    public function getFilteredSlides(Request $request){
        $slides = Slide::orderBy('created_at', 'DESC');
        if($request->id != null){
            $slides->where('id', $request->id);
        }
        if($request->title != null){
            $slides->where('title', 'LIKE', '%' . $request->title . '%');
        }
        return $slides->get();
    }
    public function viewAllSlide(Request $request){
        $slides = $this->getFilteredSlides($request);
        return view('all-slide')->with('slides', $slides)->with('filters', [
            'id' => $request->id,
            'title' => $request->title,
        ]);
    }
    public function editSlide(Request $request, $id){
        $slide = Slide::where('id', $id)->first();
        return view('edit-slide')->with('slide', $slide);
    }
    public function updateSlide(Request $request, $id){
        $slide = Slide::findOrFail($id);
        $slide->title = $request->title;
        $slide->subtitle = $request->subtitle;
        if ($request->hasFile('slideimage')) {
            $name1 = $request->file('slideimage')->getClientOriginalName();
            $request->file('slideimage')->storeAs('public/slide', $name1);
            $slide->slideimage = $name1;
        }
        $slide->description = $request->description;
        $slide->save();
        return redirect()->route('slides.all');
    }
    public function addNewSlide(Request $request){
        $slide = new Slide();
        $slide->title = $request->title;
        $slide->subtitle = $request->subtitle;
        $size1 = $request->file('slideimage')->getSize();
        $name1 = $request->file('slideimage')->getClientOriginalName();
        $request->file('slideimage')->storeAs('public/slide', $name1);
        $slide->slideimage = $name1;
        $slide->description = $request->description;
        $slide->save();
        return redirect()->route('slides.all');
    }
    public function deleteSlide(Request $request){
        Slide::where('id', $request->slide_id)->delete();
        return redirect()->route('slides.all');
    }
}
