<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Detail_penjualan extends Model
{
    protected $table = 'detail_penjualan';
    protected $fillable = ['penjualan_id', 'barang_id', 'harga_jual', 'jumlah', 'sub_total'];
}
