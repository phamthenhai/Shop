<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spec extends Model
{
    protected $table = "specifications";
    protected $fillable = ["id", "name", "discription", "cate_id"];

    public $timestamps = false;
}
