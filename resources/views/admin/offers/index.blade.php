@extends('admin.layouts.layout')
@section('content')
    <section class="section">
        <div class="section-header d-flex justify-content-between  ">
            <div class="section-header-back">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Offers</h1>
            <div><a class="btn bg-warning text-white p-2 text-lg " href="{{ route('admin.offers.create') }}"> Add New Offer
                    <i class="fa fa-plus"></i></a> </div>
        </div>
        <table class="table  bg-38CCC2 table-striped mt-2" style="background-color: #57dfd6">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Description</th>
                    <th scope="col">Publish Date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($offers as $offer)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $offer->description }}</td>
                        <td>{{ $offer->created_at }}</td>
                        <td><a href="{{ route('admin.offers.edit', $offer->id) }}"><i class="fa fa-edit "></i> </a> </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </section>
@endsection
