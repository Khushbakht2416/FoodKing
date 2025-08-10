<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminTeamModel;
use Illuminate\Http\Request;

class AdminTeamController extends Controller
{

    public function index()
    {
        $team = AdminTeamModel::all();
        return view('backend.pages-team')->with('team', $team);
    }

//EDIT_PAGE
public function editteam($id)
{
    $team = AdminTeamModel::find($id);
    return view('backend.pages-edit-team')->with('team', $team);
}
//UPDATE_team
public function editsingleteam(Request $request, $id)
{
    $team = AdminTeamModel::find($id);

    if (!$team) {
        return redirect()->back()->with('error', 'team not found');
    }

    $request->validate([
        'name' => 'required',
        'designation' => 'required',
        'imgurl' => 'image|mimes:jpeg,png,gif|max:2048'
    ]);

    if ($request->hasFile('imgurl')) {
        $imageName = 'team_upload_' . time() . '.' . $request->imgurl->extension();
        $folderPath = 'frontend/images/resource';
        $imagePath = $folderPath . '/' . $imageName;
        $request->imgurl->move(public_path($folderPath), $imageName);
        $team->imgurl = $imagePath;
    } else {
        $team->imgurl = $request->imgurlprevious;
    }

    $team->name = $request->name;
    $team->designation = $request->designation;
    $team->status = 1;
    $team->save();

    return redirect('/admin/team')->with('success', 'team updated successfully');
}

///ADD_team
public function addteam()
{
    return view('backend.pages-add-team');
}

//POST_team
public function addsingleteam(Request $request)
{
$request->validate([
    'name' => 'required',
    'designation' => 'required',
    'imgurl' => 'image|mimes:jpeg,png,gif|max:2048'
]);

$team = new AdminTeamModel();

$imageName = 'team_upload_' . time() . '.' . $request->imgurl->extension();
$folderPath = 'frontend/images/resource';
$imagePath = $folderPath . '/' . $imageName;
$request->imgurl->move(public_path($folderPath), $imageName);
$team->imgurl = $imagePath;

$team->name = $request->name;
$team->designation = $request->designation;
$team->status = 1;
$team->save();

return redirect()->back()->with('success', 'team added successfully');
}

//ENABLE
    public function enableteam($id){
        $team = AdminTeamModel::find($id);
        if($team){
            $team->status = 1;
            $team->save();
            return redirect()->back();
        }
        return redirect()->back();
    }

//DISABLE
    public function disableteam($id){
        $team = AdminTeamModel::find($id);
        if($team){
            $team->status = 0;
            $team->save();
            return back();
        }
        return redirect()->back();
    }

//DELETE
    public function deleteteam($id){
        $team = AdminTeamModel::find($id);
        if($team){
            $team->delete();
            return back();
        }
        return redirect()->back();
    }
}
