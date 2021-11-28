@extends('layouts.argon')

@section('content')
    <div class="main-content">
        <div class="container pb-5" style="margin-top:100px;">
            <div class="row justify-content-center">

                <!-- Content Area -->
                <div class="col-lg-5 col-md-7">
                    <div class="card">
                        <form action="{{ url('/value') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header">
                                <h5 class="h3 mb-0">Tambah Value Kriteria</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-control-label">Kriteria</label>
                                    <select class="form-control form-control-sm" name="kriteria" id="">
                                        <option value="">Pilih Kriteria</option>
                                        @foreach ($data as $item)
                                            <option value="{{ $item->id }}">{{ $item->kriteria }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Value</label>
                                    <input class="form-control form-control-sm" type="text" name="value"
                                        placeholder="Nama Value">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Bobot</label>
                                    <input class="form-control form-control-sm" type="number" name="bobot"
                                        placeholder="bobot">
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
