<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title', 'slug', 'description', 'price',
        'course_start', 'publish', 'user_id'
    ];
    
    protected $hidden = [];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function scopePublish($query) {
        return $query->where('publish', '>', 0);
    }
    
}
