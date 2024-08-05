<div class="container">
    <div class="row">

        <div class="col-md-4 pt-5">
            <h2 class="h2 text-success border-bottom pb-3 border-light logo">Zay News</h2>
            <ul class="list-unstyled text-light footer-link-list">
                <li>
                    <i class="fas fa-map-marker-alt fa-fw"></i>
                    30 Phú Mỹ - Mỹ Đình 2- Nam Từ Liêm - Hà Nội
                </li>
                <li>
                    <i class="fa fa-phone fa-fw"></i>
                    <a class="text-decoration-none" href="tel:010-020-0340">033-768-6606</a>
                </li>
                <li>
                    <i class="fa fa-envelope fa-fw"></i>
                    <a class="text-decoration-none" href="mailto:info@company.com">chinhbanh24@gmail.com</a>
                </li>
            </ul>
        </div>

        <div class="col-md-4 pt-5">
            <h2 class="h2 text-light border-bottom pb-3 border-light">Danh Mục</h2>
            <ul class="list-unstyled text-light footer-link-list">
                <li><a class="text-decoration-none" href="{{ route('about') }}">Giới Thiệu</a></li>
                <li><a class="text-decoration-none" href="{{ route('contact') }}">Góp Ý</a></li>
                <li><a class="text-decoration-none" href="#">Chính Sách Bảo Mật</a></li>
                <li><a class="text-decoration-none" href="#">Điều Khoản Sử Dụng</a></li>
                <li><a class="text-decoration-none" href="#">Liên Hệ Quảng Cáo</a></li>
            </ul>
        </div>

        <div class="col-md-4 pt-5">
            <h2 class="h2 text-light border-bottom pb-3 border-light">Thông Tin</h2>
            <ul class="list-unstyled text-light footer-link-list">
                <li><a class="text-decoration-none" href="{{ route('home') }}">Trang Chủ</a></li>
                <li><a class="text-decoration-none" href="{{ route('about') }}">Về Chúng Tôi</a></li>
                <li><a class="text-decoration-none" href="{{ route('shop') }}">Tin Tức</a></li>
                {{-- <li><a class="text-decoration-none" href="#">Loại Tin</a></li> --}}
                <li><a class="text-decoration-none" href="{{ route('contact') }}">Liên Hệ</a></li>
            </ul>
        </div>

    </div>

    <div class="row text-light mb-4">
        <div class="col-12 mb-3">
            <div class="w-100 my-3 border-top border-light"></div>
        </div>
        <div class="col-auto me-auto">
            <ul class="list-inline text-left footer-icons">
                <li class="list-inline-item border border-light rounded-circle text-center">
                    <a class="text-light text-decoration-none" target="_blank" href="https://www.facebook.com/ChinhDzai2004/"><i
                            class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                </li>
                <li class="list-inline-item border border-light rounded-circle text-center">
                    <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i
                            class="fab fa-instagram fa-lg fa-fw"></i></a>
                </li>
                <li class="list-inline-item border border-light rounded-circle text-center">
                    <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i
                            class="fab fa-twitter fa-lg fa-fw"></i></a>
                </li>
                <li class="list-inline-item border border-light rounded-circle text-center">
                    <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i
                            class="fab fa-linkedin fa-lg fa-fw"></i></a>
                </li>
            </ul>
        </div>
        <div class="col-auto">
            <label class="sr-only" for="subscribeEmail">Địa Chỉ Email</label>
            <div class="input-group mb-2">
                <input type="text" class="form-control bg-dark border-light" id="subscribeEmail"
                    placeholder="Địa Chỉ Email....">
                <div class="input-group-text btn-success text-light">Đăng ký</div>
            </div>
        </div>
    </div>
</div>

<div class="w-100 bg-black py-3">
    <div class="container">
        <div class="row pt-2">
            <div class="col-12">
                <p class="text-left text-light">
                    Copyright &copy; 2024 68 Media
                    | Designed by Nguyễn Văn Chỉnh
                </p>
            </div>
        </div>
    </div>
</div>
