<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý cửa hàng thú cưng</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend/img/logo.jpg')}}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="{{ asset('frontend/css/bsgrid.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.min.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />

</head>

<body>
    <div class="header">

        <div class="navbar"
            style="width: 100%; max-width: 100%; background-color: #ffffff; padding: 0 20px; position: fixed; top: 0; left: 0; z-index: 1000;">
            <div class="navbar__left">
                <a href="{{ URL::to('/')}}" class="navbar__logo">
                    <img src="{{ asset('frontend/img/logo.jpg') }}" alt="">
                </a>

                <div class="navbar__menu">
                    <i id="bars" class="fa fa-bars" aria-hidden="true"></i>
                    <ul>
                        <li><a href="{{ URL::to('/')}}">Trang chủ</a></li>
                        <li><a href="{{ URL::to('/congiong')}}">Con giống</a></li>
                        <li>
                            <a href="{{ URL::to('/services')}}">Dịch vụ</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('/donhang')}}">Đơn hàng</a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="navbar__center">
                <form action="{{route('search')}}" method="GET" class="navbar__search">
                    <input type="text" value="" placeholder="Nhập để tìm kiếm..." name="tukhoa" class="search" required>
                    <i class="fa fa-search" id="searchBtn"></i>
                </form>
            </div>

            <div class="navbar__right">

                @if (Auth::check())
                    <!-- Hiển thị nút logout -->

                    <span class="mr-2">{{Auth::user()->hoten}}</span>

                    <div class="logout">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button style="border: none;" type="submit"><i
                                    class="fas fa-sign-out-alt text-primary"></i></button>
                        </form>
                    </div>
                @else
                    <!-- Hiển thị nút login -->
                    <div class="login">
                        <a href="{{ URL::to('login')}}"><i class="fa fa-user"></i> </a>
                    </div>
                @endif

                <a href="{{ route('cart') }}" class="navbar__shoppingCart">
                    <img src="{{ asset('frontend/img/shopping-cart.svg')}}" style="width: 24px;" alt="">

                    @if (session('cart'))
                        <span>{{ count((array) session('cart')) }}</span>
                    @else
                        <span>0</span>

                    @endif
                </a>
            </div>
        </div>

    </div>

    <!-- Content -->
    @yield('content')

    <div class="go-to-top"><i class="fas fa-chevron-up"></i></div>

    <footer class="bg-dark text-light" >
        <!-- Image Grid Section -->
        <div class="container p-4">
            <section class="mb-4">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="bg-image hover-overlay shadow-1-strong rounded" data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/113.webp" class="w-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="bg-image hover-overlay shadow-1-strong rounded" data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/111.webp" class="w-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="bg-image hover-overlay shadow-1-strong rounded" data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/112.webp" class="w-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="bg-image hover-overlay shadow-1-strong rounded" data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/114.webp" class="w-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="bg-image hover-overlay shadow-1-strong rounded" data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/115.webp" class="w-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="bg-image hover-overlay shadow-1-strong rounded" data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/116.webp" class="w-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Info Section -->
        <div class="container">
            <div class="row py-4">
                <!-- About -->
                <div class="col-md-4">
                    <h4 class="text-uppercase font-weight-bold">Giới thiệu</h4>
                    <p>Website quản lý, mua bán thú cưng, nơi bạn tìm thấy những người bạn đáng yêu nhất.</p>
                </div>

                <!-- Contact -->
                <div class="col-md-4">
                    <h4 class="text-uppercase font-weight-bold">Liên hệ</h4>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt"></i> NTTU, QL1A, TPHCM</li>
                        <li><i class="fas fa-envelope"></i> myphan2003.cv@gmail.com</li>
                        <li><i class="fas fa-phone"></i> 123-456-789</li>
                    </ul>
                </div>

                <!-- Social -->
                <div class="col-md-4 text-center">
                    <h4 class="text-uppercase font-weight-bold">Theo dõi chúng tôi</h4>
                    <div class="social-icons mt-3">
                        <a href="https://www.facebook.com/my.duong25142003/" target="_blank" class="text-light mx-2">
                            <i class="fab fa-facebook fa-2x"></i>
                        </a>
                        <a href="https://github.com/taikhoanpthan" class="text-light mx-2">
                            <i class="fab fa-github fa-2x"></i>
                        </a>
                        <a href="#" class="text-light mx-2">
                            <i class="fab fa-google fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center py-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <p>&copy; 2022 All rights reserved. Designed by Anh Mỹ</p>
        </div>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        //Slider using Slick
        $(document).ready(function () {
            $('.post-wrapper').slick({
                slidesToScroll: 1,
                autoplay: true,
                arrow: true,
                dots: true,
                autoplaySpeed: 5000,
                prevArrow: $('.prev'),
                nextArrow: $('.next'),
                appendDots: $(".dot"),
            });
        });

        // Slick mutiple carousel
        $('.post-wrapper2').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            prevArrow: $('.prev2'),
            nextArrow: $('.next2'),
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 3,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>

    <script src="{{ asset('frontend/script/script.js') }}"></script>

</body>

</html>