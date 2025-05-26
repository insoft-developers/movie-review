
<!-- Main Content -->
@extends('backend.master')

@section('content')
<div class="main-content">
    <img src="{{ asset('template/backend') }}/assets/img/dash-bg.png" alt="" class="maintenance-shape svg">
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-xl-12 text-center">
                        <div class="maintenance-content">
                            <h1 class="mb-5 white position-relative">Welcome, {{ Auth::guard('admin')->user()->name }}</h1>
                            
                            <div class="newsletter-form">
                                <p class="text-center white">{{ Auth::guard('admin')->user()->level == 'super' ? 'Super Admin':'Admin' }}</p>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

    </div>
</div>
@endsection
<!-- End Main Content -->
