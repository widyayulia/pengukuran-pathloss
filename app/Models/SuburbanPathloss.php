<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuburbanPathloss extends Model
{
    use HasFactory;
    protected $table = 'suburban_pathloss';
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
