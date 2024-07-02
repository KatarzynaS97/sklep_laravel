<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
class Cart_items extends Model
{
    use HasFactory;
  protected $fillable = ['user_id','name', 'emial','product_title','price','product_type','product_title','product_id','quantity'];
  public function product(): MorphTo
  {
      return $this->morphTo();
  }
}