<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    //Ajout
    protected $fillable = ['title', 'body', 'user_id', 'image'];
}
