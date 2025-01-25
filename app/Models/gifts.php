<?php

namespace App\Models;

use Illuminate\Container\Attributes\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gifts extends Model
{
    /** @use HasFactory<\Database\Factories\GiftsFactory> */
    use HasFactory;
    public function tags(){
        return $this->belongsToMany(Tag::class,'gifts-tags','gift_id', 'tag_id');
    }
}
