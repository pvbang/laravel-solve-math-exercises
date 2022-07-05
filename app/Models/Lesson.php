<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    
    protected $table = "lessons";

    protected $primaryKey = "id_lesson";

    protected $fillable = [
        'id_chapter',
        'name_lesson',
        'content',
        'page',
        'slug',
    ];
}
