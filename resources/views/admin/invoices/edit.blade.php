@extends('admin.layouts.layout')
@section('content')
    <section class="section">
        <div class="section-header d-flex   ">
            <div class="section-header-back">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1> Update Invoice</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update  Invoice Status</h4>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="error-message">{{ $error }}</div>
                                @endforeach
                            @endif

                            <form action="{{ route('admin.invoice.update' ,$invoice->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="inv_type" value="incoming"
                                        id="in" checked>
                                    <label class="form-check-label" for="in">
                                        Incoming
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="inv_type" value="outgoing"
                                        id="out">
                                    <label class="form-check-label" for="out">
                                        Outgoing
                                    </label>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Customer Id</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" name="customer_id">
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
