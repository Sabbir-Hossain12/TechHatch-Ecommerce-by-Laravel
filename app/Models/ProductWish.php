<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductWish extends Model
{
    use HasFactory;

    protected $fillable=['product_id','user_id'];

    function wish():BelongsTo
    {
        return  $this->belongsTo(Product::class,'product_id','id');
    }
}
