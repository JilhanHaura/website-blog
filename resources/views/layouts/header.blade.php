<header>
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                </div>
                <div>
                    <a class="text-light" href="https://www.facebook.com/jilhan.haura.5" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/jilhanhaura/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed bg-success bg-gradient">
        <div class="container-fluid">
            <a class="navbar-brand text-dark border-dark logo " href="#">UNIVERSITAS ANTAH BARANTAH</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">

                    <li class="nav-item">
                        <a class="nav-link {{Request::is('home')?'active':''}} text-dark" aria-current="page" href="{{url('home')}}">Home</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link {{Request::is('jurusan')?'active':''}}" aria-current="page" href="{{url('jurusan')}}">Jurusan</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('mahasiswa')?'active':''}} text-dark " href="{{url('mahasiswa')}}">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('dosen')?'active':''}}  text-dark" href="{{url('dosen')}}">Dosen</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Jurusan</a>
                    </li> -->
                    <li class="nav-item text-dark">
                        <a class="nav-link {{Request::is('berita')?'active':''}} text-dark"
                        href="{{ url('berita')}}">Blog</a>
                    </li>
                    <li class="nav-item text-dark">
                        <a class="nav-link {{Request::is('galeri')?'active':''}} text-dark"
                        href="{{ url('galeri')}}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('kontak')?'active':''}} text-dark"
                        href="{{ url('kontak')}}">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                    @auth
                    <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                        <li class="nav-item text-dark">
                            <a class="nav-link {{Request::is('home')?'active':''}} text-dark" aria-current="page" href="{{url('dashboard')}}">Admin</a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="post">
                                @csrf
                                <button class="btn btn-dark" type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                    @else
                    <li class="nav-item">
                        <a class="btn btn-dark text-light" aria-current="page" href="/login">Login</a>
                    </li>
                </ul>
                @endauth

                <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
            </div>
        </div>
    </nav>
</header>
