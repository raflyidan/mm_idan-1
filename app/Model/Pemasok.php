<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pemasok extends Model
{
    protected $table = 'pemasok';
    protected $fillable = ['kode_pemasok', 'nama_pemasok', 'alamat', 'kota', 'no_telp'];
}