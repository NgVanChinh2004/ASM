@extends('admin.layout.master')
@section('title')
    Chỉnh sửa tin tức
@endsection
@section('content')
    <h1 class="text-center">Chỉnh sửa tin tức</h1>
    <form action="{{ route('admin.newCategory.update', $loaiTin->id) }}"  method="POST">
        @csrf

        <label for="tenloai" class="form-label">Tên loại</label>
        <input type="text" class="form-control" value="{{ $loaiTin->tenloai }}" id="tenloai" name="tenloai" required>
        <br>
        <a href="{{ route('admin.newCategory.list') }}" class="btn btn-secondary">Quay lại</a>
        <button type="submit" class="btn btn-primary">Cập nhật</button>

    </form>
@endsection