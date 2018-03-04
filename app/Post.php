<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function greaterThan(int $number){ //Maior Que 
        return $this->where('id', '>', $number)->get();
        //return self::where('id', '>', $number)->get();
    }
}
