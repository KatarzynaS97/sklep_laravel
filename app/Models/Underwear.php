<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Underwear extends Model
{
    use HasFactory;
    protected $table = 'underwear';
    protected $fillable = ['name','price','image','description'];
}
