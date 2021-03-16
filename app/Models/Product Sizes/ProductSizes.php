<?php

namespace App\Models\ProductSizes;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductSizes\ProductSizes;

class ProductSizes extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'product_id'];
}
