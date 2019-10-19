<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Photo;
class Album extends Model
{
    // mass assignment
    protected $fillable = array('name','description', 'cover_image');

    public function photos(){
        // album has many posts
        return $this->hasMany('App\Photo');
    }
}
