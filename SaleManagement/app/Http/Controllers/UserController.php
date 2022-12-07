<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserRole;
use App\Models\Gender;
use Auth;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexUser()
    {
        $user = User::all();
        return view('user',compact('user'));
    }
    
    public function getUserDetail($id){

        $users = User::where('id', $id)->first();
        $user = User::all();
        
        return view('userDetail',compact('users', 'user'));

    }
    public function deleteUser($UserId){
        $record = User::where('id', $USerId)->first();
        if(file_exists(public_path("images/".$record->image ))){
            unlink(public_path("images/".$record->image));

        }
        User::where('id', $UserId)->delete();
        $u = User::All();
        Return \Redirect::back()->with('thongbao','Xóa nhân viên thành công!' );
    }
}
