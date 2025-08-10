<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\FoodModel;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        $result = FoodModel::all();
        return view('frontend.food-menu')->with('result', $result);
    }
}
