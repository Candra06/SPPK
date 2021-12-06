@extends('layouts.argon')

@section('content')
<div class="main-content">
    <div class="container pb-5" style="margin-top:100px;">
        <div class="row justify-content-center">  
            
        <!-- Content Area -->
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="card">
                    <!-- Card image -->
                    <img class="card-img-top my-2" src="{{ asset('storage/' . $objek->gambar) }}" alt="Image placeholder" style="max-height:200px; object-fit: contain;">
                    <!-- Card body -->
                    <div class="card-body">
                        <h4 class="card-title mb-3">{{ $objek->merk . ' ' . $objek->type }}</h4>
                        @foreach ($spek->sortBy('kriteria') as $i)
                        <div class="row">
                            <div class="col col-lg-5">
                                <h5>{{ $i->kriteria }}</h5>
                            </div>
                            <div class="col">
                                @if($i->kriteria == 'Harga')
                                <p class="text-dark text-sm">Rp. {{ number_format($i->value) }}</p>
                                @else
                                <p class="text-dark text-sm">{{ $i->value }}</p>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection