<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banana extends Model
{
    protected $table = 'bananas';
    protected $fillable = ['birthday', 'color', 'nickname', 'length', 'edible'];
}
