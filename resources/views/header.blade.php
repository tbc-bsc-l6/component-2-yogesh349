<div class="header">
    <div class="searchbutton">
        <h1 class="s-item">Clovers.</h1>
        <div class="search">
            <form action="" method="post">
            <input type="text" placeholder="Search.." />
            
                <span class="search-icon"><a href=""><i class="fa fal fa-search"></i></a></span>
            </form>
            
        </div>
        <div class="profile-log">
            <span>Hello Login</span>
            @auth
            <button type="button" class="btn btn-warning">Logout</button>
            @endauth
            <a href="{{url('login/')}}"><button type="button" class="btn btn-primary m-3">Login</button></a>

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