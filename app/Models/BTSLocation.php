<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BTSLocation extends Model
{
    use HasFactory;
    protected $table = 'bts_locations';
    protected $fillable = [
        'jenis_daerah',
        'latitude',
        'longitude',
        'hB',
        'hM',
    ];

    public function user_histories(){
        return $this->hasMany(UserHistory::class);
    }
}
