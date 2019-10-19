<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Album;
class Photo extends Model
{
    // mass assignment
    protected $fillable = array('album_id','photo','titile','size','description');

    public function album(){
        return $this->belongsTo('App\Album');
    }

}
