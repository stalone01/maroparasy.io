<?php

namespace App\Models;

use App\Models\Colline;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CommentCol extends Model
{
    use HasFactory;

    public function colline(){
        return $this->belongsTo(Colline::class);
    }
    
}
