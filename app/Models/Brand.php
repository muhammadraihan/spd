<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Brand extends Model
{
    use HasFactory;
    use Uuid;

    protected $fillable = [
        'kategori_id', 'nama', 'judul', 'deskripsi', 'photo', 'link_youtube'
    ];

    public function kategori (){
        return $this->belongsTo(Kategori_brand::class, 'kategori_id', 'uuid');
    }
}
