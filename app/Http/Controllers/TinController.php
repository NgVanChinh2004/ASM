<?php

namespace App\Http\Controllers;

use App\Models\Tin;
use App\Models\loaitin;
use Illuminate\Http\Request;

class TinController extends Controller
{

    public function show($id)
    {
        $newsItem = tin::findOrFail($id);
        $comments = $newsItem->comments()->with('user')->get(); // Lấy danh sách bình luận cùng thông tin người dùng
        $news = tin::where('id', '!=', $id)->get(); // Lấy các tin tức khác

        return view('client.shop-single', compact('newsItem', 'comments', 'news'));
    }

    public function index()
    {
        // $news = Tin::with('loaitin')->get();
        $firstSetOfNews = Tin::with('loaitin')
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();
        $news = Tin::with('loaitin')
            ->orderBy('views', 'desc')
            ->limit(6)
            ->get();
        return view('client.index', compact('firstSetOfNews', 'news'));
    }

    // public function show($id) {
    //     // Tìm tin theo ID hoặc trả về lỗi 404 nếu không tìm thấy
    //     $newsItem = Tin::with('loaitin')->findOrFail($id);

    //     // Tăng số lượt xem lên 1
    //     $newsItem->increment('views');

    //     // Trả về view chi tiết với tin tức
    //     return view('client.shop-single', compact('newsItem'));
    // }

    public function contact()
    {
        return view('client.contact');
    }

    public function shopByCategory($idLT)
    {
        $new = tin::with('loaitin')->get();
        $news = Tin::where('idLT', $idLT)->get();
        $loaiTins = loaitin::all();
        $category = LoaiTin::find($idLT);

        return view('client.tinTrongLoai', compact('news', 'category', 'new','loaiTins'));
    }
    public function shop()
    {
        $new = tin::all();

        $loaiTins = loaitin::all();

        return view('client.shop', compact('new','loaiTins'));
    }

    public function about()
    {
        return view('client.about');
    }

    public function shopsingle($id)
    {
        // tin tức liên quan
        $news = Tin::with('loaitin')
            ->orderBy('views', 'desc')
            ->get();

        // Tìm tin theo ID hoặc trả về lỗi 404 nếu không tìm thấy
        $newsItem = Tin::with('loaitin')->findOrFail($id);

        // Tăng số lượt xem lên 1
        $newsItem->increment('views');

        // Trả về view chi tiết với tin tức
        return view('client.shop-single', compact('newsItem', 'news')); // Chuyển đến view shopsingle.blade.php

    }

    // public function loginForm() {
    //     return view('client.login');
    // }
    // public function registerForm() {
    //     return view('client.register');
    // }

}
