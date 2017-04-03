<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Product;

use Illuminate\Support\Facades\Input;
class ProductController extends Controller
{
    public function getAdd(){
//        $list = Cate::select("id", "name", "parent_id")->orderBy("id", "DESC")->get()->toArray();
        return view("admin.product.add");
    }
    public function postAdd(ProductRequest $request){
        $cate = new Product;
        $cate->name=$request->name;
        $cate->price=$request->price;
        $cate->cate_id = 13;
        //$cate->createdate= new DateTime();
        //$cate->deletedate= new DateTime();
        $cate->content=$request->contents;
        $cate->image_link=$request->image_link;
        $cate->image_list=$request->image_list;
        $cate->view=$request->view;
        $cate->discount=$request->discount;
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
        $cate->image_list=$list_image;
        $cate->image_link=$name;
        $cate->save();
        return view("admin.product.add" );
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
