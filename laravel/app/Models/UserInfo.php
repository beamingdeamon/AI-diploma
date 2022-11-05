<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','first_name','last_name','is_admin'
    ];
    public $timestamps = false;

    public function user(){
      return $this->belongsTo(User::class, 'user_id');
    }

}
