<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];

    public function Tags(){
        return $this->belongToMany(Post::class);
    }
}
