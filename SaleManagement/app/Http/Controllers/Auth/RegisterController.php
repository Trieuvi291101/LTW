<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOMEPRODUCT;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        
    }
    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'user_role' => ['required', 'int', 'max:255'],
            'active' => ['required', 'int', 'max:255'],
            'phone' => ['required', 'string', 'max:45'],
            'birthday' => ['required', 'date', 'max:255'],
            'gender_id' => ['required', 'int', 'max:255'],
            'address_id' => ['required', 'int', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
       
        return User::create([
            'name' => $data['name'],
            'user_role' => $data['user_role'],
            'active' => $data['active'],
            'phone' => $data['phone'],
            'birthday' => $data['birthday'],
            'gender_id' => $data['gender_id'],
            'address_id' => $data['address_id'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
