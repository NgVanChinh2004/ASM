@extends('admin.layout.master')
@section('title')
    Chỉnh sửa người dùng
@endsection
@section('content')
<h1>Chỉnh Sửa Người Dùng</h1>
<form action="{{ route('admin.user.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT') <!-- Giả lập phương thức PUT -->

    <label class="form-label" for="name">Tên:</label>
    <input  class="form-control" type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required>
    <br>

    <label class="form-label" for="email">Email:</label>
    <input  class="form-control" type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required>
    <br>

    <label class="form-label" for="password">Mật Khẩu:</label>
    <input  class="form-control" type="password" id="password" name="password">
    <br>

    <label class="form-label" for="password_confirmation">Xác Nhận Mật Khẩu:</label>
    <input  class="form-control" type="password" id="password_confirmation" name="password_confirmation">
    <br>

    <label class="form-label" for="type">Loại Người Dùng:</label>
    <select class="form-control"  id="type" name="type" required>
        <option value="admin" {{ $user->type == 'admin' ? 'selected' : '' }}>Admin</option>
        <option value="member" {{ $user->type == 'member' ? 'selected' : '' }}>Member</option>
    </select>
    <br>
    <a href="{{ route('admin.user.list') }}" class="btn btn-secondary">Quay lại</a>
    <button type="submit" class="btn btn-primary">Cập Nhật Người Dùng</button>
</form>
@endsection