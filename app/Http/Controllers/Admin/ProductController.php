<?php

namespace App\Http\Controllers\Admin;

use App\Cate;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::select('id', 'cate_id', 'name', 'price', 'discount', 'image', 'content', 'title', 'meta_desc', 'meta_key', 'created_at')->orderBy('id', 'DESC')->get()->toArray();
        return view('admin.product.index', ['product' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = Cate::select('id', 'name', 'parent_id')->get()->toArray();
        return view('admin.product.create', ['cate' => $cate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|unique:products,name',
            'price' => 'required',
            'images' => 'required',
            'sltParent' => 'required',
            'contents' => 'required|min:3'
        ],[
            'name.required' => 'Vui lòng nhập tên sản phẩm',
            'name.min' => 'Tên sản phẩm phải có ít nhất 3 ký tự',
            'name.unique' => 'Tên sản phẩm đã tồn tại',
            'images.required' => 'Vui lòng nhập hình',
            'price.required' => 'Vui lòng nhập giá sản phẩm',
            'sltParent.required' => 'Vui lòng nhập danh mục',
            'contents.required' => 'Vui lòng nhập mô tả sản phẩm',
            'contents.min' => 'Mô tả sản phẩm phải có ít nhất 3 ký tự'
        ]);
        $file_name = $request->file('images')->getClientOriginalName();
        $product = new Product();
        $product->name = $request->name;
        $product->slug = changeTitle($request->name);
        $product->image = $file_name;
        $product->price = $request->price;
        $product->cate_id = $request->sltParent;
        $product->title = $request->site_title;
        $product->discount = $request->discount;
        $product->meta_desc = $request->meta_desc;
        $product->meta_key = $request->meta_key;
        $product->content = $request->contents;

        $request->file('images')->move('public/uploads/images/', $file_name);
        $product->save();
        
        return redirect()->route('admin.product.index')->withSuccess('Thêm Sản Phẩm Thành Công');
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
        $product = Product::findOrFail($id);
        $parent = Cate::select('id', 'name', 'parent_id')->get()->toArray();
        return view('admin.product.edit', compact('product', 'parent', 'id'));
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
        $file_name = $request->file('images')->getClientOriginalName();
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->slug = changeTitle($request->name);
        $product->image = $file_name;
        $product->price = $request->price;
        $product->cate_id = $request->sltParent;
        $product->title = $request->site_title;
        $product->discount = $request->discount;
        $product->meta_desc = $request->meta_desc;
        $product->meta_key = $request->meta_key;
        $product->content = $request->contents;

        $request->file('images')->move('public/uploads/images/', $file_name);
        $product->save();

        return redirect()->route('admin.product.index')->withSuccess('Chỉnh Sửa Sản Phẩm Thành Công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.product.index')->withSuccess('Product Successfully Deleted');
    }
}
