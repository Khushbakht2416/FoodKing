<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\TeamModel;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $result = TeamModel::all();
        return view('frontend.team')->with('result', $result);
    }
}
