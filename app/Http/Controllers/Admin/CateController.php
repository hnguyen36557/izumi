<?php

namespace App\Http\Controllers\Admin;

use App\Cate;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cate = Cate::all();
        return view('admin.cate.index',['cate' => $cate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent = Cate::select('id', 'name', 'parent_id')->get()->toArray();
        return view('admin.cate.create',['parent' => $parent]);
//        return view('admin.cate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required|unique:cates,name'
            ],[
                'name.required' => 'Vui lòng nhập tên danh mục',
                'name.unique' => 'Tên danh mục đã tồn tại',
            ]);
        $cate = new Cate();
        $cate->name = $request->name;
        $cate->slug = changeTitle($request->name);
        $cate->parent_id = $request->sltParent;
        $cate->save();
        //dd($cate);
        return redirect()->route('admin.cate.index')->withSuccess('Thêm Danh Mục Sản Phẩm Mới Thành Công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cate = Cate::findOrFail($id);
        $parent = Cate::select('id','name','parent_id')->get()->toArray();
        return view('admin.cate.edit', compact('cate', 'parent', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required'
        ],[
            'name.required' => 'Vui lòng nhập tên danh mục',
        ]);
        $cate = Cate::findOrFail($id);
        $cate->name = $request->name;
        $cate->slug = changeTitle($request->name);
        $cate->parent_id = $request->sltParent;
        $cate->save();
        return redirect()->route('admin.cate.index')->withSuccess('Cập Nhật Danh Mục Sản Phẩm Thành Công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parent = Cate::where('parent_id',$id)->count();
        if($parent == 0){
            $cate = Cate::find($id);
            $cate->delete($id);
            return redirect()->route('admin.cate.index')->withSuccess('Xóa Danh Mục Sản Phẩm Thành Công');
        }else {
            echo"<script type='text/javascript'>
				window.alert('Thông Báo! Bạn Có Chắc Là Muốn Xóa Danh Mục Này Không???');
				window.location = '";
            echo route('admin.cate.index');
            echo"'
			</script>";
        }
    }
}
