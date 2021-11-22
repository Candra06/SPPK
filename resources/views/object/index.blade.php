@extends('layouts.argon')

@section('content')
<div class="main-content">
    <div class="container pb-5" style="margin-top:100px;">
        <div class="row justify-content-center">  
            
        <!-- Content Area -->
            <div class="col-lg-5 col-md-7">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-auto">
                                <h5 class="h3 mb-0">Daftar Smartphone</h5>
                            </div>
                            <div class="col text-right">
                                <button class="btn btn-sm btn-primary"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- List group -->
                        <ul class="list-group list-group-flush list my--3">
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-3 col-sm-2 col-lg-2">
                                        <h5>1st</h5>
                                    </div>
                                    <div class="col-3">
                                        <!-- Avatar -->
                                        <a href="#">
                                            <img class="card-img" src="{{asset('assets/img/theme/samsung s10.jpg')}}" alt="Image placeholder" style="object-fit: cover;">
                                        </a>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <h5>Samsung</h5>
                                            </div>
                                            <div class="col">
                                                <h5>Galaxy S10</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-3 col-sm-2 col-lg-2">
                                        <h5>2nd</h5>
                                    </div>
                                    <div class="col-3">
                                        <!-- Avatar -->
                                        <a href="#">
                                            <img class="card-img" src="{{asset('assets/img/theme/samsung s9.jpg')}}" alt="Image placeholder" style="object-fit: cover;">
                                        </a>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <h5>Samsung</h5>
                                            </div>
                                            <div class="col">
                                                <h5>Galaxy S9</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-3 col-sm-2 col-lg-2">
                                        <h5>2nd</h5>
                                    </div>
                                    <div class="col-3">
                                        <!-- Avatar -->
                                        <a href="#">
                                            <img class="card-img" src="{{asset('assets/img/theme/xiaomi redmi note 10.jpeg')}}" alt="Image placeholder" style="object-fit: cover;">
                                        </a>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <h5>Xiaomi</h5>
                                            </div>
                                            <div class="col">
                                                <h5>Redmi Note 10</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection