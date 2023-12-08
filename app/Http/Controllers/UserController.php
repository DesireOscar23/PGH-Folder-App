<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('users.index',[
            'users'=>User::all()]);  
    }

    public function destroy($user_id)
    {
        $user = User::find($user_id);

        if ($user) {
            $user->delete();
            return redirect()->route('users');
        } else {
            return redirect()->route('users');
        }
    }
}
