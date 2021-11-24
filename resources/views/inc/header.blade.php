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
                <li class="nav-item about">
                    <a class="nav-link" href="{{route('validation')}}">
                        Validation
                    </a>
                </li>
                <!-- <li class="nav-item contact">
                    <a class="nav-link" href="{{--route('contact')--}}">
                        Contacts
                    </a>
                </li>    -->
            </ul>
        </div>
    </nav>
</div>

