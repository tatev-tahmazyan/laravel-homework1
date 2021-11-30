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
                <li class="nav-item dropdown homework1">
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
            </ul>
        </div>
    </nav>
</div>

