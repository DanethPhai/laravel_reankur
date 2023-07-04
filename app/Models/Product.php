<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'major',
       'level',
        'cost',
        'time',
        'tel',
        'picture',
    ];


    // has many relation

    public function comments() {
       return $this->hasMany(Comment::class);
    }

}
