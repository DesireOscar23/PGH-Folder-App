<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Issue;
use App\Models\User;
use App\Models\Folder;

class DashboardContrller extends Controller
{
    public function index(){
        // $newf = new Issue;

        // $newf->no_of_folders = $request->input('no_of_folders');

        $total = Folder::sum('no_of_folders');
        $released = Issue::count();
        $remains = $total - $released;
        
        $users = User::count();
        return view('admin.dashboard', compact('total', 'released', 'remains', 'users'));
    }

    public function registered_users(){
        return view('users.index',[
            'users'=>User::all()]);  
    }
}
