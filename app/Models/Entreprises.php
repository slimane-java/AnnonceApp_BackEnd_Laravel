<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprises extends Model
{
    use HasFactory;

  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'tel',
        'fix',
        'secteur',
        'discription',
        'photo',
        'adress',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
