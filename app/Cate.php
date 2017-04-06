<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    protected $table = "cate";
    protected $fillable = ["id", "name", "parent_id", "sort", "createdate", "deletedate", "description", "link_image"];

    public $timestamps = false;
    public function product(){
        return $this->hasMany('App\Product','cate_id', 'id');
    }

}
