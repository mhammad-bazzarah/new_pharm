@extends('admin.layouts.layout')
@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Admins</h4>
                        </div>
                        <div class="card-body">
                            {{ $totalAdmins }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Customers</h4>
                        </div>
                        <div class="card-body">
                            {{ $totalCustomers }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-gift"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Offers</h4>
                        </div>
                        <div class="card-body">
                            {{ $totalOffers }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Invoices</h4>
                        </div>
                        <div class="card-body">
                            {{ $totalInvoices }}
                        </div>
                    </div>
                </div>
            </div>
              </section>
@endsection
