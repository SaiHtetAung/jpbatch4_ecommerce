<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  protected $fillable = ['codeno', 'name', 'price', 'discount', 'description', 'brand_id', 'subcategory_id'];
}
