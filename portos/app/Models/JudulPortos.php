<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JudulPortos extends Model
{
    protected $fillable = ['judul', 'user_id', 'juruan', 'kelas', 'kategori', 'images', 'link'];
    public function image(){
        return $this->hasMany(portos_image::class);
    }
}