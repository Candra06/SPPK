@extends('layouts.argon')

@section('content')
<div class="main-content">
    <div class="container pb-5" style="margin-top:100px;">
        <div class="row justify-content-center">  
            
        <!-- Content Area -->
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="card">
                    <!-- Card image -->
                    <img class="card-img-top" src="{{ asset('storage/' . $objek->gambar) }}" alt="Image placeholder" style="max-height:200px; object-fit: contain;">
                    <!-- Card body -->
                    <div class="card-body">
                        <h4 class="card-title mb-0">{{ $objek->merk . ' ' . $objek->type }}</h4>
                        <small class="text-muted">2019</small>
                        @foreach ($spek as $i)
                        <div class="row">
                            <div class="col-lg-4">
                                <h5>{{ $i->kriteria }}</h5>
                            </div>
                            <div class="col">
                                <p class="text-dark text-sm" style="height:80px;">{{ $i->value }}</p>
                            </div>
                        </div>
                        @endforeach
                        <a href="#" class="btn btn-link px-0">View All</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection