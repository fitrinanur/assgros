<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stuff extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'stuffs';
    protected $fillable = ['stuff_code, stuff_name'];
}
