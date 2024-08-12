@extends('admin.layouts.layout')
@section('content')
    <section class="section">
        <div class="section-header d-flex   ">
            <div class="section-header-back">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1> Invoice Details</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4> Show Invoice</h4>
                        </div>
                        <div class="card-body">
                            <div class="container-invoice ">
                                <h1>Invoice</h1>
                                <p><strong>Invoice ID:</strong> {{ $invoice->id }}</p>
                                <p><strong>Customer:</strong> {{ $customer->name }} (Customer ID:
                                    {{ $invoice->customer_id }})</p>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Product ID</th>
                                            {{-- <th>Product Name</th> --}}
                                            <th>Quantity</th>
                                            <th>Price per Unit</th>
                                            <th>Total Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($items as $item)
                                            <tr>
                                                <td>{{ $item->product_id }} </td>
                                                {{-- <td>{{ $item->product->id }} </td> --}}
                                                <td>{{ $item->quantity }} </td>
                                                <td>{{ $item->unit_price }} </td>
                                                <td>{{ $item->line_total }} </td>
                                                @php

                                                @endphp
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <p><strong>Date:</strong> {{ $invoice->created_at }}</p>
                                <p class="total"><strong>Total Amount:</strong> {{ $invoice->total_amount }}</p>
                            </div>
                            <button class="btn btn-warning "><a class="text-decoration-none text-light"
                                    href="{{ route('admin.new_item', $invoice->id) }}"> Add item</a> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
