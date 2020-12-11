<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class income extends Model
{
    //
    use HasFactory;


    protected $fillable = [
        'deskripsi', 'jumlah_penjualan', 'pendapatan_bersih'

    ];
    protected $table = 'incomes';
}
