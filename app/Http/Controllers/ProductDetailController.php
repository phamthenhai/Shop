<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductDetailRequest;
use App\Product;
use App\Cate;
use App\Spec;
use App\ProductDetail;

class ProductDetailController extends Controller
{
    public function getAdd($id){
        $dataT = Product::select('product.id', 'product.name','price', 'cate.parent_id as parent_id', 'cate.id as cateid')->join('cate', 'product.cate_id', '=', 'cate.id')->where("product.id",$id)->first();
        $idC = 0;
        if(isset($dataT["parent_id"]) ){
            if($dataT["parent_id"] != 0){
                $idC = $dataT["parent_id"];
            }else{
                $idC = $dataT["cateid"];
            }
        }
        $list = Spec::select("id", "name", "cate_id")->where("cate_id", $idC)->orderBy("id", "DESC")->get()->toArray();
        $listProductDetail = ProductDetail::select("id", "content", "spec_id", "product_id")->where("product_id", $id)->orderBy("id", "DESC")->get()->toArray();
        return view("admin.productdetail.add", compact("listProductDetail"))->with(['dataT'=>$dataT, 'list'=>$list]);
    }
    public function postAdd(ProductDetailRequest $request, $id){
        $dataT = Product::select('product.id', 'product.name','price', 'cate.parent_id as parent_id', 'cate.id as cateid')->join('cate', 'product.cate_id', '=', 'cate.id')->where("product.id",$id)->first();
        $idC = 0;
        if(isset($dataT["parent_id"]) ){
            if($dataT["parent_id"] != 0){
                $idC = $dataT["parent_id"];
            }else{
                $idC = $dataT["cateid"];
            }
        }
        $list = Spec::select("id", "name", "cate_id")->where("cate_id", $idC)->orderBy("id", "DESC")->get()->toArray();
        $listProductDetail = ProductDetail::select("id", "content", "spec_id", "product_id")->where("product_id", $id)->orderBy("id", "DESC")->get()->toArray();
        foreach($list as $item){
            $productDetail = ProductDetail::select("id", "content", "spec_id", "product_id")->where([
                ['product_id', '=', $id],
                ['spec_id', '=', $item["id"]],
            ])->first();
            if($productDetail == null){
            $productDetail = new ProductDetail;}
            $productDetail->product_id=$request->product_id;
            $productDetail->spec_id=$item["id"];
            $productDetail->content = $request->input('spec_'.$item["id"]);
            $productDetail->save();
        }
        return redirect()->route("admin.product.add")->with(["flash_message", "success"]);
    }
    public function getEdit(){
//        $list = Cate::select("id", "name", "parent_id")->orderBy("id", "DESC")->get()->toArray();
        return view("admin.product.edit" );
    }
    public function postEdit(){
//        $list = Cate::select("id", "name", "parent_id")->orderBy("id", "DESC")->get()->toArray();
        return view("admin.product.edit" );
    }
    public function getList(){
//        $data = Cate::select('id', 'name', 'parent_id')->orderBy('id','DESC')->get()->toArray();
//        return view('admin.product.list', compact('data'));
    }
    public function getDelete($id){
//        $data = Cate::find($id);
//        $data->delete($id);
//        return redirect()->route('admin.product.list')->with(["flash_message", "success"]);
    }
}
