<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\loaitin;
use App\Models\tin;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index()
    {

        $data = tin::with('loaitin')->get();

        return view('admin.news.list', compact('data'));
    }

    public function create()
    {

        $data = tin::all();
        $loaiTins = loaitin::all();

        return view('admin.news.add', compact('data', 'loaiTins'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'tieude' => 'required|string|max:255',
            'tomtat' => 'required|string|max:255',
            'noidung' => 'required|string|max:1000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:255',
            'idLT' => 'required|exists:loaitin,id',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('client/assets/img'), $imageName);

        tin::create([
            'tieude' => $request->tieude,
            'tomtat' => $request->tomtat,
            'noidung' => $request->noidung,
            'image' => $imageName,
            'idLT' => $request->idLT,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Tin tức đã được thêm mới thành công.');
    }

    public function edit($id)
    {
        $data = tin::findOrFail($id);

        $loaiTins = LoaiTin::all();
        
        return view('admin.news.update', compact('data', 'loaiTins'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tieude' => 'required|string|max:255',
            'tomtat' => 'required|string|max:255',
            'noidung' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'idLT' => 'required|exists:loaitin,id',
        ]);

        $news = tin::findOrFail($id);

        if ($request->hasFile('image')) {
            // Lưu ảnh mới
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('client/assets/img'), $imageName);
            $news->image = $imageName;
        }

        $news->tieude = $request->tieude;
        $news->tomtat = $request->tomtat;
        $news->noidung = $request->noidung;
        $news->idLT = $request->idLT;

        $news->save();

        return redirect()->route('admin.dashboard')->with('success', 'Tin tức đã được cập nhật thành công.');
    }


    public function destroy($id)
    {
        $tin = tin::findOrFail($id);
        $tin->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Tin đã được xóa thành công.');
    }
}
