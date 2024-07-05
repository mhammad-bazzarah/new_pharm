@extends('admin.layouts.layout')
@section('content')
<section class="section">
    <div class="section-header d-flex justify-content-between  ">
        <h1>Products</h1>
        <div ><a class="btn bg-warning text-white p-2 text-lg " > Add New Product</a> </div>
    </div>
    <table class="table  bg-38CCC2 table-striped mt-2" style="background-color: #57dfd6" >
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
            @foreach ($products as $product )
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->Category->name }}</td>
                <td><a><i class="bi bi-pencil-square"></i></a>edit</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</section>

@endsection
