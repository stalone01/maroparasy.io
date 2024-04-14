<?php

namespace App\Models;

use App\Models\Avatar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    public function avatar(){
        return $this->hasOne(Avatar::class);
    }
}
