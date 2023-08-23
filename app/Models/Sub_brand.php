<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Sub_brand extends Model
{
    use HasFactory;
    use Uuid;

    protected $fillable = [
        'judul', 'detail', 'photo'
    ];
}
