<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $table = "chapters";

    protected $primaryKey = "id_chapter";

    protected $fillable = [
        'id_subject',
        'name_chapter',
        'slug',
    ];
}

