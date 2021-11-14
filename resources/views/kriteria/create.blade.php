@extends('layouts.argon')

@section('content')
<div class="main-content">
    <div class="container pb-5" style="margin-top:100px;">
        <div class="row justify-content-center">  
            
        <!-- Content Area -->
            <div class="col-lg-5 col-md-7">
                <div class="card">
                    <form action="#">
                        <div class="card-header">
                            <h5 class="h3 mb-0">Tambah Kriteria</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-control-label">Nama Kriteria</label>
                                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Bobot</label>
                                <input class="form-control form-control-sm" type="number" placeholder=".form-control-sm">
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <a href="" class="btn btn-sm btn-primary">Submit</a>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection