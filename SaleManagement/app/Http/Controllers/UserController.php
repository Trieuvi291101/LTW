<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserRole;
use App\Models\Gender;
use Auth;


class UserController extends Controller
{
    public function indexUser()
    {
        $user = User::all();
        return view('user',compact('user'));
    }
    
    public function getUserDetail($id){
        $user = User::where('id', $id)->first();
        return view('userDetail',compact('user'));
    }
}
