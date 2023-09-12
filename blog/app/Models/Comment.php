<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    //Ajout
    protected $fillable = ['comment', 'user_id', 'article_id'];

    //Un commentaire n'a qu'un auteur
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Un commentaire n'a qu'un aritcle
    public function article(){
        return $this->belongsTo(User::class);
    }
}
