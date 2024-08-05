@extends('client.layouts.master')

@section('content')
    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Danh Mục</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Thể loại
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul class="collapse show list-unstyled pl-3">
                            @foreach ($loaiTins as $loaiTin)
                                <li>
                                    <a href="{{ route('shop.byCategory', ['idLT' => $loaiTin->id]) }}" class="text-decoration-none" data-id="{{ $loaiTin->id }}">
                                        {{ $loaiTin->tenloai }}
                                    </a>
                                </li>
                            @endforeach                        
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Tin tức gần đây
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                            {{-- <li><a class="text-decoration-none" href="#">Sport</a></li>
                            <li><a class="text-decoration-none" href="#">Luxury</a></li> --}}
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Tin tức nổi bật
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseThree" class="collapse list-unstyled pl-3">
                            {{-- <li><a class="text-decoration-none" href="#">Bag</a></li>
                            <li><a class="text-decoration-none" href="#">Sweather</a></li>
                            <li><a class="text-decoration-none" href="#">Sunglass</a></li> --}}
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <section class="bg-light">
                        <div class="container py-5">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="h3">Danh sách tin tức</h2>
                                    @if(isset($category))
                                        <h3 class="h4">Thuộc loại: {{ $category->tenloai }}</h3>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                @foreach ($news as $item)
                                    <div class="col-md-4 mb-4 bg-light">
                                        <div class="card h-100">
                                            <a href="{{ route('shopsingle', ['id' => $item->id]) }}">
                                                <img src="{{ asset('client/assets/img/' . $item->image) }}" class="card-img-top img-fluid" alt="{{ $item->tieude }}">
                                            </a>
                                            <div class="card-body">
                                                <a href="{{ route('shopsingle', ['id' => $item->id]) }}" class="h2 text-decoration-none text-dark">
                                                    {{ \Illuminate\Support\Str::limit($item->tieude, 50) }}
                                                </a>
                                                <p class="card-text">{{ \Illuminate\Support\Str::limit($item->tomtat, 100) }}</p>
                                                <p class="text-muted">Ngày đăng: {{ $item->created_at->format('d-m-Y') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->
@endsection
