@extends('layout')
@section('content')
<!--Main-->
<div class="body" style="padding-top: 50px;">
    <a class="buy_continute" href="{{URL::to('/')}}"><i class="fa fa-arrow-circle-left"></i> Trở lại mua hàng</a>
    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
    <div class="product_card mt-3">
        <div class="product__details-img mr-2">
            <div class="big-img">
                <img src="{{ asset($sanpham->anhsp) }}" alt="" id="zoom" style="visibility: visible;">
            </div>
            {{-- <div class="small-img d-flex mt-2">
                <img src="./img/dohop.jpg"
                    onerror="this.onerror=null; this.src='https://i.pinimg.com/originals/ae/4c/9e/ae4c9ea2edf887f6ad1e4e63cfae05b0.jpg'"
                    class="small-imgg" alt="">
                <img src="./img/dohop.jpg"
                    onerror="this.onerror=null; this.src='https://i.pinimg.com/originals/ae/4c/9e/ae4c9ea2edf887f6ad1e4e63cfae05b0.jpg'"
                    class="small-imgg" alt="">
                <img src="./img/dohop.jpg"
                    onerror="this.onerror=null; this.src='https://i.pinimg.com/originals/ae/4c/9e/ae4c9ea2edf887f6ad1e4e63cfae05b0.jpg'"
                    class="small-imgg" alt="">
                <img src="./img/dohop.jpg"
                    onerror="this.onerror=null; this.src='https://i.pinimg.com/originals/ae/4c/9e/ae4c9ea2edf887f6ad1e4e63cfae05b0.jpg'"
                    class="small-imgg" alt="">
            </div> --}}
        </div>

        <div class="product__details-info">
            <h3 style="margin-top: unset; line-height: unset;">{{ $sanpham->tensp }}</h3>
            <div class="short-des">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam sit aliquid debitis voluptates ducimus,
                quasi iusto nam quaerat eius quidem.

            </div>
            <hr />

            <div class="product__pride">
                <div class="product__pride-oldPride" style="font-size: 20px; text-align: start;">
                    <span class="Price">
                        <bdi>
                            {{ number_format($sanpham->giasp, 0, ',', '.') }}
                            <span class="currencySymbol">₫</span>
                        </bdi>
                    </span>
                </div>
                <div class="product__pride-newPride" style="font-size: 40px; text-align: start;">
                    <span class="Price">
                        <bdi>{{ number_format($sanpham->giakhuyenmai, 0, ',', '.') }}
                            <span class="currencySymbol">₫</span>
                        </bdi>
                    </span>
                </div>

            </div>

            <form action="" method="POST">
                <!--
                            <div class="number">
                                <span>Số lượng</span>
                                <div class="number__count">
                                    <input type="number" value="1" min="1" max="10" name="quantity">
                                    <input type="hidden" name="id" value="<?php //echo $valueID['id_sanpham']; ?>">
                                </div>
                            </div>
                        -->

                <div class="number">
                    <span>
                        Số lượng
                        <span class="number__count">
                            {{$sanpham->soluong}}
                        </span>
                    </span>

                </div>

                <div class="product__cart">
                    <a href="{{ route('add_to_cart', $sanpham->id_sanpham) }}" class="product__cart-add"
                        name="add-to-cart">
                        Thêm vào giỏ hàng
                    </a>
                    <a href="{{ route('add_go_to_cart', $sanpham->id_sanpham) }}" class="product__cart-buy"
                        name="buy-now">Mua ngay</a>
                </div>

            </form>
        </div>
    </div>

    <!--Mô tả sản phẩm-->
    <div class="body__mainTitle">
        <h2>MÔ TẢ SẢN PHẨM</h2>
    </div>
    {{$sanpham->mota}}
    <hr />

    <!--Bình luận sản phẩm-->
    <div class="body__mainTitle">
        <h2>BÌNH LUẬN</h2>
    </div>
    <div>
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex">
                <img src="{{ asset('frontend/img/user.jpg')}}" width="45" height="45" style="border-radius: 50%;" />
                <div class="pl-3">
                    <b>Nguyen van a</b>
                    <div style="line-height: 30px;">san pha mdung dc</div>
                    <div>22/01/2022</div>
                </div>
            </div>

        </div>

        <hr />
    </div>

    <div class="d-flex justify-content-between align-items-center">
        <div>Nội dung</div>
        <div class="d-flex align-items-center">
            <input type="hidden" id="rating" name="rating" value="0" />
        </div>
    </div>
    <textarea name="content" class="form-control" style="outline: none; margin-bottom: 5px;"></textarea>
    <div>

        <input class="btn btn-maincolor" type="submit" value="Gửi" />

        <input data-val="true" data-val-number="The field id_sp must be a number."
            data-val-required="The id_sp field is required." id="id_sp" name="id_sp" type="hidden" value="0" />

    </div>
    <hr>
    <!-- Sản phẩm ngẫu nhiên -->
    <div class="body__mainTitle">
        <h2>CÓ THỂ BẠN CŨNG THÍCH</h2>
    </div>

    <div class="row" style="display: flex; flex-wrap: wrap; gap: 20px;">
        @foreach($randoms as $random)
            <div class="col-lg-2_5 col-md-4 col-6 post2" style="max-width: 220px; flex: 1 1 auto; box-sizing: border-box;">
                <a href="{{ route('detail', ['id' => $random->id_sanpham]) }}"
                    style="text-decoration: none; color: inherit;">
                    <div class="product"
                        style="display: flex; flex-direction: column; max-height: 500px; overflow: hidden; position: relative;">
                        <!-- Hình ảnh sản phẩm -->
                        <div class="product__img" style="max-height: 200px; overflow: hidden;">
                            <img src="{{ asset($random->anhsp)}}" alt=""
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>

                        <!-- Nhãn giảm giá / Mới -->
                        <div class="product__sale"
                            style="position: absolute; top: 10px; left: 10px; background-color: rgba(255, 69, 0, 0.8); color: white; font-size: 14px; font-weight: bold; padding: 5px 10px; border-radius: 5px; z-index: 1;">
                            @if($random->giamgia)
                                -{{$random->giamgia}}%
                            @else
                                Mới
                            @endif
                        </div>

                        <!-- Nội dung sản phẩm -->
                        <div class="product__content"
                            style="padding: 10px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; max-height: 180px;">
                            <div class="product__title"
                                style="font-size: 16px; font-weight: bold; margin-bottom: 5px; color: #333;">
                                {{$random->tensp}}
                            </div>

                            <div class="product__pride-oldPride"
                                style="font-size: 14px; color: #999; text-decoration: line-through;">
                                <span class="Price">
                                    <bdi>
                                        {{ number_format($random->giasp, 0, ',', '.') }}
                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                            <div class="product__pride-newPride"
                                style="font-size: 16px; font-weight: bold; color: #ff4500;">
                                <span class="Price">
                                    <bdi>
                                        {{ number_format($random->giakhuyenmai, 0, ',', '.') }}
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
@endsection