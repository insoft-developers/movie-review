<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; // gunakan ini


class Admin extends Authenticatable
{
    use HasFactory;

    protected $guard = 'admin';

    protected $fillable = ['name','email', 'password','level']; 
}
