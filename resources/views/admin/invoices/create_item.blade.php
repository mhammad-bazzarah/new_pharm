@extends('admin.layouts.layout')
@section('content')
    <section class="section">
        <div class="section-header d-flex   ">
            <div class="section-header-back">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1> New Invoice Item</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create New Item</h4>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="error-message">{{ $error }}</div>
                                @endforeach
                            @endif
                            <form action="{{ route('admin.invoice_item.store') }}" method="POST" ">
                                    @csrf
                                    <input type="hidden"  name="invoice_id" value="{{ $invoice_id }}" >
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Product Id</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="number" min="1" name="product_id" >
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"> Quantity</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="number" min="1" name="quantity" >
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <button class="btn btn-warning">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
