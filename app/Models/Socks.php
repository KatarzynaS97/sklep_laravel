<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socks extends Model
{
    use HasFactory;
    protected $table = 'socks';
    protected $fillable = ['name','price','image','description','product_type'];
}
