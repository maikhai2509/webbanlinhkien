<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banner';
    protected $primaryKey = 'id';
    protected $fillable = ['id','slide','slide1','ads'];
}
