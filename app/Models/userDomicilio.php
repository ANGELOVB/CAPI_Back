<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userDomicilio extends Model
{
    use HasFactory;

    protected $primaryKey='id';
    protected $table = 'user_domicilio';

    protected $fillable = [
        'id',
        'user_id',
        'domicilio',
        'numero_exterior',
        'colonia',
        'cp',
        'ciudad'
    ];
}
