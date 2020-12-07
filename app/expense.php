<?php

namespace App;

use Illuminate\Database\Eloquent\Concerns\HasEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expense extends Model
{
    //
    use HasFactory;
    
    protected $table = 'expenses';

    protected $fillable = [
        'deskripsi', 'jumlah_penjualan', 'pendapatan_bersih'

    ];
}
