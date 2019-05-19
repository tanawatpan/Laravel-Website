<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    protected  $primaryKey = 'mid';

    public function chapter(){
        return $this->hasMany('App\Chapter', $localKey = 'mid')->orderByDesc('no');
    }
}
