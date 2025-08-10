<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminContactModal;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function destroy($id)
    {
        $contact = AdminContactModal::findOrFail($id);
        $contact->delete();

        return redirect()->back()->with('success', 'Contact deleted successfully');
    }
}
