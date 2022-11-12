<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cilindro extends Model
{
    use HasFactory;
    protected $fillable =[
        'radio','altura','volumen','user_id'
    ];
    public $timestamps = false;

}
