@extends('admin.layout.master')
@section('title')
    Thêm mới loại tin
@endsection
@section('content')
    <h1 class="text-center">Thêm mới loại tin</h1>
    <form action="{{ route('admin.newCategory.add') }}"  method="POST">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label for="tenloai" class="form-label">Tên loại</label>
                    <input type="text" class="form-control" placeholder="Nhập tên loại tin tức..." id="tenloai" name="tenloai">
                </div>
            </div><br><!--end col-->
            <div class="col-6">
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </form>
@endsection