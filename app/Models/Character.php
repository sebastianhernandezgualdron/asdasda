<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "id_categories"
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    function characters(){
        return $this->hasMany(Character::class, 'id');
    }
}
