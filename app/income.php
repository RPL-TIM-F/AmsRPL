<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class income extends Model
{
    //
    Use HasFactory;

   
    protected $fillable = [
        'deskripsi', 'jumlah_penjualan', 'pendapatan_bersih'

    ];

}
