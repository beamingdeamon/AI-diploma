<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use App\Models\Token;

use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\JWT\Jwt;


class TypeController extends Controller
{
    public function createType(Request $request)
    {
        $user = Jwt::validation($request->bearerToken());

     
        $data = $request->only('first_question', 'second_question', 'answer_1', 'answer_2');
        $validator = Validator::make($data, [
          'answer_1' => 'required|boolean',
          'answer_2' => 'required|numeric',
          'first_question' => 'required|string',
          'second_question' => 'required|string'

        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 300);
        }

        //create planner in db
        $type = Type::create([
            
            'first_question' => $request->first_question,
            'second_question' => $request->second_question,
            'answer_1' => $request->answer_1,
            'answer_2' => $request->answer_2,
            'user_id' => $user->id
        ]);
       
        return response()->json($type, 200);
    }
    public function getType(Request $request)
    {
        $user = Jwt::validation($request->bearerToken());
        return response()->json(Type::with('user')->find($user->id), 200);
        
    }
}


    

