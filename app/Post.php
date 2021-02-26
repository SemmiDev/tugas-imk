<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    protected $fillable = ['title','slug','body', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
