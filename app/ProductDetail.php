<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $table = "product_detail";
    protected $fillable = ["id", "spec_id", "content", "description", "createdate", "deletedate", "product_id"];

    public $timestamps = false;
}
