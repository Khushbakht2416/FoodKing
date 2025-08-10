<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\HomeModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('frontend.index');
    }
}
