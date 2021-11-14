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
                                <h5 class="h3 mb-0">Daftar Kriteria</h5>
                            </div>
                            <div class="col text-right">
                                <a href="{{url('kriteria/create')}}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- List group -->
                        <ul class="list-group list-group-flush list my--3 text-center">
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-3 col-sm-2 col-lg-2"><h5>No</h5></div>
                                    <div class="col"><h5>Nama</h5></div>
                                    <div class="col"><h5>Bobot</h5></div>
                                </div>
                            </li>
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-3 col-sm-2 col-lg-2">
                                        <h5>1</h5>
                                    </div>
                                    <div class="col">
                                        <h5>Chipset</h5>
                                    </div>
                                    <div class="col">
                                        <h5>9</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-3 col-sm-2 col-lg-2">
                                        <h5>2</h5>
                                    </div>
                                    <div class="col">
                                        <h5>Baterai</h5>
                                    </div>
                                    <div class="col">
                                        <h5>9</h5>
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