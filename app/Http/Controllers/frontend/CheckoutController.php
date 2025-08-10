<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\CheckoutModel;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view ('frontend.checkout');
    }

}
