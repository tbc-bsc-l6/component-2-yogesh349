<div class="header">
    <div class="searchbutton">
        <h1 class="mt-4">Clovers.</h1>
        <div class="search mt-4">
            <form action="{{route('search')}}" method="get">
            <div class="input-group">
                <input style="width: 50%" class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search" value="{{old('search')}}">
                <button style="margin-left: 5px" class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                  
                </button>
            </span>
         </div>
            </form>
            
        </div>
        <div class="profile-log m-4">
            @if (Auth::guest())
            {{-- <a href="{{url('login/')}}"><button type="button" class="btn btn-primary m-3">Login</button></a> --}}
            <a href="{{route('register')}}" class="btn btn-primary  ">Sign up</a>
            @else
            @if (Auth::user()->email_verified_at)
            <span class="login_user_name">Welcome!   &ensp;<strong>{{ Auth::user()->name }}</strong></span>

                    <a class="btn btn-danger" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>    
            @endif
            @endif
        </div>
    </div>

    <div class="nav mb-3">
        <div class="nav-item"><a class="alink" href="{{ url('/')}}">Home</a></div>
        <div class="nav-item"> <a class="alink" href="{{url('game/')}}">Game</a></div>
        <div class="nav-item"> <a class="alink" href="{{url('books/')}}">Books</a></div>
        <div class="nav-item"> <a class="alink" href="{{url('cd')}}">CD</a></div>
        <div class="nav-item"> <a class="alink" href="{{url('about/')}}">About</a></div>
    </div>
</div>

