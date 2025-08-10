<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminShopModel extends Model
{
    use HasFactory;
    protected $table = 'shop';
    protected $id = 'id';

}
