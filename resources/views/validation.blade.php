@extends('layouts.app')

@section('title','Validation')

@section('css-link','/css/validation.css')


@section('content')
    <h1>Validation page</h1>

    @if (count($errors) > 0)
        <div class = "alert alert-danger">
        <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
        </ul>
        </div>
    @endif

    <form method="POST" action="/homework/validation">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input class="form-control"  placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control"  placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input class="form-control"  placeholder="Enter address" name="address">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input class="form-control" type="password"  placeholder="Enter password" name="password">
        </div>
        <div>
            <input type="submit" class="btn btn-success" value="Login">
        </div>
    </form>
@endsection
