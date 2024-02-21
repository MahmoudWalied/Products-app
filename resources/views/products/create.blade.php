@extends('products.layout')

@section('content')
    <br>
    <div class="row">
        <div class="col align-self-start">
            <a class="btn btn-primary" href="{{ route('products.index') }}">All Products</a>
        </div>
    </div>

    <br>
    @if( $errors->any() )
        <div class="alert alert-danger">
            <ul>
                @foreach( $errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container p-5">
        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3">
                <label for="details" class="form-label">Details</label>
                <textarea type="text" class="form-control" id="name" name="details" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input class="form-control" type="file" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>

@endsection
