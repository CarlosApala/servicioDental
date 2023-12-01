<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table='medico';
    protected $fillable=['user_id','especialidad','nLicencia','estado'];
    use HasFactory;
    
}
