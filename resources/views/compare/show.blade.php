@extends('layouts.argon')

@section('content')
<div class="main-content">
    <div class="container pb-5" style="margin-top:100px;">
        <div class="row justify-content-center">  
            
        <!-- Content Area -->
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="card">
                    <!-- Card image -->
                    <img class="card-img-top" src="{{asset('assets/img/theme/samsung s10.jpg')}}" alt="Image placeholder" style="height:200px; object-fit: cover;">
                    <span class="product-tags">1st</span>
                    <!-- Card body -->
                    <div class="card-body">
                        <h4 class="card-title mb-0">Samsung S10</h4>
                        <small class="text-muted">2019</small>
                        <div class="row">
                            <div class="col-lg-4">
                                <h5>Display</h5>
                            </div>
                            <div class="col">
                                <p class="text-dark text-sm" style="height:80px;">6.4" Quad HD+ Dynamic AMOLED (3040 x 1440) 522 ppi Infinity-O Display</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <h5>Dimension</h5>
                            </div>
                            <div class="col">
                                <p class="text-dark text-sm">157.6 x 74.1 x 7.8 mm</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <h5>Weight</h5>
                            </div>
                            <div class="col">
                                <p class="text-dark text-sm">175g</p>
                            </div>
                        </div>
                        <a href="#" class="btn btn-link px-0">View Product</a>
                    </div>
                </div>
            </div>

        <!-- Content Area -->
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="card">
                    <!-- Card image -->
                    <img class="card-img-top" src="{{asset('assets/img/theme/samsung s9.jpg')}}" alt="Image placeholder" style="height:200px; max-height:200px; object-fit: cover;">
                    <span class="product-tags">2nd</span>
                    <!-- Card body -->
                    <div class="card-body">
                        <h4 class="card-title mb-0">Samsung S9</h4>
                        <small class="text-muted">2018</small>
                        <div class="row">
                            <div class="col-lg-4">
                                <h5>Display</h5>
                            </div>
                            <div class="col">
                                <p class="text-dark text-sm" style="height:80px;">5.8" Quad HD+ Super AMOLED (2960x1440) 570 ppi Infinity Display</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <h5>Dimension</h5>
                            </div>
                            <div class="col">
                                <p class="text-dark text-sm">147.7 x 68.7 x 8.5 mm</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <h5>Weight</h5>
                            </div>
                            <div class="col">
                                <p class="text-dark text-sm">163 g</p>
                            </div>
                        </div>
                        <a href="#" class="btn btn-link px-0">View Product</a>
                    </div>
                </div>
            </div>

        <!-- Content Area -->
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="card">
                    <!-- Card image -->
                    <img class="card-img-top" src="{{asset('assets/img/theme/xiaomi redmi note 10.jpeg')}}" alt="Image placeholder" style="height:200px; object-fit: cover;">
                    <span class="product-tags">3rd</span>
                    <!-- Card body -->
                    <div class="card-body">
                        <h4 class="card-title mb-0">Xiaomi Redmi Note 10</h4>
                        <small class="text-muted">2021</small>
                        <div class="row">
                            <div class="col-lg-4">
                                <h5>Display</h5>
                            </div>
                            <div class="col">
                                <p class="text-dark text-sm" style="height:80px;">6,43" Super AMOLED DotDisplay</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <h5>Dimension</h5>
                            </div>
                            <div class="col">
                                <p class="text-dark text-sm">160.46 x 74.5 x 8.29 mm</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <h5>Weight</h5>
                            </div>
                            <div class="col">
                                <p class="text-dark text-sm">178.8 g</p>
                            </div>
                        </div>
                        <a href="#" class="btn btn-link px-0">View Product</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection