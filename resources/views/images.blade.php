@extends('layouts.app')

@section('title', 'Images')

@section('content')
    <div class="d-flex justify-content-center align-items-center flex-wrap">
        @foreach ($img_path as $img)
            <a target='_blank' href="<?= asset("$img") ?>">
                <img class="img-w-h" src="<?= asset("$img") ?>">
            </a><br>
        @endforeach
    </div>
@endsection
