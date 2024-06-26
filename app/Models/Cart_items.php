<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_items extends Model
{
    use HasFactory;
  protected $fillable = ['name', 'emial','product_title','price','product_type','product_id','quantity'];
  public function product()
    {
        return $this->morphTo();
    }
}

