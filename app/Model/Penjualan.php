<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualan';
    protected $fillable = ['no_fakur', 'tgl_fakur', 'total_bayar', 'pelanggan_id', 'user_id'];
}
