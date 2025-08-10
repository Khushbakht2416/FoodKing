<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminMenuModel;
use Illuminate\Http\Request;

class AdminMenuController extends Controller
{
    public function index()
    {
        $menu = AdminMenuModel::all();
        return view('backend.pages-menu')->with('menu', $menu);
    }

//EDIT_PAGE
public function editmenu($id)
{
    $menu = AdminMenuModel::find($id);
    return view('backend.pages-edit-menu')->with('menu', $menu);
}
//UPDATE_menu
public function editsinglemenu(Request $request, $id)
{
    $menu = AdminMenuModel::find($id);

    if (!$menu) {
        return redirect()->back()->with('error', 'menu not found');
    }

    $request->validate([
        'foodname' => 'required',
        'description' => 'required',
        'price' => 'required',
    ]);

    $menu->foodname = $request->foodname;
    $menu->description = $request->description;
    $menu->price = $request->price;
    $menu->status = 1;
    $menu->save();

    return redirect('/admin/menu')->with('success', 'menu updated successfully');
}

///ADD_menu
public function addmenu()
{
    return view('backend.pages-add-menu');
}

//POST_menu
public function addsinglemenu(Request $request)
{
$request->validate([
    'foodname' => 'required',
    'description' => 'required',
    'price' => 'required',
]);

$menu = new AdminMenuModel();

$menu->foodname = $request->foodname;
$menu->description = $request->description;
$menu->price = $request->price;
$menu->status = 1;
$menu->save();

return redirect()->back()->with('success', 'menu added successfully');
}

//ENABLE
    public function enablemenu($id){
        $menu = AdminMenuModel::find($id);
        if($menu){
            $menu->status = 1;
            $menu->save();
            return redirect()->back();
        }
        return redirect()->back();
    }

//DISABLE
    public function disablemenu($id){
        $menu = AdminMenuModel::find($id);
        if($menu){
            $menu->status = 0;
            $menu->save();
            return back();
        }
        return redirect()->back();
    }

//DELETE
    public function deletemenu($id){
        $menu = AdminMenuModel::find($id);
        if($menu){
            $menu->delete();
            return back();
        }
        return redirect()->back();
    }
}
