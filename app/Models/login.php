<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    use HasFactory;

    public $table = 'login';
    protected $fillable = [
        'email', 'password','updated_at', 'created_at'
    ];
}
