@extends('layouts.argon')

@section('content')
<div class="main-content">
    <div class="container pb-5" style="margin-top:100px;">
        <div class="row justify-content-center">  
            
        <!-- Content Area -->
            <div class="col-lg-5 col-md-7">
                <div class="card bg-light">
                    <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0">List Smartphone</h3>
                    </div>
                    <div class="card-body">
                        <!-- Card body -->
                        <div class="form-group">
                            <label class="form-control-label">Kedalaman</label>
                            <input class="form-control form-control-sm" name="kedalaman" type="number" placeholder="Kedalaman (m)">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection