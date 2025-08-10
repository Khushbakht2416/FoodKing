<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminProfileModel extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $primary_key = 'id';
}
