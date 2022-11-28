<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planner extends Model
{

    use HasFactory;
    protected $fillable = [
        'user_id','end_date', 'listening' , 'reading' ,'writing', 'wish_total'
    ];
    public $timestamps = false;

    public function user(){
      return $this->belongsTo(User::class, 'user_id');
    }
}
