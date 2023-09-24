<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Content extends Model
{
    use HasFactory;
    use Uuid;

    protected $fillable = [
        'brand_id', 'kategori_id', 'photo'
    ];

    public function brand(){
        return $this->belongsTo(Brand::class, 'brand_id', 'uuid');
    }

    public function kategori(){
        return $this->belongsTo(Kategori_brand::class, 'kategori_id', 'uuid');
    }
}
