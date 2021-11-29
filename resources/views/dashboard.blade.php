@extends('layouts.argon')

@section('content')
<div class="main-content">
    <div class="container pb-5" style="margin-top:100px;">
        <div class="row justify-content-center">  
            
        <!-- Smartphone Area -->
            <div class="col-lg-5 col-md-7">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-auto">
                                <h5 class="h3 mb-0">Daftar Smartphone</h5>
                            </div>
                            <div class="col text-right">
                                <a href="{{ url('objek/create') }}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- List group -->
                        <ul class="list-group list-group-flush list my--3">
                            <?php $no = 0; ?>
                            @foreach ($objek as $item)
                            <?php $no++ ?>
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <h5>{{ $no }}</h5>
                                    </div>
                                    <div class="col-4 col-sm-3">
                                        <!-- Photo -->
                                        <a href="{{ url('/objek/' . $item->id ) }}">
                                            <img class="card-img" src="{{ URL('storage/'.$item->gambar)}}" alt="Image placeholder" style="object-fit: cover;">
                                        </a>
                                    </div>
                                    <div class="col-4 col-sm-5">
                                        <div class="row">
                                            <div class="col">
                                                <h5>{{ $item->merk }}</h5>
                                            </div>
                                            <div class="col">
                                                <h5>{{ $item->type }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <a href="{{ url('/objek/' . $item->id . '/edit') }}">
                                            <i class="fas fa-edit"></i></a>
                                        {{-- <a href="{{ url('/objek/' . $item->id ) }}">
                                            <i class="fas fa-eye"></i></a> --}}
                                        @php
                                            $linkdelete = url('/objek/' . $item->id);
                                        @endphp
                                        <a onclick='modal_konfir("{{ $linkdelete }}")' href="#">
                                            <i class="fas fa-trash"></i>
                                        </a>

                                        {{-- <a href=""><i class="fas fa-trash"></i></a> --}}
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        
        <!-- Kriteria Area -->
            <div class="col-lg-5 col-md-7">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-auto">
                                <h5 class="h3 mb-0">Daftar Kriteria</h5>
                            </div>
                            <div class="col text-right">
                                <a href="{{ url('kriteria/create') }}" class="btn btn-sm btn-primary"><i
                                        class="fas fa-plus"></i></a>
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
                                        <h5>Aksi</h5>
                                    </div>
                                </div>
                            </li>
                            <?php
                                $no = 0;
                            ?>
                            @foreach ($kriteria as $item)
                                <?php
                                    $no++;
                                ?>
                                <li class="list-group-item px-0">
                                    <div class="row align-items-center">
                                        <div class="col-3 col-sm-2 col-lg-2">
                                            <h5>{{ $no }}</h5>
                                        </div>
                                        <div class="col">
                                            <h5>{{ $item->kriteria }}</h5>
                                        </div>
                                        <div class="col">
                                            <h5>{{ $item->bobot }}</h5>
                                        </div>
                                        <div class="col">
                                            <h5>
                                                <a href="{{ url('/kriteria/' . $item->id . '/edit') }}">
                                                    <i class="fas fa-edit"></i></a>
                                                    @php
                                                        $linkdelete = url('/kriteria/'.$item->id);
                                                    @endphp
                                                <a onclick='modal_konfir("{{ $linkdelete }}")'href="#">
                                                    <i class="fas fa-trash"></i>
                                                </a>
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