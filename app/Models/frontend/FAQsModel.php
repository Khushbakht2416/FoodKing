<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQsModel extends Model
{
    use HasFactory;
    protected $table = "faq"; 
    protected $primary_key = "id";

}
