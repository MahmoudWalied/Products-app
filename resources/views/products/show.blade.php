@extends('products.layout');

@section('content')
    <div class="row">
        <div class="col align-self-start">
            <a class="btn btn-primary" href="{{ route('products.index') }}">All Products</a>
        </div>
    </div>


    <div class="container p-5">
        <div class="mb-3">
            <h3> Name: {{ $product->name }}</h3>
        </div>
        <div class="mb-3">
            <p>{{ $product->details }}</p>
        </div>
        <div class="mb-3">
            <img src="/images/{{ $product->image }}" alt="" width="300px"/>
        </div>


    </div>

@endsection
