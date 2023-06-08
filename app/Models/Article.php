<?php

namespace App\Models;

use App\Models\User;
use App\Models\Commentaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory,SoftDeletes;

    
    protected $fillable = [
        'titre',
        'contenu',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->hasMany(Commentaire::class);
    }
}
