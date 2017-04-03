<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Spec;
use App\Cate;
use App\Http\Requests\SpecRequest;
use Illuminate\Support\Facades\Input;
class SpecController extends Controller
{
    public function getAdd(){
        $list = Cate::select("id", "name", "parent_id")->orderBy("id", "DESC")->get()->toArray();
        return view("admin.spec.add", compact("list"));
    }
    public function postAdd(SpecRequest $request){
        $spec = new Spec;
        $spec->name=$request->name;
        $spec->description=$request->desc;
        $spec->cate_id = $request->sltParent;
        $spec->save();
        return redirect()->route("admin.spec.add")->with(["flash_message", "success"]);
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
