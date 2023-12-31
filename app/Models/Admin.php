<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

// class Admin extends Model
// {
//     use HasFactory;
//     protected $fillable = [
//         'lab_id',
//         'jabatan',
//         'user_id'
//     ];
// }

class Admin extends Authenticatable
{
    protected $fillable = ['name', 'email', 'password'];
}
