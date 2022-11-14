<?php

namespace App\Http\Controllers;

use App\Models\Planner;
use Illuminate\Http\Request;

//нужные библиотеки
use App\Models\Token;

use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;
use App\JWT\Jwt;
use Carbon\Carbon;

class PlannerController extends Controller
{
    public function createPlanner(Request $request)
    {
        // JWT token decode
        $user = Jwt::validation($request->bearerToken());

        // проверка на поля
        $data = $request->only('end_date');
        $validator = Validator::make($data, [
          'end_date' => 'required|date'
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 300);
        }

        //create planner in db
        $planner = Planner::create([
            'start_date' => Carbon::now(),
            'end_date' => $request->end_date,
            'user_id' => $user->id
        ]);
        //отправляем ответ после запроса
        return response()->json($planner, 200);
    }
    public function getPlanner(Request $request)
    {
        $user = Jwt::validation($request->bearerToken());
        return response()->json(Planner::with('user')->find($user->id), 200);
        
    }
}
