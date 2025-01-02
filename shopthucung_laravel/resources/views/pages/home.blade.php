@extends('layout')
@section('content')

<div class="post-slider">
    <i class="fa fa-chevron-left prev" aria-hidden="true"></i>
    <i class="fa fa-chevron-right next" aria-hidden="true"></i>

    <div class="post-wrapper">
        <div class="post">
            <img src="{{ asset('frontend/img/BG-1.jpg')}}" alt="">
        </div>
        <div class="post">
            <img src="{{ asset('frontend/img/BG-2.jpg')}}" alt="">
        </div>
        <div class="post">
            <img src="{{ asset('frontend/img/BG-3.jpg')}}" alt="">
        </div>
    </div>

</div>

<!-- Sản phẩm nổi bật -->
<div class="body" style="padding: 30px 100px; background-color: #f8f8f8;">
    <div class="featured-products__title" style="text-align: center; margin-bottom: 20px;">
        <h2 style="font-size: 28px; font-weight: 700; color: #333;">Sản phẩm nổi bật</h2>
    </div>

    <div class="product-slider" style="position: relative;">
        <i class="fa fa-chevron-left prev" aria-hidden="true"
            style="position: absolute; top: 50%; transform: translateY(-50%); font-size: 30px; color: #333; cursor: pointer; left: 10px; z-index: 10;"></i>
        <i class="fa fa-chevron-right next" aria-hidden="true"
            style="position: absolute; top: 50%; transform: translateY(-50%); font-size: 30px; color: #333; cursor: pointer; right: 10px; z-index: 10;"></i>

        <div class="product-list" style="display: flex; gap: 20px; overflow-x: auto; scroll-snap-type: x mandatory;">
            @foreach($sanphams as $sanpham)
                <div class="product-card"
                    style="background-color: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width: 220px; flex-shrink: 0; scroll-snap-align: center;">
                    <a href="{{ route('detail', ['id' => $sanpham->id_sanpham]) }}"
                        style="text-decoration: none; color: inherit;">
                        <div class="product-img" style="width: 100%; height: 200px; overflow: hidden;">
                            <img src="{{$sanpham->anhsp}}" alt="{{$sanpham->tensp}}"
                                style="width: 100%; height: 100%; object-fit: cover;" />
                        </div>

                        <div class="product-info" style="padding: 15px; text-align: center;">
                            <div class="product-sale"
                                style="font-size: 14px; color: #ff4500; font-weight: bold; margin-bottom: 10px;">
                                @if($sanpham->giamgia)
                                    -{{$sanpham->giamgia}}%
                                @else
                                    Mới
                                @endif
                            </div>

                            <div class="product-title"
                                style="font-size: 16px; font-weight: bold; color: #333; margin-bottom: 10px;">
                                {{$sanpham->tensp}}
                            </div>

                            @if($sanpham->giamgia)
                                <div class="product-old-price"
                                    style="font-size: 14px; color: #999; text-decoration: line-through;">
                                    {{ number_format($sanpham->giasp, 0, ',', '.') }}₫
                                </div>
                            @endif

                            <div class="product-new-price" style="font-size: 18px; font-weight: bold; color: #ff4500;">
                                {{ number_format($sanpham->giakhuyenmai, 0, ',', '.') }}₫
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>



<div class="banner">
    <div class="body__mainTitle">
        <h2>Dịch vụ của chúng tôi</h2>
    </div>

    <div class="banner-top banner-top-2 row">
        <div class="col-md-3 col-sm-6">
            <a href="#" class="banner-top-2-child" style="background-color: #5BAB7B;">
                <div class="text-white">Pet Store thú cưng</div>
            </a>
        </div>

        <div class="col-md-3 col-sm-6">
            <a href="#" class="banner-top-2-child" style="background-color: #5C9CCA;">
                <div class="text-white" style="margin: 0 auto;">Pet Hotel khách sạn cho thú cưng</div>
            </a>
        </div>

        <div class="col-md-3 col-sm-6">
            <a href="#" class="banner-top-2-child" style="background-color: #C67B36;">
                <div class="text-white" style="margin: 0 auto;">Pet Grooming spa dành cho thú cưng</div>
            </a>
        </div>

        <div class="col-md-3 col-sm-6">
            <a href="#" class="banner-top-2-child" style="background-color: #AB5D58;">
                <div class="text-white">Sản phẩm độc quyền</div>
            </a>
        </div>

    </div>
</div>

<!-- Sản phẩm cho chó -->
<div class="body">

    <div class="body__mainTitle d-flex align-items-center">
        <h2>Sản phẩm dành cho chó</h2>
        <b>
            <div class="d-flex justify-content-center align-items-center ml-5" style="font-size: 26px;">
                <div id="fordog" class="text-secondary activeColor mr-3">Đồ ăn</div>
                <div id="fordog2" class="text-secondary mr-3">Phụ kiện</div>
                <div id="fordog3" class="text-secondary">Vật dụng</div>
            </div>
        </b>

    </div>

    <div class="dogfood active">
        <div class="row">
            @foreach($dogproducts as $dogproduct)
                <div class="col-lg-2_5 col-md-4 col-6 post2">
                    <a href="{{ route('detail', ['id' => $dogproduct->id_sanpham]) }}">
                        <div class="product">
                            <div class="product__img">
                                <img src="{{$dogproduct->anhsp}}" alt="">
                            </div>
                            <div class="product__sale">
                                <div>
                                    @if($dogproduct->giamgia)
                                        -{{$dogproduct->giamgia}}%
                                        @else Mới
                                    @endif
                                </div>
                            </div>

                            <div class="product__content">
                                <div class="product__title">
                                    {{$dogproduct->tensp}}
                                </div>

                                <div class="product__pride-oldPride">
                                    <span class="Price">
                                        <bdi>
                                            {{ number_format($dogproduct->giasp, 0, ',', '.') }}
                                            <span class="currencySymbol">₫</span>
                                        </bdi>
                                    </span>
                                </div>

                                <div class="product__pride-newPride">
                                    <span class="Price">
                                        <bdi>
                                            {{ number_format($dogproduct->giakhuyenmai, 0, ',', '.') }}
                                            <span class="currencySymbol">₫</span>
                                        </bdi>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="dogstyle">
        <div class="row">
            <div class="col-lg-2_5 col-md-4 col-6 post2">
                <a href="#">
                    <div class="product">
                        <div class="product__img">
                            <img src="/upload/abc.png" alt="">
                        </div>
                        <div class="product__sale">
                            <div>Mới</div>
                        </div>

                        <div class="product__content">
                            <div class="product__title">
                                {{$sanpham->tensp}}
                            </div>

                            <div class="product__pride-oldPride">
                                <span class="Price">
                                    <bdi>
                                        300000
                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                            <div class="product__pride-newPride">
                                <span class="Price">
                                    <bdi>
                                        {{$sanpham->giasp}}
                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                        </div>

                    </div>

                </a>
            </div>
        </div>
    </div>

    <div class="dogequi">
        <div class="row">
            <div class="col-lg-2_5 col-md-4 col-6 post2">
                <a href="#">
                    <div class="product">
                        <div class="product__img">
                            <img src="/upload/abc.png" alt="">
                        </div>
                        <div class="product__sale">
                            <div>Mới</div>
                        </div>

                        <div class="product__content">
                            <div class="product__title">
                                {{$sanpham->tensp}}
                            </div>

                            <div class="product__pride-oldPride">
                                <span class="Price">
                                    <bdi>
                                        300000
                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                            <div class="product__pride-newPride">
                                <span class="Price">
                                    <bdi>
                                        {{$sanpham->giasp}}
                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                        </div>

                    </div>

                </a>
            </div>

        </div>
    </div>
</div>

<div class="banner">
    <div class="banner-top">
        <img src="{{ asset('frontend/img/BG-2.jpg')}}" />
    </div>
</div>

<!-- Sản phẩm cho mèo -->
<div class="body">

    <div class="body__mainTitle d-flex align-items-center">
        <h2>Sản phẩm dành cho mèo</h2>
        <b>
            <div class="d-flex justify-content-center align-items-center ml-5" style="font-size: 26px;">
                <div id="forcat" class="text-secondary activeColor mr-3">Đồ ăn</div>
                <div id="forcat2" class="text-secondary mr-3">Phụ kiện</div>
                <div id="forcat3" class="text-secondary">Vật dụng</div>
            </div>
        </b>

    </div>

    <div class="catfood active">
        <div class="row">
            @foreach($catproducts as $catproduct)
                <div class="col-lg-2_5 col-md-4 col-6 post2">
                    <a href="{{ route('detail', ['id' => $catproduct->id_sanpham]) }}">
                        <div class="product">
                            <div class="product__img">
                                <img src="{{$catproduct->anhsp}}" alt="">
                            </div>
                            <div class="product__sale">
                                <div>
                                    @if($catproduct->giamgia)
                                        -{{$catproduct->giamgia}}%
                                        @else Mới
                                    @endif
                                </div>
                            </div>

                            <div class="product__content">
                                <div class="product__title">
                                    {{$catproduct->tensp}}
                                </div>

                                <div class="product__pride-oldPride">
                                    <span class="Price">
                                        <bdi>
                                            {{ number_format($catproduct->giasp, 0, ',', '.') }}
                                            <span class="currencySymbol">₫</span>
                                        </bdi>
                                    </span>
                                </div>

                                <div class="product__pride-newPride">
                                    <span class="Price">
                                        <bdi>
                                            {{ number_format($catproduct->giakhuyenmai, 0, ',', '.') }}
                                            <span class="currencySymbol">₫</span>
                                        </bdi>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="catstyle">
        <div class="row">
            <div class="col-lg-2_5 col-md-4 col-6 post2">
                <a href="#">
                    <div class="product">
                        <div class="product__img">
                            <img src="/upload/abc.png" alt="">
                        </div>
                        <div class="product__sale">
                            <div>Mới</div>
                        </div>

                        <div class="product__content">
                            <div class="product__title">
                                {{$sanpham->tensp}}
                            </div>

                            <div class="product__pride-oldPride">
                                <span class="Price">
                                    <bdi>
                                        300000
                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                            <div class="product__pride-newPride">
                                <span class="Price">
                                    <bdi>
                                        {{$sanpham->giasp}}
                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                        </div>

                    </div>

                </a>
            </div>

        </div>
    </div>

    <div class="catequi">
        <div class="row">
            <div class="col-lg-2_5 col-md-4 col-6 post2">
                <a href="#">
                    <div class="product">
                        <div class="product__img">
                            <img src="/upload/abc.png" alt="">
                        </div>
                        <div class="product__sale">
                            <div>Mới</div>
                        </div>

                        <div class="product__content">
                            <div class="product__title">
                                {{$sanpham->tensp}}
                            </div>

                            <div class="product__pride-oldPride">
                                <span class="Price">
                                    <bdi>
                                        300000
                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                            <div class="product__pride-newPride">
                                <span class="Price">
                                    <bdi>
                                        {{$sanpham->giasp}}
                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                        </div>

                    </div>

                </a>
            </div>
        </div>
    </div>
</div>

<div class="banner">

    <div class="row banner-top">
        <img class="col-md-4 col-sm-6" src="{{ asset('frontend/img/BG-1.jpg')}}" />
        <img class="col-md-4 col-sm-6" src="{{ asset('frontend/img/BG-2.jpg')}}" />
        <img class="col-md-4 col-sm-6" src="{{ asset('frontend/img/BG-3.jpg')}}" />
    </div>
</div>

<!-- Con giống -->
<div class="body">

    <div class="body__mainTitle d-flex align-items-center">
        <h2>Con giống</h2>
        <b>
            <div class="d-flex justify-content-center align-items-center ml-5" style="font-size: 26px;">
                <div id="clickDog" class="text-secondary activeColor mr-3">Chó</div>
                <div id="clickCat" class="text-secondary mr-3">Mèo</div>
            </div>
        </b>
    </div>

    <div class="dog active">
        <div class="row">
            @foreach($choGiongs as $choGiong)
                <div class="col-lg-2_5 col-md-4 col-6 post2">
                    <a href="{{ route('detail', ['id' => $choGiong->id_sanpham]) }}">
                        <div class="product"
                            style="max-height: 600px; display: flex; flex-direction: column; justify-content: space-between;">
                            <div class="product__img" style="max-height: 200px; overflow: hidden;">
                                <img src="{{$choGiong->anhsp}}" alt=""
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>

                            <!-- Nhãn Giảm Giá -->
                            <div class="product__sale"
                                style="position: absolute; top: 10px; left: 10px; background: rgba(255, 0, 0, 0.7); color: white; padding: 5px; font-weight: bold;">
                                @if($choGiong->giamgia)
                                    -{{$choGiong->giamgia}}%
                                    @else Mới
                                @endif
                            </div>

                            <div class="product__content" style="padding: 10px;">
                                <div class="product__title" style="font-size: 16px; font-weight: bold; margin-bottom: 5px;">
                                    {{$choGiong->tensp}}
                                </div>

                                <div class="product__pride-oldPride"
                                    style="font-size: 14px; color: #999; text-decoration: line-through;">
                                    <span class="Price">
                                        <bdi>
                                            {{ number_format($choGiong->giasp, 0, ',', '.') }}
                                            <span class="currencySymbol">₫</span>
                                        </bdi>
                                    </span>
                                </div>

                                <div class="product__pride-newPride"
                                    style="font-size: 16px; font-weight: bold; color: #ff4500; margin-top: 5px;">
                                    <span class="Price">
                                        <bdi>
                                            {{ number_format($choGiong->giakhuyenmai, 0, ',', '.') }}
                                            <span class="currencySymbol">₫</span>
                                        </bdi>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="cat">
        <div class="row">
            @foreach($meoGiongs as $meoGiong)
                <div class="col-lg-2_5 col-md-4 col-6 post2">
                    <a href="{{ route('detail', ['id' => $meoGiong->id_sanpham]) }}">
                        <div class="product"
                            style="max-height: 600px; display: flex; flex-direction: column; justify-content: space-between;">
                            <div class="product__img" style="max-height: 200px; overflow: hidden;">
                                <img src="{{$meoGiong->anhsp}}" alt=""
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>

                            <!-- Nhãn Giảm Giá -->
                            <div class="product__sale"
                                style="position: absolute; top: 10px; left: 10px; background: rgba(255, 0, 0, 0.7); color: white; padding: 5px; font-weight: bold;">
                                @if($meoGiong->giamgia)
                                    -{{$meoGiong->giamgia}}%
                                    @else Mới
                                @endif
                            </div>

                            <div class="product__content" style="padding: 10px;">
                                <div class="product__title" style="font-size: 16px; font-weight: bold; margin-bottom: 5px;">
                                    {{$meoGiong->tensp}}
                                </div>

                                <div class="product__pride-oldPride"
                                    style="font-size: 14px; color: #999; text-decoration: line-through;">
                                    <span class="Price">
                                        <bdi>
                                            {{ number_format($meoGiong->giasp, 0, ',', '.') }}
                                            <span class="currencySymbol">₫</span>
                                        </bdi>
                                    </span>
                                </div>

                                <div class="product__pride-newPride"
                                    style="font-size: 16px; font-weight: bold; color: #ff4500; margin-top: 5px;">
                                    <span class="Price">
                                        <bdi>
                                            {{ number_format($meoGiong->giakhuyenmai, 0, ',', '.') }}
                                            <span class="currencySymbol">₫</span>
                                        </bdi>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

</div>

<!-- Tất cả sản phẩm -->
<div class="body">

    <div class="body__mainTitle">
        <h2>TẤT CẢ SẢN PHẨM</h2>
    </div>

    <div>
        <div class="row">
            @foreach($alls as $all)
                <div class="col-lg-2_5 col-md-4 col-6 post2">
                    <a href="{{ route('detail', ['id' => $all->id_sanpham]) }}">
                        <div class="product"
                            style="max-height: 400px; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between; position: relative;">
                            <!-- Hình ảnh -->
                            <div class="product__img" style="max-height: 200px; overflow: hidden;">
                                <img src="{{$all->anhsp}}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>

                            <!-- Nhãn Giảm giá / Mới -->
                            <div class="product__sale"
                                style="position: absolute; top: 10px; background: rgba(255, 69, 0, 0.7); color: white; padding: 5px; font-size: 14px; font-weight: bold;">
                                @if($all->giamgia)
                                    -{{$all->giamgia}}%
                                @else
                                    Mới
                                @endif
                            </div>

                            <!-- Nội dung sản phẩm -->
                            <div class="product__content" style="padding: 10px; text-align: center;">
                                <div class="product__title" style="font-size: 16px; font-weight: bold; margin-bottom: 5px;">
                                    {{$all->tensp}}
                                </div>

                                <!-- Giá cũ -->
                                <div class="product__pride-oldPride"
                                    style="font-size: 14px; color: #999; text-decoration: line-through;">
                                    <span class="Price">
                                        <bdi>
                                            {{ number_format($all->giasp, 0, ',', '.') }}
                                            <span class="currencySymbol">₫</span>
                                        </bdi>
                                    </span>
                                </div>

                                <!-- Giá khuyến mãi -->
                                <div class="product__pride-newPride"
                                    style="font-size: 16px; font-weight: bold; color: #ff4500; margin-top: 5px;">
                                    <span class="Price">
                                        <bdi>
                                            {{ number_format($all->giakhuyenmai, 0, ',', '.') }}
                                            <span class="currencySymbol">₫</span>
                                        </bdi>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <center style="margin-top: 30px;">
            <a href="{{route('viewAll')}}" class="btn text-white" style="background: #ff4500;">Xem thêm</a>
        </center>
    </div>



</div>

@endsection