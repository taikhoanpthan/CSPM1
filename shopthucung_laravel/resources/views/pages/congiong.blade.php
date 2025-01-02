@extends('layout')
@section('content')
<!-- Con giống -->
<div class="body">

    <div class="body__mainTitle d-flex align-items-center">
        <h2 style="margin-top: 100px;">Con giống</h2>
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
                    <div class="col-lg-2_5 col-md-4 col-6 post2" style="max-height: 350px; overflow: hidden;">
                        <a href="{{ route('detail', ['id' => $choGiong->id_sanpham]) }}">
                            <div class="product" style="max-height: 100%; overflow: hidden;">
                                <<div class="product__img" style="height: 200px; overflow: hidden;">
                                    <img src="{{$choGiong->anhsp}}" alt=""
                                        style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="product__sale" style="margin-top: 10px;">
                                <div>
                                    @if($choGiong->giamgia)
                                        -{{$choGiong->giamgia}}%
                                    @else
                                        Mới
                                    @endif
                                </div>
                            </div>

                            <div class="product__content" style="max-height: 120px; overflow: hidden;">
                                <div class="product__title" style="font-size: 16px; font-weight: bold;">
                                    {{$choGiong->tensp}}
                                </div>

                                <div class="product__pride-oldPride" style="text-decoration: line-through; color: gray;">
                                    <span class="Price">
                                        <bdi>
                                            {{ number_format($choGiong->giasp, 0, ',', '.') }}
                                            <span class="currencySymbol">₫</span>
                                        </bdi>
                                    </span>
                                </div>

                                <div class="product__pride-newPride" style="color: red; font-weight: bold;">
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
            <div class="col-lg-2_5 col-md-4 col-6 post2" style="max-height: 350px; overflow: hidden;">
                <a href="{{ route('detail', ['id' => $meoGiong->id_sanpham]) }}">
                    <div class="product" style="max-height: 100%; overflow: hidden;">
                        <div class="product__img" style="height: 200px; overflow: hidden;">
                            <img src="{{$meoGiong->anhsp}}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="product__sale" style="margin-top: 10px;">
                            <div>
                                @if($meoGiong->giamgia)
                                    -{{$meoGiong->giamgia}}%
                                @else
                                    Mới
                                @endif
                            </div>
                        </div>

                        <div class="product__content" style="max-height: 120px; overflow: hidden;">
                            <div class="product__title" style="font-size: 16px; font-weight: bold;">
                                {{$meoGiong->tensp}}
                            </div>

                            <div class="product__pride-oldPride" style="text-decoration: line-through; color: gray;">
                                <span class="Price">
                                    <bdi>
                                        {{ number_format($meoGiong->giasp, 0, ',', '.') }}
                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                            <div class="product__pride-newPride" style="color: red; font-weight: bold;">
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
@endsection