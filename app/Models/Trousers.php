<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trousers extends Model
{
    
    use HasFactory;
    protected $table = 'trousers';
    protected $fillable = ['name','price','image','description','product_type'];
}
