<?php

namespace App\Models\Categories;

use App\Models\Categories\Category;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','thumbnail'];
}