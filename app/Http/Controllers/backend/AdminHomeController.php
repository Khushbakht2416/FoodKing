<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminBlogsModel;
use App\Models\backend\AdminContactModal;
use App\Models\backend\AdminHomeModel;
use App\Models\backend\AdminMenuModel;
use App\Models\backend\AdminShopModel;
use App\Models\backend\AdminTeamModel;
use App\Models\backend\AdminTestimonialModel;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        $blogs = AdminBlogsModel::all();
        $menus = AdminMenuModel::all();
        $contact = AdminContactModal::all();
        $shops = AdminShopModel::all();
        $teams = AdminTeamModel::all();
        $testimonials = AdminTestimonialModel::all();
        return view('backend.index', compact('blogs', 'menus', 'contact', 'shops', 'teams', 'testimonials'));
    }
}
