<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        'lokasi',
        'jarak',
        'bts_location_id', 
        'model_okumura',
        'model_hatta',
        'model_cost231',
        'kuat_sinyal',
    ];

    public function bts_locations(){
        return $this->belongsTo(BTSLocation::class);
    }
}