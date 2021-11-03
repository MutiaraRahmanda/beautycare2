@extends('layouts.master')

@section('content')
<div class="py-4 px-3 px-md-4">

    <div class="mb-3 mb-md-4 d-flex justify-content-between">
        <div class="h3 mb-0">Dashboard</div>
    </div>

    <div class="row">
        <div class="col-md-6 col-xl-4 mb-3 mb-xl-4">
            <!-- Widget -->
            <div class="card flex-row align-items-center p-3 p-md-4">
                <div class="icon icon-lg bg-soft-primary rounded-circle mr-3">
                    <i class="gd-tag icon-text d-inline-block text-primary"></i>
                </div>
                <div>
                    <h4 class="lh-1 mb-1">{{ $brand }}</h4>
                    <h6 class="mb-0">Data Treatment</h6>
                </div>
            </div>
            <!-- End Widget -->
        </div>

        <div class="col-md-6 col-xl-4 mb-3 mb-xl-4">
            <!-- Widget -->
            <div class="card flex-row align-items-center p-3 p-md-4">
                <div class="icon icon-lg bg-soft-secondary rounded-circle mr-3">
                    <i class="gd-car icon-text d-inline-block text-secondary"></i>
                </div>
                <div>
                    <h4 class="lh-1 mb-1">{{ $dokter }}</h4>
                    <h6 class="mb-0">Data Doktor</h6>
                </div>
            </div>
            <!-- End Widget -->
        </div>
    </div>
</div>
@endsection
