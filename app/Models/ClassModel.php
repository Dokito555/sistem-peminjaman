<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    protected $table = 'classes';
    protected $fillable = ['nama_kelas'];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'class_id');
    }
}
