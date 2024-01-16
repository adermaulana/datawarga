<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Warga;

class Keluarga extends Model
{
    use HasFactory;

    protected $table = 'data_keluarga';
    protected $primaryKey = 'id_keluarga';
    protected $guarded = ['id_keluarga'];
    public $timestamps = false;

    public function warga(){
        return $this->belongsTo(Warga::class, 'id_warga');
    }
}

