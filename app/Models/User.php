<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'password',
        'image'
    ];

    public function getImageAttribute($value){
        return $value??'imageUser/image.jpg';
    }

    public function articles(){
        return $this->hasMany(Article::class);
    }
}
