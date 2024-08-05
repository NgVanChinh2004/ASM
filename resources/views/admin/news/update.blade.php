@extends('admin.layout.master')
@section('title')
    Chỉnh sửa tin tức
@endsection
@section('content')
    <h1 class="text-center">Chỉnh sửa tin tức</h1>
    <form action="{{ route('admin.dashboard.update', $data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <label class="form-label" for="tieude" class="form-label">Tiêu Đề:</label>
        <input class="form-control" type="text" id="tieude" name="tieude" value="{{ old('tieude', $data->tieude) }}"
            required>
        <br>

        <label class="form-label" for="tomtat">Tóm Tắt:</label>
        <input class="form-control" type="text" id="tomtat" name="tomtat" value="{{ old('tomtat', $data->tomtat) }}"
            required>
        <br>

        <label class="form-label" for="noidung">Nội Dung:</label><br>
        <textarea id="noidung" name="noidung" cols="200" rows="10" required>{{ old('noidung', $data->noidung) }}</textarea>
        <br>

        <label class="form-label" for="image">Hình Ảnh:</label>
        <input class="form-control" type="file" id="image" name="image">
        <br>
        @if ($data->image)
            <img src="{{ asset('client/assets/img/' . $data->image) }}" alt="{{ $data->tieude }}"
                style="max-width: 200px;"><br>
        @endif
        <br>

        <label class="form-label" for="idLT">Loại Tin:</label>
        <select id="idLT" name="idLT" required class="form-control">
            @foreach ($loaiTins as $loaiTin)
                <option value="{{ $loaiTin->id }}" {{ $data->idLT == $loaiTin->id ? 'selected' : '' }}>
                    {{ $loaiTin->tenloai }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit" class="btn btn-primary">Cập Nhật</button>
    </form><br>
@endsection
