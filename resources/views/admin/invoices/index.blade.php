@extends('admin.layouts.layout')
@section('content')
    <section class="section">
        <div class="section-header d-flex justify-content-between  ">
            <div class="section-header-back">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>{{ $pageName }}Invoices</h1>
            <div><a class="btn bg-warning text-white p-2 text-lg " href="{{ route('admin.invoice.create') }}"> Add New Invoice
                    <i class="fa fa-plus"></i></a> </div>
        </div>
        <table class="table  bg-38CCC2 table-striped mt-2" style="background-color: #57dfd6">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">InvoiceID</th>
                    <th scope="col">CustomerID</th>
                    <th scope="col">TotalAmount</th>
                    <th scope="col">Date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoices as $invoice)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $invoice->id }}</td>
                        <td>{{ $invoice->customer_id }}</td>
                        <td>{{ $invoice->total_amount }}</td>
                        <td>{{ $invoice->created_at }}</td>
                        <td>
                            <form action="{{ route('admin.invoice.update' ,$invoice->id) }}" method="POST" >
                                @csrf
                                @method('PUT')
                                <button type="submit"> <i class="fa fa-check-circle"></i></button>
                            </form>
                            <a href="{{ route('admin.invoice.show', $invoice->id) }}" ><i class="fa fa-image "></i> </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </section>
@endsection
