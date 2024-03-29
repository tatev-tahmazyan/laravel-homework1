@section('header')
<div class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item home">
                    <a class="nav-link" href="{{route('home')}}">
                        Home
                    </a>
                </li>

                {{-- bootstrap 4 --}}

                {{-- <li class="nav-item dropdown homework1">
                    <a class="nav-link dropdown-toggle" href="#" id="homework1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Homework1
                    </a>
                    <div class="dropdown-menu" aria-labelledby="homework1">
                        <a class="dropdown-item" href="{{route('homework1-list')}}">List</a>
                        <a class="dropdown-item" href="{{route('homework1-validation')}}">Validation</a>
                    </div>
                </li>

                <li class="nav-item dropdown homework1">
                    <a class="nav-link dropdown-toggle" href="#" id="homework2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Homework2
                    </a>
                    <div class="dropdown-menu" aria-labelledby="homework2">
                        <a class="dropdown-item" href="{{route('homework2-car')}}">Cars</a>

                    </div>
                </li>

                <li class="nav-item dropdown homework1">
                    <a class="nav-link dropdown-toggle" href="#" id="homework4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Homework4
                    </a>
                    <div class="dropdown-menu" aria-labelledby="homework4">
                        <a class="dropdown-item" href="{{route('homework4-imageUpload')}}">image Upload</a>
                        <a class="dropdown-item" href="{{route('homework4-images')}}">images</a>
                    </div>
                </li>

                <li class="nav-item dropdown homework1">
                    <a class="nav-link dropdown-toggle" href="#" id="homework5" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Homework5
                    </a>
                    <div class="dropdown-menu" aria-labelledby="homework5">
                        <a class="dropdown-item" href="http://homework1.loc/products">Products</a>
                        <a class="dropdown-item" href="http://homework1.loc/categories">Categories</a>
                    </div>
                </li> --}}


                {{-- bootstrap 5 --}}
                <li class="nav-item dropdown homework1">
                    <a class="nav-link dropdown-toggle" href="#" id="homework1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Homework1
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="homework1">
                      <li><a class="dropdown-item" href="{{route('homework1-list')}}">List</a></li>
                      <li><a class="dropdown-item" href="{{route('homework1-validation')}}">Validation</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown homework1">
                    <a class="nav-link dropdown-toggle" href="#" id="homework2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Homework2
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="homework2">
                      <li><a class="dropdown-item" href="{{route('homework2-car')}}">Cars</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown homework1">
                    <a class="nav-link dropdown-toggle" href="#" id="homework4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Homework4
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="homework4">
                      <li><a class="dropdown-item" href="{{route('homework4-imageUpload')}}">image Upload</a></li>
                      <li><a class="dropdown-item" href="{{route('homework4-images')}}">images</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown homework1">
                    <a class="nav-link dropdown-toggle" href="#" id="homework5" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Homework5
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="homework5">
                      <li><a class="dropdown-item" href="http://homework1.loc/products">Products</a></li>
                      <li><a class="dropdown-item" href="http://homework1.loc/categories">Categories</a></li>
                    </ul>
                </li>



            </ul>
        </div>
    </nav>
</div>

