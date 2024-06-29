{{-- {{ dd(count($related_products)) }} --}}
@extends('frontend.layouts.shop-layout')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>See more Details</p>
                        <h1>Single Product</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- single product -->
    <div class="single-product mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="single-product-img">
                        <img src="{{ asset($product->image) }}" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="single-product-content">
                        <h3>{{ $product->name }}</h3>
                        <p class="single-product-pricing">{{ number_format($product->price) }} S.P</p>
                        <p>{{ $product->description }} </p>
                        <div class="single-product-form">
                            {{-- this form is for order later --}}
                            {{-- <form action="index.html">
								<input type="number" placeholder="0">
							</form> --}}
                            {{-- <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add </a> --}}
                        </div>
                        <p>Available Quantity : {{ $product->quantity }}</p>
                        <p><strong>Category: </strong>{{ $product->Category->name }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end single product -->

    <!-- more products -->
    <div class="more-products mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Related</span> Products</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet
                            beatae optio.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($related_products as $pro)
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="single-product.html"><img src="{{ asset($pro->image) }}"></a>
                            </div>
                            <h3>{{$pro->name }}</h3>
                            <p class="product-pricing">{{ number_format($pro->price) }} S.P</p><a href="" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end more products -->
@endsection
