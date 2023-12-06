@extends('layouts.master')

@section('content')

<div class="container-fluid px-4" style="background-image: url('images/folderbg1.jpg');">
    <h2 class="mt-4">PGH Folder Records</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Stock</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Total</div>
                <h3 style="padding-left: 1rem;">{{$total}}</h3>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <!-- <a class="small text-white stretched-link" href="#">View Details</a> -->
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">Issued</div>
            <h3 style="padding-left: 1rem;">{{$released}}</h3>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ url('issues') }}">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">Remains</div>
            <h3 style="padding-left: 1rem;">{{$remains}}</h3>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <!-- <a class="small text-white stretched-link" href="#">View Details</a> -->
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Users</div>
                <h3 style="padding-left: 1rem;">{{$users}}</h3>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <!-- <a class="small text-white stretched-link" href="#">View Details</a> -->
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection