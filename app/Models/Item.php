<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
      'name',
      'description',
      'sale_price',
      'purchase_price',
      'quantity',
      'sub_category_id'
    ];
}
