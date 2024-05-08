<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\UserModel;
class UserController extends Controller
{
    //
    public $user;
    public function __construct()
    {
        $user = new UserModel();
    }
    public function index(){
        return view('user.index');
    }
    public function showFromRegister(){
        return view('auth-register');

    }
    public function showFromLogin(){
        return view('auth-login');

    }
    public function createUser(){
    }
    public function getUserById(){

    }
    public function loginUser(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);
        
        if($validator->fails()){
            return response()->json([
                'error' => $validator->errors()
            ]); 
        }
        
        $credentials = $request->only('email','password');
        $attempt = Auth::attempt($credentials); // Lưu kết quả xác thực vào biến $attempt

        if($attempt){
            $user = Auth::user(); // Lấy thông tin người dùng đã xác thực
            return response()->json([
                'success' => 'user logged in successfully',
                'user' => $user
            ]);
        }else{
            return response()->json([
                'error' => 'user not found',
                'giatrij'=>$attempt
            ]);
        }
    }
    public function logoutUser(){
    }
    public function registerUser(Request $request){
        try{
            $validator = Validator::make($request->all(),[
                'username' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:8',
            ]);
           if($validator->fails()){
               return response()->json([
                   'status' => 400,
                   'message' => 'Validation Error',
                   'errors' => $validator->errors(),
               ]);
           }
           $user = new UserModel();
           $user->name = $request->username;
           $user->email = $request->email;
           $user->remember_token = $request->_token;
           $user->password = Hash::make($request->password);
           $user->save();
           return response()->json([
               'status' => 200,
               'message' => 'User Created Successfully',
               'data' => $user,
           ],200);
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
    public function updateUser(){
    }
    public function deleteUser(){
    }
    public function showUser(){
    }
    public function showUserProfile(){
    }
    public function showUserSettings(){
    }
    public function showUserProfileSettings(){
    }
    public function showUserProfilePasswordSettings(){
    }
    public function edit(){
        return view('user.edit');
    }
    public function delete(){
        return view('user.delete');
    }
    public function profile(){
        return view('user.profile');
    }
    public function settings(){

    }
}
