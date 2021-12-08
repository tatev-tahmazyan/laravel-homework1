@extends('layouts.app')

@section('title','List Homework')

@section('content')
  @isset($fruits)
    @if(is_array($fruits))
      <h1>List page</h1>
      <ul class="list-group mt-2">
        @foreach ($fruits as $fruit)
          <li class="list-group-item">{{ $fruit }}</li>
        @endforeach
      </ul>
    @endif
  @endisset
@endsection
