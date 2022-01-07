<div class="header">
    <div class="searchbutton">
        <h1 class="s-item">Clovers.</h1>
        <div class="search">
            <form action="" method="post">
                     <div class="input-group">
            <input class="form-control border-end-0 border rounded-pill" type="text" value="" id="example-search-input">
            <span class="search-icon">
                <button class="btn btn-outline-secondary bg-white border-start-0 border rounded-pill ms-n3" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </span>
     </div>
            </form>
            
        </div>
        <div class="profile-log">
            @if (Auth::guest())
            {{-- <a href="{{url('login/')}}"><button type="button" class="btn btn-primary m-3">Login</button></a> --}}
            <a href="{{route('register')}}" class="btn btn-primary m-3 ">Sign up</a>

            @else
            <span>Welcome,{{ Auth::user()->name }}</span>
                    <a class="btn btn-danger m-3" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
               
            
            @endif
        </div>
    </div>

    <div class="nav mb-3">
        <div class="nav-item"><a class="alink" href="{{ url('/')}}">Home</a></div>
        <div class="nav-item"> <a class="alink" href="{{url('game/')}}">Game</a></div>
        <div class="nav-item"> <a class="alink" href="{{url('books/')}}">Books</a></div>
        <div class="nav-item"> <a class="alink" href="{{url('cd')}}">CD</a></div>
        <div class="nav-item"> <a class="alink" href="">About</a></div>
    </div>
</div>