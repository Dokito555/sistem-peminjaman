<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';
    
    protected $fillable = [
        'guru_id',
        'item_id',
        'class_id',
        'kuantitas_peminjaman',
        'waktu_peminjaman',
        'waktu_pengembalian',
        'waktu_kembali_aktual',
        'status',
        'catatan'
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function barang()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }

    public function kelas()
    {
        return $this->belongsTo(ClassModel::class, 'class_id');
    }
}
