@extends('client.layouts.master')

@section('content')
@include('client.components.breadcrumb', ['pageName' => 'Tin tức'])

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
                            <li><a class="text-decoration-none" href="#">Sport</a></li>
                            <li><a class="text-decoration-none" href="#">Luxury</a></li>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Tin tức nổi bật
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseThree" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Bag</a></li>
                            <li><a class="text-decoration-none" href="#">Sweather</a></li>
                            <li><a class="text-decoration-none" href="#">Sunglass</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-inline shop-top-menu pb-3 pt-1">
                            {{-- @foreach ($new as $loaiTin)
                                <li class="list-inline-item">
                                    <a class="h3 text-dark text-decoration-none mr-3" href="#" data-id="{{ $loaiTin->id }}">
                                        {{ $loaiTin->loaitin->tenloai }}
                                    </a>
                                </li>
                            @endforeach --}}
                        </ul>
                    </div>
                </div>
                <div class="row">
                    @foreach($new as $newsItem)
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100">
                                <img src="{{ asset('client/assets/img/' . $newsItem->image) }}" class="card-img-top img-fluid" alt="{{ $newsItem->tieude }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ \Illuminate\Support\Str::limit($newsItem->tieude, 50) }} </h5>
                                    <p class="card-text">
                                        {{ \Illuminate\Support\Str::limit($newsItem->tomtat, 100) }}
                                    </p>
                                    <a href="{{ route('shopsingle', ['id' => $newsItem->id]) }}" class="btn btn-primary">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->
@endsection
