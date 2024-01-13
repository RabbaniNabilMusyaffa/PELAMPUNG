<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    protected $guarded = [];

    protected $fillable = ['user_id', 'id_kategori', 'kode_produk', 'nama_produk', 'merk', 'harga_beli', 'diskon', 'harga_jual', 'stok'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
