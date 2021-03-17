<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tampung_bayar extends Model
{
    protected $table = 'tampung_bayar';
    protected $fillable = ['penjualan_id', 'total', 'terima', 'kembali'];
}
