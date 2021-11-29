@extends('layouts.argon')

@section('content')
    <div class="main-content">
        <div class="container pb-5" style="margin-top:100px;">
            <div class="row justify-content-center">

                <!-- Content Area -->
                <div class="col-lg-12 col-md-7">
                    <div class="card">
                        <form action="{{ url('/objek') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header">
                                <h5 class="h3 mb-0">Tambah Objek</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Nama Merk</label>
                                            <input class="form-control form-control-sm" type="text" name="merk"
                                                placeholder="nama merk">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Type</label>
                                            <input class="form-control form-control-sm" type="text" name="type"
                                                placeholder="type">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Gambar</label>
                                            <input type="file" name="gambar" class="form-control" id="customFileLang" lang="en">
                                        </div>
                                    </div>
                                </div>
                                {{-- <fieldset class="border p-2">
                                    <legend class="w-auto">Spesifikasi</legend>

                                    <div id="data-kriteria">
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($kriteria as $item)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Kriteria</label>
                                                        <select class="form-control form-control-sm" name="kriteria[]"
                                                            id="kriteria{{$i}}">


                                                                <option value="{{ $item->id }}" selected>{{ $item->kriteria }}
                                                                </option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Value</label>
                                                        <select class="form-control form-control-sm" name="valueKriteria[]"
                                                            id="valueKriteria">
                                                            <option selected>---Pilih Value---</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            @php
                                                $i++
                                            @endphp
                                        @endforeach
                                    </div>
                                    <div class="row mt-3 mb-3 button-add">
                                        <div class="col-md-12 mb-3">
                                            <button id="remove-kriteria" type="button" class="btn btn-sm btn-danger"><span
                                                    class="fas fa-minus"></span> Hapus
                                                Kriteria</button>
                                        </div>
                                        <div class="col-md-12">
                                            <button id="add-kriteria" type="button" class="btn btn-sm btn-success"><span
                                                    class="fas fa-plus"></span> Tambah Kriteria</button>
                                        </div>
                                    </div>

                                </fieldset> --}}




                            </div>
                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-sm btn-primary">Submit</button>


                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <script type="text/javascript">
        $('#kriteria').val(function() {
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
    <script type="text/javascript">
        // $("#data-kriteria:first #remove-kriteria").hide();
        var length = $("#data-kriteria").length;
        if (length == 1) {
            $("#remove-kriteria").hide();
        }
        $("#add-kriteria").click(function() {
            var clone = $("#data-kriteria:first").clone();
            clone.find("input").val("");
            $(".button-add").before(clone);
            length += 1;
            if (length == 1) {
                $("#remove-kriteria").hide();
            } else {
                $("#remove-kriteria").show();
            }
        });


        $("#remove-kriteria").click(function() {
            $("#data-kriteria:last").remove();
            length -= 1;
            if (length == 1) {
                $("#remove-kriteria").hide();
            } else {
                $("#remove-kriteria").show();
            }
        });

    </script> --}}
@endsection
