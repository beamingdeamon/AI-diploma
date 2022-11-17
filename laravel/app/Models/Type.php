<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','first_question','second_question','answer_1','answer_2'
    ];
    public $timestamps = false;

    public function user(){
      return $this->belongsTo(User::class, 'user_id');
    }
}
