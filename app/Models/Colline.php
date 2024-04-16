<?php

namespace App\Models;

use App\Models\CommentCol;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Colline extends Model
{
    use HasFactory;

    public function commentCols(){

        return $this->hasMany(CommentCol::class);
    }
}
