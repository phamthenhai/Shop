<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $table = "product_detail";
    protected $fillable = ["id", "spec_id", "content", "description", "createdate", "deletedate", "product_id"];
    public function product(){
        return $this->belongsTo('App\Product','product_id', 'id');
    }
    public function spec(){
        return $this->belongsTo('App\Spec','spec_id', 'id');
    }
    public $timestamps = false;
}
