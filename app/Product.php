<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";
    protected $fillable = ["id", "name", "cate_id", "price", "content", "image_link", "image_list", "view","createdate","deletedate","discount"];

    public $timestamps = false;
    public function cate(){
        return $this->belongsTo('App\Cate','cate_id', 'id');
    }
}
