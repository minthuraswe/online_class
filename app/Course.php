<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name', 'duration', 'cat_id',
    ];

    public function category(){
        $this->belongsTo('App\Category');
    }
}
