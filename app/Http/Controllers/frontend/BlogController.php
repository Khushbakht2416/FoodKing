<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\BlogModel;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $result = BlogModel::all();
        return view('frontend.news')->with('result', $result);
    }
}
