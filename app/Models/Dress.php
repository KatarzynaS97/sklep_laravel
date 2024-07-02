<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
    use HasFactory;
    protected $table = 'dress';
    protected $fillable = ['name','price','image','description','product_type'];
}
