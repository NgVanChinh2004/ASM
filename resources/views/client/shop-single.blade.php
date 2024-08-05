@extends('client.layouts.master')

@section('content')
    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img src="{{ asset('client/assets/img/' . $newsItem->image) }}" class="card-img-top img-fluid"
                            alt="{{ $newsItem->title }}">
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Danh sách bình luận</h4>
                            {{-- @foreach ($comments as $comment)
                                <div class="comment mb-3">
                                    <p><strong>{{ $comment->user->name }}</strong>
                                        ({{ $comment->created_at->format('d-m-Y') }})</p>
                                    <p>{{ $comment->comment }}</p>
                                </div>
                            @endforeach --}}
                        </div>
                    </div>

                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2">{{ $newsItem->tieude }}
                            </h1> {{-- tiêu đề tin tức  --}}
                            <p class="h3 py-2">{{ $newsItem->created_at->format('d-m-Y') }}</p> {{-- Ngày đăng tin tức  --}}
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Thể Loại:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>{{ $newsItem->loaitin->tenloai }}</strong></p>
                                    {{-- Loại tin  --}}
                                </li>
                            </ul>
                            <p>
                                {{ $newsItem->tomtat }}
                            </p> {{-- tóm tắt  --}}
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <p class="">
                                        <strong>
                                            {{ $newsItem->noidung }}
                                        </strong>
                                    </p> {{-- nội dung --}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

    <!-- Start Article -->
    <section class="py-5">
        <div class="container">
            <div class="row text-left p-2 pb-3">
                <h4>Tin Liên Quan</h4>
            </div>
            <!--Start Carousel Wrapper-->
            <div id="carousel-related-product">
                @foreach ($news as $item)
                    <div class="p-2 pb-3 h-100">
                        <div class="product-wap card rounded-0">
                            <div class="card rounded-0">
                                <img src="{{ asset('client/assets/img/' . $item->image) }}" class="card-img-top"
                                    alt="{{ $item->title }}">
                            </div>
                            <div class="card-body">
                                <a href="{{ route('shopsingle', ['id' => $item->id]) }}" class="h3 text-decoration-none">
                                    <strong>
                                        {{ \Illuminate\Support\Str::limit($item->tieude, 60) }}
                                    </strong>
                                </a>
                                {{-- <p>
                                    {{$item->loaitin->tinloai}}
                                </p> --}}
                                <p>
                                    {{ \Illuminate\Support\Str::limit($item->tomtat, 100) }}<br><br>
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
    </section>
    <!-- End Article -->
@endsection
