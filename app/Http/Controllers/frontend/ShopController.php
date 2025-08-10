<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\ShopModel;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $result = ShopModel::all();
        return view('frontend.shop')->with('result', $result);

    }
}
