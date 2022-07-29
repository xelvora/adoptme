<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'jenis_kelamin', 'alamat', 'email', 'telpon'
    ];
}