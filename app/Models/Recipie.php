<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipie extends Model
{
    use HasFactory;

    protected $table = "recipies";

    protected $fillable = [
        
        'user_id',
        'categorey_id',
        'sub_categorey_id',
        'recipie_name',
        'time_required',
        'description',
        'publication_status',
    ];

}
