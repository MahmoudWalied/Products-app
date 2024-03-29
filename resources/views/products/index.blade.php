@extends('products.layout')

@section('content')

    <br>
    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-hover table-borderless table-primary align-middle">
            <thead class="table-light">

            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Details</th>
                <th width="300px">Actions</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            @foreach($products as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><img src="/images/{{ $item->image }}" alt="" width="300px"/></td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->details }}</td>
                    <td>

                        <a class="btn btn-info" href="{{ route('products.show', $item->id) }}">Show</a>
                        @auth
                            <a class="btn btn-primary" href="{{ route('products.edit', $item->id) }}">Edit</a>

                            <form action="{{ route('products.destroy', $item->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        @endauth
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $products->links() !!}
    </div>

@endsection
