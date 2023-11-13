@extends('layouts.cool-adm')

@section('title', 'halaman adm')

<!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('assets/themes/cool-admin/images/icon/buku.jpg')}}"  />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="{{asset('assets/themes/cool-admin/images/icon/iu.jpg')}}" />
                    </div>
                    <h4 class="name">Mbak IU</h4>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="">
                                <i class="fas fa-home"></i></i>Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('books.index') }}">
                                <i class="fas fa-book"></i>Daftar Buku</a>
                        </li>
                        <li>
                            <a href="{{ route('author.index') }}">
                                <i class="fas fa-user"></i>Daftar Penulis
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('author.create') }}">
                                <i class="fas fa-user-plus"></i>Tambah Data Penulis</a>
                        </li>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>My Account
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                         <i class="fas fa-sign-out-alt"></i> Log Out
                                    </x-dropdown-link>
                                </form>
                                
                                
                                <li>
                                    <a href="{{ route('register') }}">
                                        <i class="fas fa-user-plus"></i>New Account</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-container2">
        <!-- ... (code header dan breadcrumb lainnya) ... -->
        <section class="au-breadcrumb m-t-75">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <h1>DAFTAR BUKU</h1>
                                            {{-- <a href="{{ route('books.index') }}">Home</a> --}}
                                        </li>
                                    </ul>
                             
                                
                                <div class="au-breadcrumb-left">
                                    <button><a href="{{ route('books.create') }}"></button>
                                    <i class="zmdi zmdi-plus"></i>add book
                                </div>
  
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mx-auto text-center">
            <link rel="stylesheet" href="{{ asset('css/bp.css') }}">

            
            @foreach ($books as $book)
                <div class="book-item">
                    <div>
                        Judul: {{ $book->title }}
                        <br>
                        Penulis: {{ $book->author->name ?? 'no author' }}
                        <br>
                        Deskripsi: {{ $book->description }}
                    </div>
                    <div>
                        <a href="{{ route('books.show', $book->id) }}">Lihat</a>
                        <a href="{{ route('books.edit', $book->id) }}">Edit</a>

                        <form action="{{ route('books.destroy', $book->id) }}" method="post" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Hapus">
                        </form>
                    </div>
                </div>
                <hr>
            @endforeach
        </section>
        <!-- END PAGE CONTAINER-->
        <body class="animsition">
            <div class="page-wrapper">
                <!-- PAGE CONTAINER-->
                <div class="page-container2">
                    <!-- HEADER DESKTOP-->
                    <header class="header-desktop2">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="header-wrap2">
                                    <div class="logo d-block d-lg-none">
                                        <a href="#">
                                            <img src="{{ asset('assets/themes/cool-admin/images/icon/logo-white.png') }}"
                                                alt="CoolAdmin" />
                                        </a>
                                    </div>
                                    <div class="header-button2">
                                        <div class="header-button-item js-item-menu">
                                            <i class="zmdi zmdi-search"></i>
                                            <div class="search-dropdown js-dropdown">
                                                <form action="">
                                                    <input class="au-input au-input--full au-input--h65" type="text"
                                                        placeholder="Search for datas &amp; reports..." />
                                                    <span class="search-dropdown__icon">
                                                        <i class="zmdi zmdi-search"></i>
                                                    </span>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="header-button-item has-noti js-item-menu">
                                            <i class="zmdi zmdi-notifications"></i>
                                            <div class="notifi-dropdown js-dropdown">
                                                <div class="notifi__title">
                                                    <p>You have 3 Notifications</p>
                                                </div>
                                                <div class="notifi__item">
                                                    <div class="bg-c1 img-cir img-40">
                                                        <i class="zmdi zmdi-email-open"></i>
                                                    </div>
                                                    <div class="content">
                                                        <p>You got a email notification</p>
                                                        <span class="date">April 12, 2018 06:50</span>
                                                    </div>
                                                </div>
        
                                                <div class="notifi__footer">
                                                    <a href="#">All notifications</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="header-button-item mr-0 js-sidebar-btn">
                                            <i class="zmdi zmdi-menu"></i>
                                        </div>
                                        <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
        
                    <!-- END HEADER DESKTOP-->
        
                    <!-- BREADCRUMB-->
                    
                    <!-- END BREADCRUMB-->
        
        
            <!-- Jquery JS-->
            <script src="{{ asset('assets/themes/cool-admin/vendor/jquery-3.2.1.min.js') }}"></script>
            <!-- Bootstrap JS-->
            <script src="{{ asset('assets/themes/cool-admin/vendor/bootstrap-4.1/popper.min.js') }}"></script>
            <script src="{{ asset('assets/themes/cool-admin/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
            <!-- Vendor JS       -->
            <script src="{{ asset('assets/themes/cool-admin/vendor/slick/slick.min.js') }}"></script>
            <script src="{{ asset('assets/themes/cool-admin/vendor/wow/wow.min.js') }}"></script>
            <script src="{{ asset('assets/themes/cool-admin/vendor/animsition/animsition.min.js') }}"></script>
            <script src="{{ asset('assets/themes/cool-admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
            </script>
            <script src="{{ asset('assets/themes/cool-admin/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
            <script src="{{ asset('assets/themes/cool-admin/vendor/counter-up/jquery.counterup.min.js') }}"></script>
            <script src="{{ asset('assets/themes/cool-admin/vendor/circle-progress/circle-progress.min.js') }}"></script>
            <script src="{{ asset('assets/themes/cool-admin/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
            <script src="{{ asset('assets/themes/cool-admin/vendor/chartjs/Chart.bundle.min.js') }}"></script>
            <script src="{{ asset('assets/themes/cool-admin/vendor/select2/select2.min.js') }}"></script>
            <script src="{{ asset('assets/themes/cool-admin/vendor/vector-map/jquery.vmap.js') }}"></script>
            <script src="{{ asset('assets/themes/cool-admin/vendor/vector-map/jquery.vmap.min.js') }}"></script>
            <script src="{{ asset('assets/themes/cool-admin/vendor/vector-map/jquery.vmap.sampledata.js') }}"></script>
            <script src="{{ asset('assets/themes/cool-admin/vendor/vector-map/jquery.vmap.world.js') }}"></script>
        
            <!-- Main JS-->
            <script src="{{ asset('assets/themes/cool-admin/js/main.js') }}"></script>
        
        </body>
        
    </div>
</div>
