<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategorey extends Model
{
    use HasFactory;

    protected $table = "sub_categoreies";

    protected $fillable = [
        'sub_categorey_name',
        'publication_status'
    ];
}
