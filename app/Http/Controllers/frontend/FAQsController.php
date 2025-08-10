<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\FAQsModel;
use Illuminate\Http\Request;

class FAQsController extends Controller
{
    public function index()
    {
        $result = FAQsModel::all();
        return view('frontend.faq')->with('result', $result);
    }
}
