<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected  $primaryKey = 'cid';

    public function manga(){
        return $this->belongsTo('App\Manga', 'mid');
    }
}
