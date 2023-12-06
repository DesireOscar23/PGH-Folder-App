<?php

namespace App\Http\Controllers\user;
use App\Models\Issue;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $total = 50;
        $released = Issue::count();
        $remains = $total - $released;
    
        return view('user.dashboard', compact('total', 'released', 'remains'));
    }
}
