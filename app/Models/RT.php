<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class RT extends Authenticatable
{
    use HasFactory;

    protected $table = 'data_rt';
    protected $primaryKey = 'id_rt';
    protected $guarded = ['id_rt'];
    public $timestamps = false;
}
