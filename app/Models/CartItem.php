<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
class CartItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'email', 'product_title', 'price', 'product_type', 'product_id', 'quantity', 'delivery_option'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}