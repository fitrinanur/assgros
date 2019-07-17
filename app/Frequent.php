<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Frequent extends Model
{
    protected $table = 'frequent';
    protected $fillable = ['kode_barang', 'nama_barang', 'freq', 'support'];
}
