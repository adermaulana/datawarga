<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    protected $table = 'data_warga';
    protected $primaryKey = 'id_warga';
    protected $guarded = ['id_warga'];
    public $timestamps = false;
    
}
