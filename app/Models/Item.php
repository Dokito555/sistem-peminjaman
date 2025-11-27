<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model {
    use HasFactory;

    protected $table = 'items';

    protected $fillable = [
        'name',
        'image',
        'description',
        'quantity',
        'available_quantity'
    ];

    protected $casts = [
        'quantity' => 'integer',
        'available_quantity' => 'integer'
    ];

    public function peminjaman(){
        return $this->hasMany(Peminjaman::class);
    }
    
    public function peminjamanAktif()
    {
        return $this->hasOne(Peminjaman::class);
    }
}
