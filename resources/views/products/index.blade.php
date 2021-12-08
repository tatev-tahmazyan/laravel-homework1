@extends('layouts.app')

@section('title','Index')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Product</h2>
            </div>
            @if (Auth::user() != "")
                <div class="pull-right">
                    <a class="btn btn-success mb-2" href="{{ route('products.create') }}"> Create New Product</a>
                </div>
            @endif
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Category id</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->category_id }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                    @if (Auth::user() != "")
                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    @endif
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $products->links() !!}
@endsection
