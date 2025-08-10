<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodModel extends Model
{
    use HasFactory;
    protected $table = "menu"; 
    protected $primary_key = "id"; 
}
