@extends('layouts.argon')

@section('content')
    <div class="main-content">
        <div class="container pb-5" style="margin-top:100px;">
            <div class="row justify-content-center">

                <!-- Content Area -->
                <div class="col-lg-7 col-md-7">
                    <div class="card">
                        <form action="{{ url('/objek/' . $objek->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="card-header">
                                <h5 class="h3 mb-0">Edit Objek</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Nama Merk</label>
                                            <input class="form-control form-control-sm" type="text" name="merk" readonly
                                                value="{{ $objek->merk }}" placeholder="nama merk">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Type</label>
                                            <input class="form-control form-control-sm" type="text" name="type" readonly
                                                value="{{ $objek->type }}" placeholder="type">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Status</label>
                                            <select name="status" class="form-control form-control-sm" readonly id="">
                                                <option value="">Pilih Status</option>
                                                <option value="Active" {{ $objek->status == 'Active' ? 'selected' : '' }}>
                                                    Active</option>
                                                <option value="Inactive"
                                                    {{ $objek->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Gambar</label><br>
                                            <div class="text-center">
                                                <img src="{{ URL('storage/'.$objek->gambar)}}" alt="" srcset=""
                                                    style="width: 70%; height: 70%; object-fit: cover; margin-bottom:10px">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset class="border p-2">
                                            <legend class="w-auto">Spesifikasi</legend>
                                            <div class="col-md-12">
                                                <button data-toggle="modal" data-target="#modal_add{{ $objek->id }}"
                                                    type="button" class="btn btn-sm btn-success"><span
                                                        class="fas fa-plus"></span> Tambah Kriteria</button>
                                            </div>
                                            <div class="row">
                                                @foreach ($spek as $i)
                                                    <div class="col-md-4">
                                                        <label for="">{{ $i->kriteria }}</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">{{ $i->value }}</label>
                                                        
                                                        @php
                                                            $linkdelete = url('/spek/' . $i->id.'/'.$objek->id);
                                                        @endphp
                                                        <a onclick='modal_konfir("{{ $linkdelete }}")' href="#">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-4">

                                                    </div>
                                                @endforeach
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>


                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal fade" id="modal_add{{ $objek->id }}">
            <div class="modal-dialog">
                <div class="modal-content" style="margin-top:100px;">
                    <form action="{{ url('spek/' . $objek->id) }}" method="POST">

                        @csrf
                        <div class="modal-header">
                            <h4 class="modal-title" style="text-align:center;">Tambah Spesifikasi</h4>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Kriteria</label>
                                        <select class="form-control form-control-sm" name="kriteria" id="kriteria">
                                            <option value="">Pilih Kriteria</option>
                                            @foreach ($kriteria as $item)
                                                <option value="{{ $item->id }}">{{ $item->kriteria }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Value</label>
                                        <select class="form-control form-control-sm" name="valueKriteria"
                                            id="valueKriteria">
                                            <option selected>---Pilih Value---</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            function modal_add{{ $objek->id }}(url) {
                // $('#modal_delete').modal('show', {
                //     backdrop: 'static'
                // });
                document.formdelete.action = url;
            }
        </script>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        $('#kriteria').change(function() {
            var id_kriteria = $(this).val();
            if (id_kriteria) {
                $.ajax({
                    type: "GET",
                    url: "/getValue?kriteria=" + id_kriteria,
                    dataType: 'JSON',
                    success: function(res) {
                        console.log(res);
                        if (res) {
                            $("#valueKriteria").empty();
                            $("#valueKriteria").append('<option>---Pilih Value---</option>');
                            $.each(res, function(kriteria, id) {
                                $("#valueKriteria").append('<option value="' + id + '">' +
                                    kriteria +
                                    '</option>');
                            });
                        } else {
                            $("#valueKriteria").empty();
                        }
                    }
                });
            } else {
                $("#valueKriteria").empty();
            }
        });
    </script>

@endsection
