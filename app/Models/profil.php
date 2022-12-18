<?php

namespace App\Models;


use Illuminate\Foundation\Auth\Profil as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    public $table = 'profils';
    protected $fillable = [
        'email', 
        'password',
        'updated_at', 
        'created_at'
    ];
}
