<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminTestimonialModel;
use Illuminate\Http\Request;

class AdminTestimonialController extends Controller
{

    public function index()
    {
        $testimonial = AdminTestimonialModel::all();
        return view('backend.pages-testimonial')->with('testimonial', $testimonial);
    }

    //EDIT_PAGE
    public function edittestimonial($id)
    {
        $testimonial = AdminTestimonialModel::find($id);
        return view('backend.pages-edit-testimonial')->with('testimonial', $testimonial);
    }
    //UPDATE_testimonial
    public function editsingletestimonial(Request $request, $id)
    {
        $testimonial = AdminTestimonialModel::find($id);
        if (!$testimonial) {
            return redirect()->back()->with('error', 'testimonial not found');
        }

        $request->validate([
            'name' => 'required',
            'review' => 'required',
            'designation' => 'required',
            'imgurl' => 'image|mimes:jpeg,png,gif|max:2048'
        ]);

        if ($request->hasFile('imgurl')) {
            $imageName = 'testimonial_upload_' . time() . '.' . $request->imgurl->extension();
            $folderPath = 'frontend/images/resource';
            $imagePath = $folderPath . '/' . $imageName;
            $request->imgurl->move(public_path($folderPath), $imageName);
            $testimonial->imgurl = $imagePath;
        } else {
            $testimonial->imgurl = $request->imgurlprevious;
        }

        $testimonial->name = $request->name;
        $testimonial->review = $request->review;
        $testimonial->designation = $request->designation;
        $testimonial->status = 1;
        $testimonial->save();

        return redirect('/admin/testimonial')->with('success', 'testimonial updated successfully');
    }

    ///ADD_testimonial
    public function addtestimonial()
    {
        return view('backend.pages-add-testimonial');
    }

    //POST_testimonial
    public function addsingletestimonial(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'review' => 'required',
            'designation' => 'required',
            'imgurl' => 'image|mimes:jpeg,png,gif|max:2048'
        ]);

        $testimonial = new AdminTestimonialModel();

        $imageName = 'testimonial_upload_' . time() . '.' . $request->imgurl->extension();
        $folderPath = 'frontend/images/resource';
        $imagePath = $folderPath . '/' . $imageName;
        $request->imgurl->move(public_path($folderPath), $imageName);
        $testimonial->imgurl = $imagePath;

        $testimonial->name = $request->name;
        $testimonial->review = $request->review;
        $testimonial->designation = $request->designation;
        $testimonial->status = 1;
        $testimonial->save();

        return redirect()->back()->with('success', 'testimonial added successfully');
    }

    //ENABLE
    public function enabletestimonial($id)
    {
        $testimonial = AdminTestimonialModel::find($id);
        if ($testimonial) {
            $testimonial->status = 1;
            $testimonial->save();
            return redirect()->back();
        }
        return redirect()->back();
    }

    //DISABLE
    public function disabletestimonial($id)
    {
        $testimonial = AdminTestimonialModel::find($id);
        if ($testimonial) {
            $testimonial->status = 0;
            $testimonial->save();
            return back();
        }
        return redirect()->back();
    }

    //DELETE
    public function deletetestimonial($id)
    {
        $testimonial = AdminTestimonialModel::find($id);
        if ($testimonial) {
            $testimonial->delete();
            return back();
        }
        return redirect()->back();
    }
}
