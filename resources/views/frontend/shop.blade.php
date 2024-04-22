@extends('frontend.layouts.shop-layout')
@section('content')

    <!-- header -->

    <!-- end header -->

    <!-- search area -->

    <!-- end search arewa -->

    <!-- breadcrumb-section -->

    <!-- end breadcrumb section -->

    <!-- products -->
    <div class="product-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            @foreach ($cats as $cat)
                                <li data-filter=".{{ $cat->name }}">{{ $cat->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row product-lists">
                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6 text-center {{$product->Category->name}} ">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="{{route('single-product',$product->id)}}"><img src="{{asset($product->image)}}" alt="Product Image"></a>
                            </div>
                            <h3>{{$product->name}}</h3>
                            <p class="product-price"> {{$product->price}}S.p </p>
                            <a href="{{route('single-product',$product->id)}}" class="cart-btn"><i class="fas fa-shopping-cart"></i> Show Details</a>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>

@endsection
