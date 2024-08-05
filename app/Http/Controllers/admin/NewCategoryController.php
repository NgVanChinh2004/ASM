<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\loaitin;
use Illuminate\Http\Request;

class NewCategoryController extends Controller
{
    public function index()
    {

        $NewCategory = loaitin::all();

        return view('admin.news-category.list', compact('NewCategory'));
    }

    public function create()
    {

        $NewCategory = loaitin::all();

        return view('admin.news-category.add', compact('NewCategory'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'tenloai' => 'required|string|max:255|unique:loaitin',
        ]);

        loaitin::create([
            'tenloai' => $request->tenloai,
        ]);

        return redirect()->route('admin.newCategory.list');
    }

    public function edit($id)
    {
        $loaiTin = LoaiTin::findOrFail($id);

        return view('admin.news-category.update', compact('loaiTin'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tenloai' => 'required|string|max:255',
        ]);

        $loaiTin = LoaiTin::findOrFail($id);

        $loaiTin->tenloai = $request->tenloai;

        $loaiTin->save();

        return redirect()->route('admin.newCategory.list')->with('success', 'Loại tin đã được cập nhật thành công.');
    }

    public function destroy($id)
    {
        $loaiTin = LoaiTin::findOrFail($id);
        $loaiTin->delete();

        return redirect()->route('admin.newCategory.list')->with('success', 'Loại tin đã được xóa thành công.');
    }

}
