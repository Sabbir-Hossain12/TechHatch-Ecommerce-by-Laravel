<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'des', 'rating', 'product_id', 'customer_id'
    ];

    function customer():BelongsTo
    {
       return $this->belongsTo(CustomerProfile::class,'customer_id','id');
    }
}
