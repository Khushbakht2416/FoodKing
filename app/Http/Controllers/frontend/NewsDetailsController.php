<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\NewsDetailsModel;
use Illuminate\Http\Request;

class NewsDetailsController extends Controller
{
    public function index()
    {
        return view('frontend.news-details');
    }
}
