<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Category;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['title', 'description', 'content', 'published_at', 'image', 'category_id'];

    public function deleteImage(){
        Storage::delete($this->image);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function hasTag($tag){
        return in_array($tag, $this->tags->pluck('id')->toArray());
    }
}
