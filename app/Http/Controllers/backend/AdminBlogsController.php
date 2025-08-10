<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminBlogsModel;
use Illuminate\Http\Request;

class AdminBlogsController extends Controller
{
    public function index()
    {
        $blogs = AdminBlogsModel::all();
        return view('backend.pages-blogs')->with('blogs', $blogs);
    }
//EDIT_PAGE
    public function editblogs($id)
    {
        $blogs = AdminBlogsModel::find($id);
        return view('backend.pages-edit-blogs')->with('blogs', $blogs);
    }
//UPDATE_BLOGS
    public function editsingleblogs(Request $request, $id)
    {
        $blogs = AdminBlogsModel::find($id);
        if (!$blogs) {
            return redirect()->back()->with('error', 'Blog not found');
        }

        $request->validate([
            'author' => 'required',
            'comments_count' => 'required',
            'publish_date' => 'required',
            'title' => 'required',
            'description' => 'required',
            'details_url' => 'required',
            'imgurl' => 'image|mimes:jpeg,png,gif|max:2048'
        ]);

        if ($request->hasFile('imgurl')) {
            $imageName = 'Blog_upload_' . time() . '.' . $request->imgurl->extension();
            $folderPath = 'frontend/images/resource';
            $imagePath = $folderPath . '/' . $imageName;
            $request->imgurl->move(public_path($folderPath), $imageName);
            $blogs->imgurl = $imagePath;
        } else {
            $blogs->imgurl = $request->image_old;
        }

        $blogs->author = $request->author;
        $blogs->comments_count = $request->comments_count;
        $blogs->publish_date = $request->publish_date;
        $blogs->title = $request->title;
        $blogs->description = $request->description;
        $blogs->details_url = $request->details_url;
        $blogs->status = 1;
        $blogs->save();


        return redirect('/admin/blogs')->with('success', 'Blog updated successfully');
    }

///ADD_BLOG
    public function addblogs()
    {
        return view('backend.pages-add-blogs');
    }

//POST_BLOGS
public function addsingleblogs(Request $request)
{
    $request->validate([
        'author' => 'required',
        'comments_count' => 'required',
        'publish_date' => 'required',
        'title' => 'required',
        'description' => 'required',
        'details_url' => 'required',
        'imgurl' => 'image|mimes:jpeg,png,gif|max:2048'
    ]);

    $blogs = new AdminBlogsModel();

    $imageName = 'Blog_upload_' . time() . '.' . $request->imgurl->extension();
    $folderPath = 'frontend/images/resource';
    $imagePath = $folderPath . '/' . $imageName;
    $request->imgurl->move(public_path($folderPath), $imageName);
    $blogs->imgurl = $imagePath;

    $blogs->author = $request->author;
    $blogs->comments_count = $request->comments_count;
    $blogs->publish_date = $request->publish_date;
    $blogs->title = $request->title;
    $blogs->description = $request->description;
    $blogs->details_url = $request->details_url;
    $blogs->status = 1;
    $blogs->save();

    return redirect()->back()->with('success', 'Blog added successfully');
}

///ENABLE
    public function enableblogs($id){
        $blogs = AdminBlogsModel::find($id);
        if($blogs){
            $blogs->status = 1;
            $blogs->save();
            return redirect()->back();
        }
        return redirect()->back();
    }

///DISABLE
    public function disableblogs($id){
        $blogs = AdminBlogsModel::find($id);
        if($blogs){
            $blogs->status = 0;
            $blogs->save();
            return back();
        }
        return redirect()->back();
    }

///DELETE
    public function deleteblogs($id){
        $blogs = AdminBlogsModel::find($id);
        if($blogs){
            $blogs->delete();
            return back();
        }
        return redirect()->back();
    }
}
