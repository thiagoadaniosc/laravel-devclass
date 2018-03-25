<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB as DB;

class Post extends Model
{
    protected $table = 'posts';

    public function user(){
        return $this->belongsTo('App\User');
        return $this->belongsTo(User::class);
    }

    public function greaterThan(int $number){ //Maior Que 
        return $this->where('id', '>', $number)->get();
        //return self::where('id', '>', $number)->get();
    }
}
