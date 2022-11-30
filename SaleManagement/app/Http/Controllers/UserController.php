<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserRole;
use App\Models\Gender;


class UserController extends Controller
{
    public function indexUser()
    {
        $user = User::all();
        $gender = Gender::all();
        $userRole = UserRole::all();
        return view('user',compact('user', 'gender','userRole'));
    }
    public function getUserDetail($UserId){
        $user = User::where('id', $UserId)->first();
        
        return view('userDetail',compact('user'));
    }
}
