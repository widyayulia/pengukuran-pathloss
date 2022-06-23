<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataHitung extends Model
{
    use HasFactory;
    protected $table = 'data_hitung';
    protected $fillable = [
        'lokasibtsId',
        'jarak',
        'frekuensi',
        'hB',
        'hM',
        'Amu',
    ];

    public function user_histories(){
        return $this->hasMany(UserHistory::class);
    }

    public function lokasi_bts(){
        return $this->belongsTo(BTSLocation::class, 'lokasibtsId');
    }
}
