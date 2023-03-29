@extends('layouts.master_frontend')
@section('content')

<div class="container">
    <div class="htc__product__container">
        <!-- Start Product MEnu -->
        <div class="row">
            <div class="col-md-12">
                <div class="product__menu">
                    <button data-filter="*"  class="is-checked">All</button>
                    <button data-filter=".cat--1">Living Room Furniture</button>
                    <button data-filter=".cat--2">Bedroom Furniture</button>
                    <button data-filter=".cat--3">Kitchen & Dining Furniture</button>
                    <button data-filter=".cat--4">Office Furniture</button>
                </div>
            </div>
        </div>
        <!-- End Product MEnu -->
        <div class="row">
            <div class="product__list">
                <!-- Start Single Product -->
                @foreach($products as $product)
                <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-4 col-xs-12">
                    <div class="product foo">
                        <div class="product__inner">
                            <div class="pro__thumb">
                                <a href="{{ route('get.product.detail',$product->pro_slug) }}">
                                    <img src="{{ asset(pare_url_file($product->pro_avatar)) }}" alt="product images" style="height:270px; width:270px;>
                                </a>
                            </div>
                            <div class="product__hover__info">
                                <ul class="product__action">
                                    <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="{{ route('get.product.detail',$product->pro_slug) }}"><span class="ti-plus"></span></a></li>
                                    <li><a title="Add TO Cart" href="{{ route('get.shopping.add', $product->id) }}"><span class="ti-shopping-cart"></span></a></li>
                                </ul>
                            </div>
                            <div class="add__to__wishlist">
                                <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart" href="wishlist.html"><span class="ti-heart"></span></a>
                            </div>
                        </div>
                        <div class="product__details">
                            <h2 class="product-name">
                                <a href="{{ route('get.product.detail',$product->pro_slug) }}">{{ $product-> pro_name }}</a>
                            </h2>
                            <ul class="product__price">
                                {{-- <li class="old__price">$16.00</li> --}}
                                <li class="new__price">{{ number_format($product->pro_price , 0, '', '.') }} VND</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- End Single Product -->
            </div>
            <div class="text-center">
                <div class="d-flex justify-content-center">
                    {{ $products->links( "pagination::bootstrap-4") }}
                </div>
            </div>
        </div>

    </div>
</div>
@stop
