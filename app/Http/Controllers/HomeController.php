<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductDetail;

class HomeController extends Controller
{
    public function getAllProduct(){
        $data = Product::select("id", "name", "price", "discount", "image_link", "image_list", "content")->orderBy("id", "DESC")->get()->toArray();
        return view('primary.index', compact("data"));
    }
    public function getProductDetail($id){
        $data = Product::find($id);
        $dataT = ProductDetail::select('product_detail.id', 'product_detail.content','specifications.name as namespec' )->join('specifications', 'product_detail.spec_id', '=', 'specifications.id')->where("product_id",$id)->get()->toArray();
        return view('primary.detail')->with(compact(["data", "dataT"]));
    }
}
