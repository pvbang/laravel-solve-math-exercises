<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $table = "grades";

    protected $primaryKey = "id_grade";

    protected $fillable = [
        'name_grade',
        'slug',
    ];

}
