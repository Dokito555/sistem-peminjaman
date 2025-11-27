<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = ['nama_guru'];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
}