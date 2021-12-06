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
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- List group -->
                            <ul class="list-group list-group-flush list my--3">
                                <?php $no = 0; ?>
                                @foreach ($data as $item)
                                <?php $no++ ?>
                                    <li class="list-group-item px-0">
                                        <div class="row align-items-center">
                                            <div class="col-1">
                                                <h5>{{ $no }}</h5>
                                            </div>
                                            <div class="col-4">
                                                <a href="{{ url('/objek/' . $item->id ) }}">
                                                    <img class="card-img" src="{{ asset('storage/' . $item->gambar) }}" style="object-fit: contain; max-height: 100px;">
                                                </a>
                                            </div>
                                            <div class="col-5">
                                                <h5>{{ $item->merk . ' ' . $item->type }}</h5>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
