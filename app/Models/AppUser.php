<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppUser extends Model
{
    protected $fillable = ['email', 'password_hash', 'confirmation_hash', 'status'];
    use HasFactory;
}
