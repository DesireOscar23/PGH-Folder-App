<?php

namespace App\Http\Controllers\user;
use App\Models\Issue;
use App\Models\Folder;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $total = Folder::sum('no_of_folders');
        $released = Issue::count();
        $remains = $total - $released;
    
        return view('user.dashboard', compact('total', 'released', 'remains'));
    }
}
