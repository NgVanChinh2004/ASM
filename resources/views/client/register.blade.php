@extends('client.layouts.master')

@section('content')
    <form action="{{ route('register') }}" method="POST">
      @csrf
        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Họ Và Tên</label>
            <input type="text" name="name"  class="form-control" />
        </div>
        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Email</label>
            <input type="email" name="email"  class="form-control" />
        </div>

        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Mật khẩu</label>
            <input type="password" name="password"  class="form-control" />
        </div>

        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Nhập lại mật khẩu</label>
            <input type="password" name="password_confirmation"  class="form-control" />
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4"> Đăng ký</button>

        <!-- Register buttons -->
        <div class="text-center">
            <p>Bạn đã có tài khoản? <a style="text-decoration: none;" href="{{ route('login') }}">Đăng nhập</a></p>
            <p>Hoặc đăng nhập với:</p>
            <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-google"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-github"></i>
            </button>
        </div>
    </form>
@endsection
