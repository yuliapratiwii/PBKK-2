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
                                <li>
                                    <a href="login.html">
                                        <i class="fas fa-sign-in-alt"></i>Login</a>
                                </li>
                                <li>
                                    <a href="login.html">
                                        
                                        <i class="fas fa-sign-out-alt"></i>Log Out</a>
                                </li>
                                <li>
                                    <a href="register.html">
                                        <i class="fas fa-user-plus"></i>New Account</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- END PAGE CONTAINER-->
    </div>
</div>