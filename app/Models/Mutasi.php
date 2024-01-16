<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mutasi extends Model
{
    use HasFactory;

    protected $table = 'data_mutasi';
    protected $primaryKey = 'id_mutasi';
    protected $guarded = ['id_mutasi'];
    public $timestamps = false;
}
