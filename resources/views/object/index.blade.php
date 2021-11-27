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
                                    <a href="{{ url('/objek/create') }}" class="btn btn-sm btn-primary"><i
                                            class="fas fa-plus"></i></a>

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- List group -->
                            <ul class="list-group list-group-flush list my--3">
                                @foreach ($data as $item)
                                    <li class="list-group-item px-0">
                                        <div class="row align-items-center">

                                            <div class="col-4">
                                                <!-- Avatar -->
                                                <a href="#">
                                                    <div class="image"
                                                        style="width: 60px; height: 60px; margin: 8px">
                                                        <img src="{{ asset($item->gambar) }}"
                                                            style="width: 100%; height: 100%; object-fit: cover;">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-5">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5>{{ $item->merk . ' ' . $item->type }}</h5>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <h5>
                                                    <a href="{{ url('/objek/' . $item->id . '/edit') }}"><i
                                                            class="fas fa-edit"></i></a>
                                                            <a href="{{ url('/objek/' . $item->id ) }}"><i
                                                                class="fas fa-eye"></i></a>
                                                    @php
                                                        $linkdelete = url('/objek/' . $item->id);
                                                    @endphp
                                                    <a onclick='modal_konfir("{{ $linkdelete }}")' href="#">
                                                        <i class="fas fa-trash"></i>
                                                    </a>

                                                    {{-- <a href=""><i class="fas fa-trash"></i></a> --}}
                                                </h5>

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
