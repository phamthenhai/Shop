<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductDetailRequest;
use App\Product;
use App\Cate;
use App\Spec;

class ProductDetailController extends Controller
{
    public function getAdd(){
        $list = Spec::select("id", "name", "cate_id")->where("cate_id", 14)->orderBy("id", "DESC")->get()->toArray();
        return view("admin.productdetail.add", compact("list"));
    }
    public function postAdd(ProductRequest $request){
        $product = new Product;
        $product->name=$request->name;
        $product->price=$request->price;
        $product->cate_id = $request->sltParent;
        //$cate->createdate= new DateTime();
        //$cate->deletedate= new DateTime();
        $product->content=$request->contents;
        $product->image_link=$request->image_link;
        $product->image_list=$request->image_list;
        $product->view=$request->view;
        $product->discount=$request->discount;
        $name = Input::file('image_link')->getClientOriginalName();
        $file1 = Input::file('image_link');
        $file1->move(public_path().'/images/product/', $name);
        //image_list
        $files = Input::file('image_list');
        $file_count = count($files);
        $uploadcount = 0;
        $list_image = "";
        foreach($files as $file) {
            //$rules = array('file' => 'required'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
            //$validator = Validator::make(array('file'=> $file), $rules);
//            if($validator->passes()){
//                $destinationPath = '/image/product/list/';
//                $filename = $file->getClientOriginalName();
//                $upload_success = $file->move($destinationPath, $filename);
//                $uploadcount ++;
//                $list_image += $filename;
//                if($uploadcount < $file_count-1){
//                    $list_image += ",";
//                }
//            }
            $destinationPath = '/images/product/list/';
            $filename = $file->getClientOriginalName();
            $upload_success = $file->move(public_path().$destinationPath, $filename);
            $list_image = $list_image.$filename;
            if($uploadcount < $file_count-1){
                $list_image = $list_image.",";
            }
            $uploadcount ++;

        }
        $product->image_list=$list_image;
        $product->image_link=$name;
        $product->save();
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