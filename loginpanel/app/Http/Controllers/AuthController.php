<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public  function uuidGenerator($length=40)
    {
        $pool = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
        return $code;
    }

    public function register(Request $request){
        // Validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'mobile_number' => 'required|numeric',
            'password' => 'required|min:6',
        ];

        // Custom error messages
        $messages = [
            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Invalid email format.',
            'email.unique' => 'The email has already been taken.',
            'mobile_number.required' => 'The mobile number field is required.',
            'mobile_number.numeric' => 'The mobile number must be numeric.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 6 characters.',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check for validation errors
        if ($validator->fails()) {
            return response()->json(['status' => '400', 'message' => 'Validation failed', 'errors' => $validator->errors()]);
        }

        $register_user = [
            'name' => isset($request->name) ? $request->name :"",
            'username' => isset($request->username)? $request->username : "",
            'password' => isset($request->password) ? $request->password : "",
            'email' => isset($request->email) ? $request->email : "",
            'mobile_number' => isset($request->mobile_number) ? $request->mobile_number : "",
            'uuid' =>  $this->uuidGenerator() ?? "",
            'salt' => isset($request->password) ? bcrypt($request->password) : "",
            'sha1' => isset($request->password) ? sha1($request->password) : "",
            'md5' => isset($request->password) ? md5($request->password) : "",
            'sha256' => isset($request->password) ? Hash::make($request->password) : "",
        ];
        if(!empty($register_user)){
            $insertId = DB::table('users')->insert($register_user);
            if($insertId){
                return response()->json(['status'=>'201','message' => 'User Resigter Successfully','data' => $register_user , 'url' => 'http://127.0.0.1:8000']);
            }else{
                return response()->json(['status'=>'400','message' => 'Something Went Wrong ','data' => []]); 
            }
        }else{
            return response()->json(['status'=>'400','message' => 'Something Went Wrong ','data' => []]);
        }
    }

    public function login(Request $request){
        if(isset($request->email) && !empty($request->email)){
            $checkEmail = DB::table('users')->where('email',$request->email)->first();
            if(!is_null($checkEmail)){
                $password = $checkEmail->password;
                $requestPassword = $request->password;
                if($requestPassword == $password){
                    return response()->json(['status'=>'201','message' => 'User Login Successfully','data' => $checkEmail , 'url' => 'http://127.0.0.1:8000/dashboard']);
                }else{
                    return response()->json(['status'=>'400','message' => 'Something Went Wrong ','data' => []]);
                }
            }else{
                return response()->json(['status'=>'400','message' => 'Email is not exits','data' => []]);
            }
        }else{
            return response()->json(['status'=>'400','message' => 'Please enter email','data' => []]);
        }
    }

    public function dashboard(Request $request){
        return response()->json(['status'=>'201','message' => 'Welcome to dashboard']);
    }
}
