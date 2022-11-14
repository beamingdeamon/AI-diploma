<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserInfo;
use App\Models\Token;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\JWT\Jwt;
use Carbon\Carbon;

class AuthController extends Controller
{

  public function register(Request $request){
    $data = $request->only('email', 'first_name', 'last_name', 'password','is_admin');
    $validator = Validator::make($data, [
      'email' => 'required|email|unique:users',
      'first_name' => 'required|string',
      'last_name' => 'required|string',
      'password' => 'required|string|min:6|max:50',
      'is_admin'=> 'required|int',
    ]);
    if ($validator->fails()) {
        return response()->json(['error' => $validator->messages()], 300);
    }

    $user = User::create([
      'email' => $request->email,
      'password' => bcrypt($request->password),
    ]);



    UserInfo::create([
      'user_id'=>$user->id,
      'first_name'=> $request->first_name,
      'last_name'=> $request->last_name,
      'is_admin'=> $request->is_admin
    ]);

    return response()->json([
      'success' => true,
      'message' => 'User created successfully',
      'data' => $user
    ], Response::HTTP_OK);

  }
  
  public function login(Request $request){
    $validator = Validator::make($request->only('email', 'password'), [
        'email' => 'required|email|exists:users,email',
        'password' => 'required|string|min:6|max:50'
    ]);
    if ($validator->fails()) {
        return response()->json(['error' => $validator->messages()], 300);
    }

    $user = User::where('email', $request->email)->first();
    if (Hash::check($request->password, $user->password)){
      
      $payload = json_encode([
        'id' => $user->id,
        'exp' => Carbon::now()->addDays(1)->timestamp
      ]);

        
      $jwt = Jwt::generate($payload);
      $tokens = Token::create([
        'user_id'=>$user->id,
        'access_token'=>$jwt,
      ]);
      return response()->json(['accessToken' => $jwt], 200);
    }else{
      return response()->json(['succes' => 'false'], 401);
    }
  }

 
}
