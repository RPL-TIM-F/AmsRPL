<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $fillable = ["fullname", "nim", "divisi", "angkatan"];
}
