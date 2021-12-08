@extends('layouts.app')

@section('title','Index')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Category</h2>
            </div>
            @if (Auth::user() != "")
                <div class="pull-right">
                    <a class="btn btn-success mb-2" href="{{ route('categories.create') }}"> Create New Category</a>
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
            <th width="280px">Action</th>
        </tr>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->title }}</td>
            <td>
                <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('categories.show',$category->id) }}">Show</a>
                    @if (Auth::user() != "")
                        <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    @endif
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $categories->links() !!}
@endsection
