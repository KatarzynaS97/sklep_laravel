<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tshirt extends Model
{
    use HasFactory;
    protected $table = 'tshirt';
    protected $fillable = ['name','price','image','description'];
}
