<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Commentaire extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'nom',
        'e_mail',
        'commentaire',
        'article_id'
    ];

    public function article(){
        return $this->belongsTo(Article::class);
    }
}
