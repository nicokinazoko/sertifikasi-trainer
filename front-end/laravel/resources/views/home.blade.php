@extends('master.master')

@section('content')
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($dataBarang as $index => $barang)
            @if ($index % 2 != 0)
                <div class="col">
                    <div class="box card h-100 ">
                        <img src="{{ $barang['cover'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $barang['product_name'] }}</h5>
                            <p class="card-text">{{ $barang['description'] }}</p>
                            <span style="float: left"><a href="#">Sponsored by Ads</a></span>
                            <span style="float: right">
                                {{ $barang['likes'] }}
                                <a href="#">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </a>
                                <a href="#">
                                    <ion-icon name="pricetag"></ion-icon>
                                </a>

                                <a href="#">
                                    <ion-icon name="share-social-outline"></ion-icon>
                                </a>

                        </div>
                    </div>
                </div>
            @else
                <div class="col">
                    <div class="box card h-100">
                        <img src="{{ $barang['cover'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $barang['product_name'] }}</h5>
                            <p class="card-text">{{ $barang['description'] }}</p>

                            <span style="float: right">
                                {{ $barang['likes'] }}
                                <a href="#">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </a>
                                <a href="#">
                                    <ion-icon name="pricetag-outline"></ion-icon>
                                </a>

                                <a href="#">
                                    <ion-icon name="share-social-outline"></ion-icon>
                                </a>

                            </span>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection
