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
        $data = $request->only('end_date','listening','reading', 'writing','wish_total');
        $validator = Validator::make($data, [
          'end_date' => 'required|numeric',
          'listening' => 'required|numeric',
          'reading' => 'required|numeric',
          'writing' => 'required|numeric',
          'wish_total' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 300);
        }
        $average = ((float)$request->lisening + (float)$request->reading + (float)$request->writing)/3;
        $need_hours = CalcHours((float)$request->wish_total)-CalcHours($average);
        $exercises_per_day = $need_hours / $request->end_date;
        if($exercises_per_day >= 6){
            return response()->json("error", 400);
        }
        //create planner in db
        $planner = Planner::create([
            'end_date' => $request->end_date,
            'listening' => $request->listening,
            'reading' => $request->reading,
            'writing' => $request->writing,
            'wish_total' => $request->wish_total,
            'user_id' => $user->id
        ]);
        //отправляем ответ после запроса
        return response()->json($planner, 200);
    }
    public function CalcHours($average){
        if($average >= 3 && $average < 4){
            return 135;
        }elseif($average >= 4 && $average < 4.25){
            return 135;
        }elseif($average >= 4.25 && $average < 4.75){
            return 135;
        }elseif($average >= 4.75 && $average < 5.25){
            return 135;
        }elseif($average >= 5.25 && $average < 5.75){
            return 135;
        }elseif($average >= 5.75 && $average < 6.25){
            return 135;
        }elseif($average >= 6.25 && $average < 6.75){
            return 135;
        }elseif($average >= 6.75 && $average < 7.25){
            return 135;
        }elseif($average >= 7.25 && $average < 7.75){
            return 135;
        }elseif($average >= 7.75 && $average < 8.25){
            return 135;
        }elseif($average >= 8.25 && $average < 8.75){
            return 135;
        }elseif($average >= 8.75 && $average < 8.25){
            return 135;
        }
    }
    public function getPlanner(Request $request)
    {
        $user = Jwt::validation($request->bearerToken());
        return response()->json(Planner::with('user')->find($user->id), 200);
        
    }
}
