@extends('layouts.argon')

@section('content')
<div class="main-content">
    <div class="container pb-5" style="margin-top:100px;">
        <div class="row justify-content-center">

        <!-- Content Area -->
            <div class="col-lg-5 col-md-7">
                <div class="card">
                    <form action="{{ url('/objek/'.$objek->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-header">
                            <h5 class="h3 mb-0">Edit Objek</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-control-label">Nama Merk</label>
                                <input class="form-control form-control-sm" type="text" name="merk" value="{{$objek->merk}}" placeholder="nama merk">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Type</label>
                                <input class="form-control form-control-sm" type="text" name="type" value="{{$objek->type}}" placeholder="type">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Status</label>
                                <select name="status" class="form-control form-control-sm" id="">
                                    <option value="">Pilih Status</option>
                                    <option value="Active" {{$objek->status == 'Active' ? 'selected' : ''}}>Active</option>
                                    <option value="Inactive" {{$objek->status == 'Inactive' ? 'selected' : ''}}>Inactive</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Gambar</label>
                                <img src="{{asset($objek->gambar)}}" alt="" srcset=""  style="width: 100%; height: 100%; object-fit: cover; margin-bottom:10px">
                                <input class="form-control" type="file" name="gambar" data-="" placeholder="gambar">
                                <i for=""><span style="color: red">*</span>Biarkan kosong jika tidak ingin merubah gambar</i>
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
@endsection
