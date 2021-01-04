<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LignUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'entreprises_id',
       
    ];
}
