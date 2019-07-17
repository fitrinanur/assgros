<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'toko';
    protected $fillable = ['nama'];
}
