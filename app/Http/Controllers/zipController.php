<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zip;
use App\Models\Slide;
use App\Models\Stat;
use App\Models\Tokebi;
use App\Models\Tour;
use App\Models\Blog;
use App\Models\Uproject;

class zipController extends Controller
{

    public function getFilteredStats(Request $request){
        $stats = Stat::orderBy('created_at', 'DESC');
        if($request->id != null){
            $stats->where('id', $request->id);
        }
        if($request->name != null){
            $stats->where('name', 'LIKE', '%' . $request->name . '%');
        }
        return $stats->get();
    }
    public function viewAllStat(Request $request){
        $stats = $this->getFilteredStats($request);
        return view('all-stat')->with('stats', $stats)->with('filters', [
            'id' => $request->id,
            'name' => $request->name,
        ]);
    }
    public function editStat(Request $request, $id){
        $stat = Stat::where('id', $id)->first();
        return view('edit-stat')->with('stat', $stat);
    }
    public function updateStat(Request $request, $id){
        $stat = Stat::findOrFail($id);
        $stat->name = $request->name;
        if ($request->hasFile('statimage')) {
            $name1 = $request->file('statimage')->getClientOriginalName();
            $request->file('statimage')->storeAs('public/stat', $name1);
            $stat->statimage = $name1;
        }
        $stat->number = $request->number;
        $stat->save();
        return redirect()->route('stats.all');
    }
    public function addNewStat(Request $request){
        $stat = new Stat();
        $stat->name = $request->name;
        $size1 = $request->file('statimage')->getSize();
        $name1 = $request->file('statimage')->getClientOriginalName();
        $request->file('statimage')->storeAs('public/stat', $name1);
        $stat->statimage = $name1;
        $stat->number = $request->number;
        $stat->save();
        return redirect()->route('stats.all');
    }
    public function deleteStat(Request $request){
        Stat::where('id', $request->stat_id)->delete();
        return redirect()->route('stats.all');
    }
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

    // Upcoming projects
    public function getFilteredUprojects(Request $request){
        $uprojects = Uproject::orderBy('created_at', 'DESC');
        if($request->id != null){
            $uprojects->where('id', $request->id);
        }
        if($request->name != null){
            $uprojects->where('name', 'LIKE', '%' . $request->name . '%');
        }
        return $uprojects->get();
    }
    public function viewAllUproject(Request $request){
        $uprojects = $this->getFilteredUprojects($request);
        return view('all-uproject')->with('uprojects', $uprojects)->with('filters', [
            'id' => $request->id,
            'name' => $request->name,
        ]);
    }
    public function editUproject(Request $request, $id){
        $uproject = Uproject::where('id', $id)->first();
        return view('edit-uproject')->with('uproject', $uproject);
    }
    public function updateUproject(Request $request, $id){
        $uproject = Uproject::findOrFail($id);
        $uproject->name = $request->name;
        if ($request->hasFile('image1')) {
            $name1 = $request->file('image1')->getClientOriginalName();
            $request->file('image1')->storeAs('public/uproject', $name1);
            $uproject->image1 = $name1;
        }
        if ($request->hasFile('image2')) {
            $name2 = $request->file('image2')->getClientOriginalName();
            $request->file('image2')->storeAs('public/uproject', $name2);
            $uproject->image2 = $name2;
        }
        if ($request->hasFile('image3')) {
            $name3 = $request->file('image3')->getClientOriginalName();
            $request->file('image3')->storeAs('public/uproject', $name3);
            $uproject->image3 = $name3;
        }
        if ($request->hasFile('image4')) {
            $name4 = $request->file('image4')->getClientOriginalName();
            $request->file('image4')->storeAs('public/uproject', $name4);
            $uproject->image4 = $name4;
        }
        $uproject->step1 = $request->step1;
        $uproject->step2 = $request->step2;
        $uproject->step3 = $request->step3;
        $uproject->step4 = $request->step4;
        $uproject->step5 = $request->step5;

        $uproject->description = $request->description;
        $uproject->save();
        return redirect()->route('uprojects.all');
    }
    public function addNewUproject(Request $request){
        $uproject = new Uproject();
        $uproject->name = $request->name;
        $size1 = $request->file('image1')->getSize();
        $name1 = $request->file('image1')->getClientOriginalName();
        $request->file('image1')->storeAs('public/uproject', $name1);
        $uproject->image1 = $name1;

        $size2 = $request->file('image2')->getSize();
        $name2 = $request->file('image2')->getClientOriginalName();
        $request->file('image2')->storeAs('public/uproject', $name2);
        $uproject->image2 = $name2;

        $size3 = $request->file('image3')->getSize();
        $name3 = $request->file('image3')->getClientOriginalName();
        $request->file('image3')->storeAs('public/uproject', $name3);
        $uproject->image3 = $name3;

        $size4 = $request->file('image4')->getSize();
        $name4 = $request->file('image4')->getClientOriginalName();
        $request->file('image4')->storeAs('public/uproject', $name4);
        $uproject->image4 = $name4;
        $uproject->step1 = $request->step1;
        $uproject->step2 = $request->step2;
        $uproject->step3 = $request->step3;
        $uproject->step4 = $request->step4;
        $uproject->step5 = $request->step5;
        $uproject->description = $request->description;
        $uproject->save();
        return redirect()->route('uprojects.all');
    }
    public function deleteUproject(Request $request){
        Uproject::where('id', $request->uproject_id)->delete();
        return redirect()->route('uprojects.all');
    }
    //end


    public function getFilteredBlogs(Request $request){
        $blogs = Blog::orderBy('created_at', 'DESC');
        if($request->id != null){
            $blogs->where('id', $request->id);
        }
        if($request->name != null){
            $blogs->where('name', 'LIKE', '%' . $request->name . '%');
        }
        return $blogs->get();
    }
    public function viewAllBlog(Request $request){
        $blogs = $this->getFilteredBlogs($request);
        return view('all-blog')->with('blogs', $blogs)->with('filters', [
            'id' => $request->id,
            'name' => $request->name,
        ]);
    }
    public function editBlog(Request $request, $id){
        $blog = Blog::where('id', $id)->first();
        return view('edit-blog')->with('blog', $blog);
    }
    public function updateBlog(Request $request, $id){
        $blog = Blog::findOrFail($id);
        $blog->name = $request->name;
        if ($request->hasFile('blogimage')) {
            $name1 = $request->file('blogimage')->getClientOriginalName();
            $request->file('blogimage')->storeAs('public/blog', $name1);
            $blog->blogimage = $name1;
        }
        $blog->description = $request->description;
        $blog->save();
        return redirect()->route('blogs.all');
    }
    public function addNewBlog(Request $request){
        $blog = new Blog();
        $blog->name = $request->name;
        $size1 = $request->file('blogimage')->getSize();
        $name1 = $request->file('blogimage')->getClientOriginalName();
        $request->file('blogimage')->storeAs('public/blog', $name1);
        $blog->blogimage = $name1;
        $blog->description = $request->description;
        $blog->save();
        return redirect()->route('blogs.all');
    }
    public function deleteBlog(Request $request){
        Blog::where('id', $request->blog_id)->delete();
        return redirect()->route('blogs.all');
    }
    public function getHomePage(Request $request){
        $slides = $this->getFilteredSlides($request);
        $blogs = $this->getFilteredBlogs($request);
        $stats = $this->getFilteredStats($request);
        $zips = $this->getFilteredZips($request);
        return view('index')->with('slides', $slides)->with('filters', [
            'id' => $request->id,
            'title' => $request->title,
        ])->with('blogs', $blogs)->with('filters', [
            'id' => $request->id,
            'name' => $request->name,
        ])->with('stats', $stats)->with('filters', [
            'id' => $request->id,
            'name' => $request->name,
            'number' => $request->number,
        ])->with('zips', $zips)->with('filters', [
            'id' => $request->id,
            'name' => $request->name,
            'min_price' => $request->min_price,
            'max_price' => $request->max_price,
            'location' => $request->location,
        ]);
    }

    public function getProjectsPage(Request $request){
        $zips = $this->getFilteredZips($request);
        $uprojects = $this->getFilteredUprojects($request);
        $slides = $this->getFilteredSlides($request);
        $blogs = $this->getFilteredBlogs($request);
        return view('projects')->with('slides', $slides)->with('filters', [
            'id' => $request->id,
            'title' => $request->title,
        ])->with('blogs', $blogs)->with('filters', [
            'id' => $request->id,
            'name' => $request->name,
        ])->with('zips', $zips)->with('filters', [
            'id' => $request->id,
            'name' => $request->name,
            'min_price' => $request->min_price,
            'max_price' => $request->max_price,
            'location' => $request->location,
        ])->with('uprojects', $uprojects)->with('filters', [
            'id' => $request->id,
            'name' => $request->name,
        ]);
    }
    public function getToursPage(Request $request){
        $slides = $this->getFilteredSlides($request);
        $blogs = $this->getFilteredBlogs($request);
        $tours = $this->getFilteredTours($request);
        return view('tours')->with('slides', $slides)->with('filters', [
            'id' => $request->id,
            'title' => $request->title,
        ])->with('blogs', $blogs)->with('filters', [
            'id' => $request->id,
            'name' => $request->name,
        ])->with('tours', $tours)->with('filters', [
            'id' => $request->id,
            'name' => $request->name,
            'min_price' => $request->min_price,
            'max_price' => $request->max_price,
            'location' => $request->location,
        ]);
    }
    public function getZipPage(Request $request){
        $slides = $this->getFilteredSlides($request);
        $blogs = $this->getFilteredBlogs($request);
        $zips = $this->getFilteredZips($request);
        return view('ziplines')->with('slides', $slides)->with('filters', [
            'id' => $request->id,
            'title' => $request->title,
        ])->with('blogs', $blogs)->with('filters', [
            'id' => $request->id,
            'name' => $request->name,
        ])->with('zips', $zips)->with('filters', [
            'id' => $request->id,
            'name' => $request->name,
            'min_price' => $request->min_price,
            'max_price' => $request->max_price,
            'location' => $request->location,
        ]);
    }
    public function getTokebiPage(Request $request){
        $slides = $this->getFilteredSlides($request);
        $blogs = $this->getFilteredBlogs($request);
        return view('tokebi')->with('slides', $slides)->with('filters', [
            'id' => $request->id,
            'title' => $request->title,
        ])->with('blogs', $blogs)->with('filters', [
            'id' => $request->id,
            'name' => $request->name,
        ]);
    }
    public function getContactPage(Request $request){
        $slides = $this->getFilteredSlides($request);
        return view('contact')->with('slides', $slides)->with('filters', [
            'id' => $request->id,
            'title' => $request->title,
        ]);
    }
    public function getFilteredZips(Request $request){
        $zips = Zip::orderBy('created_at', 'DESC');
        if($request->id != null){
            $zips->where('id', $request->id);
        }
        if($request->name != null){
            $zips->where('name', 'LIKE', '%' . $request->name . '%');
        }
        if($request->min_price != null){
            $zips->where('price', '>=', $request->min_price);
        }
        if($request->max_price != null){
            $zips->where('price', '<=', $request->max_price);
        }
        if($request->location != null){
            $zips->where('location', 'LIKE', '%' . $request->location . '%');
        }
        return $zips->get();
    }
    public function viewAllZip(Request $request){
        $zips = $this->getFilteredZips($request);
        return view('all-zip')->with('zips', $zips)->with('filters', [
            'id' => $request->id,
            'name' => $request->name,
            'min_price' => $request->min_price,
            'max_price' => $request->max_price,
            'location' => $request->location,
        ]);
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
    public function getTourPage(Request $request, $id){
        $slides = Slide::orderBy('created_at', 'DESC')->get();
        $tour = Tour::where('id', $id)->first();
        return view('tour')->with('tour', $tour)->with('slides', $slides);
    }
    public function getZiplinePage(Request $request, $id){
        $slides = Slide::orderBy('created_at', 'DESC')->get();
        $zip = Zip::where('id', $id)->first();
        return view('zipline')->with('zip', $zip)->with('slides', $slides);
    }
    public function getBlogPage(Request $request, $id){
        $slides = Slide::orderBy('created_at', 'DESC')->get();
        $blog = Blog::where('id', $id)->first();
        return view('blog')->with('blog', $blog)->with('slides', $slides);
    }
}
