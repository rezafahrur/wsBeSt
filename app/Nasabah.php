<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    protected $table= 'nasabah';
    protected $primaryKey='nasabah_id';
    protected $guarded=['nasabah_id'];
}
