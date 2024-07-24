<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $primaryKey = 'nama_barang';
    protected $fillable = [
        'kode_barang',
        'harga'
    ];

    public function pembelian_barang()
    {
        return $this->belongsTo(Pembelian_Barang::class, 'kode_barang');
    }
}
