@extends('layouts.argon')

@section('content')
    <div class="main-content">
        <div class="container pb-5" style="margin-top:100px;">
            <div class="row justify-content-center">

                <!-- Content Area -->
                <div class="col-lg-7 col-md-7">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-auto">
                                    <h5 class="h3 mb-0">Value Penilaian</h5>
                                </div>
                                <div class="col text-right">
                                    <a href="{{ url('/value/create') }}" class="btn btn-sm btn-primary"><i
                                            class="fas fa-plus"></i></a>

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- List group -->
                            <ul class="list-group list-group-flush list my--3 text-center">
                                <li class="list-group-item px-0">
                                    <div class="row align-items-center">
                                        <div class="col-3 col-sm-2 col-lg-2">
                                            <h5>No</h5>
                                        </div>
                                        <div class="col">
                                            <h5>Kriteria</h5>
                                        </div>
                                        <div class="col">
                                            <h5>Value</h5>
                                        </div>
                                        <div class="col">
                                            <h5>Bobot</h5>
                                        </div>
                                        <div class="col">
                                            <h5>Aksi</h5>
                                        </div>
                                    </div>
                                </li>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($data as $item)

                                    <li class="list-group-item px-0">
                                        <div class="row align-items-center">
                                            <div class="col-3 col-sm-2 col-lg-2">
                                                <h5>{{ $i }}</h5>
                                            </div>
                                            <div class="col">
                                                <h5>{{ $item->kriteria }}</h5>
                                            </div>
                                            <div class="col">
                                                <h5>{{ $item->value }}</h5>
                                            </div>
                                            <div class="col">
                                                <h5>{{ $item->bobot }}</h5>
                                            </div>
                                            <div class="col">
                                                <h5>
                                                    <a href="{{ url('/value/' . $item->id . '/edit') }}"><i
                                                            class="fas fa-edit"></i></a>
                                                    @php
                                                        $linkdelete = url('/value/' . $item->id);
                                                    @endphp
                                                    <a onclick='modal_konfir("{{ $linkdelete }}")' href="#">
                                                        <i class="fas fa-trash"></i>
                                                    </a>

                                                    {{-- <a href=""><i class="fas fa-trash"></i></a> --}}
                                                </h5>

                                            </div>
                                        </div>
                                    </li>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
