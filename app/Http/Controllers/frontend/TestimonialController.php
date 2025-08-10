<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\TestimonialModel;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $result = TestimonialModel::all();
        return view('frontend.testimonial')->with('result', $result);
    }
}
