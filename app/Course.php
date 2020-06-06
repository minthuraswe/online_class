<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\CourseStored;

class Course extends Model
{
    protected $fillable = [
        'name', 'duration', 'cat_id',
    ];

    protected static function boot(){
        parent::boot();
        static::created(function($course){
        flash();
        Mail::to(request()->user()->email)->send(new CourseStored($course));
        });
    }

    public function category(){
        $this->belongsTo('App\Category');
    }
}
