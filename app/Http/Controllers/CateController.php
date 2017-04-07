<?php

namespace App\Http\Controllers;

use App\Http\Requests\CateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Cate;

class CateController extends Controller
{
    public function getAdd()
    {
        $data=array('menuParent'=>'Cate', 'menuChild'=>'viewAdd');
        $list = Cate::select("id", "name", "parent_id")->orderBy("id", "DESC")->get()->toArray();
        return view("admin.cate.add", $data)->with(compact("list"));
    }

    public function postAdd(CateRequest $request)
    {
        $cate = new Cate;
        $cate->name = $request->name;
        $cate->sort = $request->sort;
        $cate->parent_id = $request->sltParent;
        //$cate->createdate= new DateTime();
        //$cate->deletedate= new DateTime();
        $cate->description = $request->desc;
        if (Input::hasFile('link_image')) {
            $name = Input::file('link_image')->getClientOriginalName();
            $file = Input::file('link_image');
            $file->move(public_path() . '/images/', $name);
            $cate->link_image = $name;
        }
        $cate->save();
        return redirect()->route('admin.cate.add');
    }

    public function getEdit($id)
    {
//        $list = Cate::select("id", "name", "parent_id")->orderBy("id", "DESC")->get()->toArray();
        return view("admin.cate.edit");
    }

    public function postEdit()
    {
//        $list = Cate::select("id", "name", "parent_id")->orderBy("id", "DESC")->get()->toArray();
        return view("admin.cate.edit");
    }

    public function getList()
    {
        $data = array('menuParent'=>'Cate', 'menuChild'=>'viewList ');
        $list = Cate::select('id', 'name', 'parent_id')->orderBy('id', 'DESC')->get()->toArray();
        return view('admin.cate.list', $data)->with(compact("list"));
    }

    public function getDelete($id)
    {
        $data = Cate::find($id);
        $data->delete($id);
        return redirect()->route('admin.cate.list')->with(["flash_message", "success"]);
    }

}
