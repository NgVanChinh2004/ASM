@extends('admin.layout.master')
@section('title')
    Thêm mới tin tức
@endsection
@section('content')
    <h1 class="text-center">Thêm mới tin tức</h1>
    <form action="{{ route('admin.dashboard.add') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label for="tieude" class="form-label">Tiêu đề</label>
                    <input type="text" class="form-control" placeholder="Nhập tiêu đề tin tức..." id="tieude" name="tieude" value="{{ old('tieude') }}" required>
                </div>
            </div><!--end col-->
            <div class="col-12">
                <div class="mb-3">
                    <label for="tomtat" class="form-label">Tóm tắt</label>
                    <input type="text" class="form-control" placeholder="Nhập tiêu đề tóm tắt..." id="tomtat" name="tomtat" value="{{ old('tomtat') }}" required>
                </div>
            </div><!--end col-->
            <div class="col-6">
                <div class="mb-3">
                    <label for="image" class="form-label">Hình ảnh</label>
                    <input type="file" class="form-control" name="image" id="image" required>
                </div>
            </div><!--end col-->
            <div class="col-6">
                <div class="mb-3">
                    <label for="phonenumberInput" class="form-label">Loại tin</label>
                    <select name="idLT" id="idLT" class="form-control" required>
                        @foreach($loaiTins as $item)
                            <option value="{{ $item->id }}">{{ $item->tenloai }}</option>
                        @endforeach
                    </select>
                </div>
            </div><!--end col-->
            <div class="col-12">
                <div class="mb-3">
                    <label for="emailidInput" class="form-label">Nội dung</label>
                    <textarea name="noidung" id="noidung" cols="30" rows="10" class="form-control" placeholder="Nhập nội dung...">{{ old('noidung') }}</textarea>
                </div>
            </div><!--end col-->
            <div class="col-lg-6">
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </form>
@endsection
