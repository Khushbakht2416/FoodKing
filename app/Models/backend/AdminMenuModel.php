<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminMenuModel extends Model
{
    use HasFactory;
    protected $table = 'menu';
    protected $id = 'id';
}
