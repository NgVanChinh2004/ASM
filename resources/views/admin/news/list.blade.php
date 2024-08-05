@extends('admin.layout.master')
@section('title')
    Danh sách tin tức
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Danh sách tin tức</h5>
                </div>
                <div class="card-body">
                    <table id="example"
                           class="table table-bordered dt-responsive nowrap table-striped align-middle"
                           style="width:100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tiêu đề</th>
                            <th>Tóm tắt</th>
                            <th>Hình ảnh</th>
                            <th>Nội dung</th>
                            <th>Loại tin</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->tieude }}</td>
                            <td>{{ $item->tomtat }}</td>
                            <td>
                                <img src="{{ asset('client/assets/img/' . $item->image) }}" height="100" alt="{{ $item->tieude }}">
                            </td>
                            <td>{{ $item->noidung }}</td>
                            <td>{{ $item->loaitin->tenloai }}</td>
                            <td class="text-nowrap d-flex">
                                <a style="margin-right: 5px" class="btn btn-warning" href="{{ route('admin.dashboard.edit', $item->id) }}">Sửa</a>
                                <form action="{{ route('admin.dashboard.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Bạn có chắc chắn muốn thực hiện hành động này?')" type="submit" class="btn btn-danger">Xóa</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                       
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end col-->
    </div
@endsection
