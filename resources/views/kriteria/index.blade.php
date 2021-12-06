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
                            </div>
                        </div>
                        @if (session('status'))
                            <script>
                                swal("Berhasil", "{{ session('status') }}!", {
                                    icon: "success",
                                    buttons: {
                                        confirm: {
                                            className: 'btn btn-success'
                                        }
                                    },
                                });
                            </script>
                        @endif
                        <div class="card-body">
                            <!-- List group -->
                            <ul class="list-group list-group-flush list my--3 text-center">
                                <li class="list-group-item px-0">
                                    <div class="row align-items-center">
                                        <div class="col-3 col-sm-2 col-lg-2">
                                            <h5>No</h5>
                                        </div>
                                        <div class="col">
                                            <h5>Nama</h5>
                                        </div>
                                        <div class="col">
                                            <h5>Bobot</h5>
                                        </div>
                                        <div class="col">
                                            <h5>Tipe</h5>
                                        </div>
                                    </div>
                                </li>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($data as $item)

                                    <li class="list-group-item px-0">
                                        <div class="row align-items-center">
                                            <div class="col-3 col-sm-2">
                                                <h5>{{ $i }}</h5>
                                            </div>
                                            <div class="col">
                                                <h5>{{ $item->kriteria }}</h5>
                                            </div>
                                            <div class="col">
                                                <h5>{{ $item->bobot }}</h5>
                                            </div>
                                            <div class="col">
                                                <h5>{{ $item->type }}</h5>
                                            </div>
                                            <!-- <div class="col">
                                                <h5>
                                                    <a href="{{ url('/kriteria/' . $item->id . '/edit') }}"><i
                                                            class="fas fa-edit"></i></a>
                                                            @php
                                                            $linkdelete = url('/kriteria/'.$item->id);
                                                        @endphp
                                                        <a onclick='modal_konfir("{{ $linkdelete }}")'href="#">
                                                            <i class="fas fa-trash"></i>
                                                        </a>

                                                    {{-- <a href=""><i class="fas fa-trash"></i></a> --}}
                                                </h5>

                                            </div> -->
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
    <div class="modal" id="mdlCancel" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin ingin membatalkan proses?</p>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('/gejala') }}"><button type="button" class="btn btn-success">Ya</button></a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>
@endsection
