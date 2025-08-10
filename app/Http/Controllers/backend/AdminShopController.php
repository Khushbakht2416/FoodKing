<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminShopModel;
use Illuminate\Http\Request;

class AdminShopController extends Controller
{
    public function index()
    {
        $shop = AdminShopModel::all();
        return view('backend.pages-shop')->with('shop', $shop);
    }

//EDIT_PAGE
public function editshop($id)
{
    $shop = AdminShopModel::find($id);
    return view('backend.pages-edit-shop')->with('shop', $shop);
}
//UPDATE_shop
public function editsingleshop(Request $request, $id)
{
    $shop = AdminShopModel::find($id);

    if (!$shop) {
        return redirect()->back()->with('error', 'shop not found');
    }

    $request->validate([
        'foodname' => 'required',
        'orgprice' => 'required',
        'imgurl' => 'image|mimes:jpeg,png,gif|max:2048'
    ]);

    if ($request->hasFile('imgurl')) {
        $imageName = 'Shop_upload_' . time() . '.' . $request->imgurl->extension();
        $folderPath = 'frontend/images/resource';
        $imagePath = $folderPath . '/' . $imageName;
        $request->imgurl->move(public_path($folderPath), $imageName);
        $shop->imgurl = $imagePath;
    } else {
        $shop->imgurl = $request->imgurlprevious;
    }

    $shop->foodname = $request->foodname;
    $shop->orgprice = $request->orgprice;
    $shop->status = 1;
    $shop->save();

    return redirect('/admin/shop')->with('success', 'shop updated successfully');
}

///ADD_Shop
public function addshop()
{
    return view('backend.pages-add-shop');
}

//POST_shop
public function addsingleshop(Request $request)
{
$request->validate([
    'foodname' => 'required',
    'orgprice' => 'required',
    'imgurl' => 'image|mimes:jpeg,png,gif|max:2048'
]);

$shop = new AdminShopModel();

$imageName = 'Shop_upload_' . time() . '.' . $request->imgurl->extension();
$folderPath = 'frontend/images/resource';
$imagePath = $folderPath . '/' . $imageName;
$request->imgurl->move(public_path($folderPath), $imageName);
$shop->imgurl = $imagePath;

$shop->foodname = $request->foodname;
$shop->orgprice = $request->orgprice;
$shop->status = 1;
$shop->save();

return redirect()->back()->with('success', 'Shop added successfully');
}

//ENABLE
    public function enableshop($id){
        $shop = AdminShopModel::find($id);
        if($shop){
            $shop->status = 1;
            $shop->save();
            return redirect()->back();
        }
        return redirect()->back();
    }

//DISABLE
    public function disableshop($id){
        $shop = AdminShopModel::find($id);
        if($shop){
            $shop->status = 0;
            $shop->save();
            return back();
        }
        return redirect()->back();
    }

//DELETE
    public function deleteshop($id){
        $shop = AdminShopModel::find($id);
        if($shop){
            $shop->delete();
            return back();
        }
        return redirect()->back();
    }
}
