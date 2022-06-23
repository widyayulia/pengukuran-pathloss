<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrbanPathloss extends Model
{
    use HasFactory;
    protected $table = 'urban_pathloss';
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
