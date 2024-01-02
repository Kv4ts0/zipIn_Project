<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class blogController extends Controller
{
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
}
