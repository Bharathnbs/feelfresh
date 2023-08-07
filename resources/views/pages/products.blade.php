@extends('layouts.site')

@section('contant')
    <section>
        <div class="container">
            <h1 class="my-4 text-center">Our Products</h1>
            <div class="row" style="margin-top:50px">
                @foreach ($products as $product)
                    <div class="col-lg-3 py-3">
                        <div class="card">
                            <img src="{{ asset('images/products/'.$product->image)}}" class="card-img-top" alt="{{ $product->image }}" height="170px">
                            <div class="card-body">
                              <h5 class="card-text text-center">{{ $product->name}}</h5>
                              <h6 class="card-text text-center"><span class="mx-2 text-secondary">{{ $product->quantity }}</span>RS {{ $product->price}}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
