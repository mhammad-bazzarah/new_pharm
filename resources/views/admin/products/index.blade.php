@extends('admin.layouts.layout')
@section('content')
    <section class="section">
        <div class="section-header d-flex justify-content-between  ">
            <div class="section-header-back">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Products</h1>
            <div class=" "><a href="{{ route('admin.products.create') }}" class="btn  text-white  bg-warning text-lg ">
                    Add New
                    Product <i class="fa fa-plus"></i></a> </div>
        </div>
        <table class="table  bg-38CCC2 table-striped mt-2" style="background-color: #57dfd6">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Category</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->Category->name }}</td>
                        <td><a href="{{ route('admin.products.edit', $product->id) }}"><i class="fa fa-edit "></i> </a> </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </section>
@endsection
