<nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
    <a href="" class="navbar-brand d-block d-lg-none">
        <h1 class="m-0 display-4 text-primary">Klean</h1>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav mr-auto py-0">
            <a href="/" class="nav-item nav-link ">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
            <a href="{{ route('service') }}" class="nav-item nav-link">Service</a>
            <a href="{{ route('project') }}" class="nav-item nav-link">Project</a>
            <a href="{{ route('posts.index') }}" class="nav-item nav-link">Blog</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
        </div>
        @auth
<<<<<<< HEAD
            <a href="" class="btn btn-primary mr-5">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                </svg>
                <span class="badge badge-light">9</span> 
            </a>
            <div>{{ auth()->user()->name }}</div>
            <a href="{{ route('posts.create') }}" class="btn btn-primary mr-3 d-none d-lg-block">Add blog</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-dark mr-3 d-none d-lg-block">Sing up</button>
            </form>
=======
        <div>
            {{Auth()->user()->name}}
        </div> 
        <a href="{{route('posts.create')}}" class="btn btn-primary mr-3 d-none d-lg-block">Add blog</a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
           
            <button class="btn btn-dark mr-3 d-none d-lg-block" >Sing up</button>
        </form>
>>>>>>> ea2813e233bc1bbb48ade5240f4c408f2350132c
        @else
            <a href="{{ route('login') }} " class="btn btn-primary mr-3 d-none d-lg-block">Sing in</a>
        @endauth
    </div>
</nav>
