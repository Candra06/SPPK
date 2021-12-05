@extends('layouts.argon')

@section('content')
<div class="main-content">
    <div class="container pb-5" style="margin-top:100px;">
        <div class="row justify-content-center">  

        <?php
            $peringkat = 0;
        ?>
        @foreach($data as $objek)
            <?php
            $peringkat++;
            $item = App\Objek::where('id', $objek['id_objek'])->first();
            ?>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="card">
                    <!-- Card image -->
                    <img class="card-img my-2" src="{{ asset('storage/' . $item->gambar) }}" alt="Image placeholder" style="height:200px; object-fit: contain;">
                    <span class="product-tags">Rank : {{ $peringkat }}</span>
                    <span class="product-tags mt-4">{{ substr($objek['bobot'],0,4) }}</span>
                    <!-- Card body -->
                    <div class="card-body">
                        <h4 class="card-title mb-3">{{ $item->merk . ' ' . $item->type }}</h4>
                        @foreach($item->spec as $spec)
                        <div class="row">
                            <div class="col-lg-4">
                                <h5>{{ $spec->kriteria->kriteria }}</h5>
                            </div>
                            <div class="col">
                                <p class="text-dark text-sm">{{ $spec->value->value }}</p>
                            </div>
                        </div>
                        @endforeach
                        <a href="#" class="btn btn-link px-0">View Product</a>
                    </div>
                </div>
            </div>
        @endforeach
        
        </div>
    </div>
</div>
@endsection