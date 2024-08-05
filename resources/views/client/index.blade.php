@extends('client.layouts.master')

@section('content')
    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./client/assets/img/anhChinhTri.webp" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Tin Tức Mới Nhất</b></h1>
                                {{-- <h3 class="h2">Trang tin tức duy nhất của Zay</h3> --}}
                                <p>
                                    Tin Tức 24h luôn cập nhật những tin tức nóng hổi và sự kiện mới nhất từ khắp nơi trên
                                    thế giới.
                                    Với độ chính xác và tốc độ, chúng tôi mang đến cho bạn những thông tin quan trọng trong
                                    thời gian
                                    ngắn nhất, giúp bạn nắm bắt kịp thời mọi diễn biến. Đừng bỏ lỡ bất kỳ tin tức nào, hãy
                                    truy cập Tin
                                    Tức 24h mỗi ngày!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./client/assets/img/fifa.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-success"><b>Thể Thao Sôi Động</b></h1>
                                {{-- <h3 class="h2">Aliquip ex ea commodo consequat</h3> --}}
                                <p>
                                    Dành cho những người yêu thể thao, Tin Tức 24h cung cấp các bản tin, bình luận
                                    và kết quả thi đấu mới nhất từ các môn thể thao trong nước và quốc tế. Dù bạn
                                    là fan của bóng đá, bóng rổ, hay các môn thể thao khác, chúng tôi luôn sẵn sàng
                                    cập nhật những thông tin hấp dẫn và sôi động nhất.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./client/assets/img/vanhoagiaitri.jpeg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-success"><b>Văn Hóa & Giải Trí</b></h1>
                                {{-- <h3 class="h2">Ullamco laboris nisi ut </h3> --}}
                                <p>
                                    Không chỉ dừng lại ở tin tức chính trị và kinh tế, Tin Tức 24h còn mang
                                    đến cho bạn những thông tin thú vị về văn hóa và giải trí. Từ những sự kiện
                                    nghệ thuật nổi bật, các bộ phim đáng chú ý đến những câu chuyện về người nổi
                                    tiếng, chúng tôi đều có tất cả để làm phong phú thêm cuộc sống hàng ngày của
                                    bạn.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel"
            role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel"
            role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Thể Loại Tin Tức</h1>
                {{-- <p>
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                </p> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./client/assets/img/fifa.jpg" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Bóng đá</h5>
                {{-- <p class="text-center"><a class="btn btn-success">Xem</a></p> --}}
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./client/assets/img/anhChinhTri.webp"
                        class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Chính Trị</h2>
                {{-- <p class="text-center"><a class="btn btn-success">Xem</a></p> --}}
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./client/assets/img/vanhoa.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Văn Hoá & Giải Trí</h2>
                {{-- <p class="text-center"><a class="btn btn-success">Xem</a></p> --}}
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Tin Tức Mới Nhất</h1>
                </div>
            </div>
            <div class="row">
                <div class="row">
                    @foreach ($firstSetOfNews as $item)  {{-- hiển thị loại tin theo created_at giảm dần --}}
                        <div class="col-12 col-md-4 mb-4">
                            <div class="card h-100">
                                <a href="{{ route('shopsingle', ['id' => $item->id]) }}">
                                    <img src="{{ asset('client/assets/img/' . $item->image) }}" class="card-img-top img-fluid"
                                        alt="{{ $item->title }}">
                                </a>
                                <div class="card-body">
                                    <a href="{{ route('shopsingle', ['id' => $item->id]) }}"
                                        class="h2 text-decoration-none text-dark">
                                        <strong>
                                            {{ \Illuminate\Support\Str::limit($item->tieude, 45) }} {{-- Giới hạn kí tự trong 1 câu --}}
                                        </strong>
                                    </a>
                                    <p class="text-muted">{{ $item->loaitin->tenloai }}</p> {{--  hiển thị loại tin --}}
                                    <p class="card-text">
                                        {{ $item->tomtat }}<br><br>
                                        <span>Ngày đăng:</span>
                                        {{ $item->created_at->format('d-m-Y') }}<br><br>
                                        <span>Lượt xem:</span>
                                        {{ $item->views }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->

    {{-- Tin Tức Nổi bật --}}
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Tin Tức Nổi Bật</h1>
                </div>
            </div>
            <div class="row">
                @foreach ($news as $item) {{-- hiển thị loại tin theo views giảm dần --}}
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card h-100">
                            <a href="{{ route('shopsingle', ['id' => $item->id]) }}">
                                <img src="{{ asset('client/assets/img/' . $item->image) }}" class="card-img-top"
                                    alt="{{ $item->title }}">
                            </a>
                            <div class="card-body">
                                <a href="{{ route('shopsingle', ['id' => $item->id]) }}"
                                    class="h2 text-decoration-none text-dark">
                                    <strong>
                                        {{ \Illuminate\Support\Str::limit($item->tieude, 45) }} {{-- Giới hạn kí tự trong 1 câu --}}
                                    </strong>
                                </a>
                                <p class="text-muted"> {{ $item->loaitin->tenloai }} </p> {{--  hiển thị loại tin --}}
                                <p class="card-text">
                                    {{ $item->tomtat }}<br><br>
                                    <span>Ngày đăng:</span>
                                    {{ $item->created_at }}<br><br>
                                    <span>Lượt xem:</span>
                                    {{ $item->views }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>
    {{-- end tin tức nổi bật --}}
@endsection
