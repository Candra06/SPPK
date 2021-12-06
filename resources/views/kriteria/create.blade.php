@extends('layouts.argon')

@section('content')
<div class="main-content">
    <div class="container pb-5" style="margin-top:100px;">
        <div class="row justify-content-center">

        <!-- Content Area -->
            <div class="col-lg-5 col-md-7">
                <div class="card">
                    <form action="{{ url('/kriteria')}}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h5 class="h3 mb-0">Tambah Kriteria</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-control-label">Nama Kriteria</label>
                                <input class="form-control form-control-sm" type="text" name="kriteria" placeholder="nama kriteria">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Bobot</label>
                                <input class="form-control form-control-sm" type="number" name="bobot" placeholder="bobot">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Tipe</label>
                                <select class="form-control form-control-sm" name="type" id="">
                                    <option value="benefit">Benefit</option>
                                    <option value="cost">Cost</option>
                                </select>
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
