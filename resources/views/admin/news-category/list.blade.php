@extends('admin.layout.master')
@section('title')
    Danh sách loại tin
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Danh sách loại tin</h5>
                </div>
                <div class="card-body">
                    <table id="example"
                           class="table table-bordered dt-responsive nowrap table-striped align-middle"
                           style="width:100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên Loại</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($NewCategory as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->tenloai }}</td>
                                    <td class="text-nowrap d-flex">
                                        {{-- <a class="btn btn-primary" href="">Xem</a> --}}
                                        <a style="margin-right: 5px" class="btn btn-warning" href="{{ route('admin.newCategory.edit', $item->id) }}">Sửa</a>
                                        <form action="{{ route('admin.newCategory.destroy', $item->id) }}" method="POST">
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
