<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuralPathloss extends Model
{
    use HasFactory;
    protected $table = 'rural_pathloss';
    protected $fillable = [
        'latitude',
        'longitude',
        'distance',
        'kuat_sinyal',
    ];

    public function user_histories(){
        return $this->hasMany(UserHistory::class);
    }
}
