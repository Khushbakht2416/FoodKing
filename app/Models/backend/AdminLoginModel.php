<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminLoginModel extends Model
{
    use HasFactory;
    protected $table = 'login';
    protected $primary_key = 'id';
}
