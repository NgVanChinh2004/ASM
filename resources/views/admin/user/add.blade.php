@extends('admin.layout.master')
@section('title')
    Thêm mới người dùng
@endsection
@section('content')
    <h1 class="text-center">Thêm mới người dùng</h1>
    <form action="{{ route('admin.user.add') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label for="name" class="form-label">Tên</label>
                    <input type="text" class="form-control" value="{{ old('name') }}" id="name" name="name" required>
                </div>
            </div><!--end col-->
            <div class="col-12">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" value="{{ old('email') }}" id="email" name="email" required>
                </div>
            </div><!--end col-->
            <div class="col-6">
                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" value="{{ old('password') }}" id="password" name="password" required>
                </div>
            </div><!--end col-->            
            <div class="col-6">
                <div class="mb-3">
                    <label for="password" class="form-label">Xác nhận mật khẩu</label>
                    <input type="password" class="form-control" value="{{ old('password') }}" id="password_confirmation" name="password_confirmation" required>
                </div>
            </div><!--end col-->
            <div class="col-12">
                <div class="mb-3">
                    <label for="phonenumberInput" class="form-label">Loại Người Dùng</label>
                    <select id="type" name="type" class="form-control"  required>
                        <option value="{{ \App\Models\User::TYPE_MEMBER }}" selected>Member</option>
                        <option value="{{ \App\Models\User::TYPE_ADMIN }}">Admin</option>
                    </select>
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