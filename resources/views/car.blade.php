@extends('layouts.app')

@section('title','Cars')

@section('content')
    <h1>Cars</h1>
    @isset($cars)
        <table class="table table-hover">
            <thead>
                <tr>
                    @foreach ($carKey as $key)
                        <th scope="col">{{$key}}</th>
                    @endforeach
                </tr>
            </thead>
            @foreach ($cars as $car)
                <tr>
                    <td>{{$car->brand}}</td>
                    <td>{{$car->model}}</td>
                    <td>{{$car->date}}</td>
                    <td>{{$car->range}}</td>
                    <td>{{$car->color}}</td>
                    <td>{{$car->price}}</td>
                </tr>
            @endforeach

        </table>
    @endisset
@endsection
