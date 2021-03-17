<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Detail_pembelian extends Model
{
    protected $table = 'detail_pembelian';
    protected $fillable = ['pembelian_id', 'barang_id', 'harga_beli', 'jumlah', 'sub_total'];
}
