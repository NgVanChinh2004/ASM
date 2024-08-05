@extends('client.layouts.master')

@section('content')
    <form action="{{ route('login') }}" method="POST">
      @csrf
        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Tài khoản</label>
            <input type="email" id="form2Example1" class="form-control" name="email" />
        </div>

        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Mật khẩu</label>
            <input type="password" id="password" class="form-control" name="password"/>
        </div>

        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
            <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example31"  />
                    <label style="margin-right: 50px" class="form-check-label" for="form2Example31"> Ghi nhớ tôi </label>
                </div>
            </div>

            <div class="col">
                <!-- Simple link -->
                <a href="#!" style="text-decoration: none;margin-left: 30px;"> Quên mật khẩu ?</a>
            </div>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Đăng nhập</button>

        <!-- Register buttons -->
        <div class="text-center">
            <p>Bạn chưa có tài khoản? <a href="{{ route('register') }}" style="text-decoration: none;">Đăng ký</a></p>
            <p>Hoặc đăng nhập nhanh hơn bằng</p>
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
