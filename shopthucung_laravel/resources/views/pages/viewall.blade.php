@extends('layout')
@section('content')
<!-- Tất cả sản phẩm -->
<div class="body">

    <div class="body__mainTitle">
        <h2>TẤT CẢ SẢN PHẨM</h2>
    </div>

    <div>
        <div class="row">
            @foreach($sanphams as $sanpham)
            <div class="col-lg-2_5 col-md-4 col-6 post2">
                <a href="{{ route('detail', ['id' => $sanpham->id_sanpham]) }}">
                    <div class="product" style="max-height: 400px; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between;">
                        <div class="product__img" style="max-height: 200px; overflow: hidden;">
                            <img src="{{$sanpham->anhsp}}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="product__sale" style="position: absolute; top: 10px;  background: rgba(255, 69, 0, 0.7); color: white; padding: 5px; font-size: 14px;">
                            <div style="text-align: center;">
                                @if($sanpham->giamgia)
                                    -{{$sanpham->giamgia}}%
                                @else Mới
                                @endif
                            </div>
                        </div>

                        <div class="product__content" style="padding: 10px; text-align: center;">
                            <div class="product__title" style="font-size: 16px; font-weight: bold; margin-bottom: 5px;">
                                {{$sanpham->tensp}}
                            </div>

                            <div class="product__pride-oldPride" style="font-size: 14px; color: #999; text-decoration: line-through;">
                                <span class="Price">
                                    <bdi>
                                        {{ number_format($sanpham->giasp, 0, ',', '.') }}
                                        <span class="currencySymbol">₫</span>
                                    </bdi>
                                </span>
                            </div>

                            <div class="product__pride-newPride" style="font-size: 16px; font-weight: bold; color: #ff4500; margin-top: 5px;">
                                <span class="Price">
                                    <bdi>
                                        {{ number_format($sanpham->giakhuyenmai, 0, ',', '.') }}
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
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item @if($sanphams->currentPage() === 1) disabled @endif">
                    <a class="page-link" href="{{ $sanphams->previousPageUrl() }}">Previous</a>
                </li>
                @for ($i = 1; $i <= $sanphams->lastPage(); $i++)
                    <li class="page-item @if($sanphams->currentPage() === $i) active @endif">
                        <a class="page-link" href="{{ $sanphams->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                <li class="page-item @if($sanphams->currentPage() === $sanphams->lastPage()) disabled @endif">
                    <a class="page-link" href="{{ $sanphams->nextPageUrl() }}">Next</a>
                </li>
            </ul>
        </nav>
    </div>

</div>
@endsection
