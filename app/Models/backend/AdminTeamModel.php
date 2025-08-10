<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminTeamModel extends Model
{
    use HasFactory;
    protected $table = 'team';
    protected $id = 'id';
}
