@extends('layouts.argon')

@section('content')
    <div class="main-content">
        <div class="container pb-5" style="margin-top:100px;">
            <div class="row justify-content-center">

                <!-- Content Area -->
                <div class="col-lg-5 col-md-7">
                    <div class="card">
                        <form action="{{ url('compare/objek') }}" method="POST">
                            @csrf
                            <div class="card-header">
                                <h5 class="h3 mb-0">Bandingkan Smartphone</h5>
                            </div>
                            <div class="card-body">
                                <div id="smartphone">
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Smartphone
                                            1</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="objek[]">
                                            <option value="">Pilih Tipe Smartphone</option>
                                            @foreach ($objek as $item)
                                                <option value="{{$item->id}}">{{$item->merk.' '.$item->type}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="row mt-3 mb-3 button-add">
                                    <div class="col-md-12 mb-3">
                                        <button id="remove-smartphone" type="button" class="btn btn-sm btn-danger"><span
                                                class="fas fa-minus"></span> Hapus
                                            Kriteria</button>
                                    </div>
                                    <div class="col-md-12">
                                        <button id="add-smartphone" type="button" class="btn btn-sm btn-success"><span
                                                class="fas fa-plus"></span> Tambah Kriteria</button>
                                    </div>
                                </div>


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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        // $("#smartphone:first #remove-kriteria").hide();
        var length = $("#smartphone").length;
        if (length == 1) {
            $("#remove-smartphone").hide();
        }
        $("#add-smartphone").click(function() {
            var clone = $("#smartphone:first").clone();
            clone.find("input").val("");
            $(".button-add").before(clone);
            length += 1;
            if (length == 1) {
                $("#remove-smartphone").hide();
            } else {
                $("#remove-smartphone").show();
            }
        });


        $("#remove-smartphone").click(function() {
            $("#smartphone:last").remove();
            length -= 1;
            if (length == 1) {
                $("#remove-smartphone").hide();
            } else {
                $("#remove-smartphone").show();
            }
        });
    </script>
@endsection
