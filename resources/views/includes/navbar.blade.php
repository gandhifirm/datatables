<nav class="main-header navbar navbar-expand navbar-white navbar-dark--sm navbar-light">
    <!-- /. navbar-nav : left -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                    class="fas fa-bars"></i></a>
        </li>
    </ul>
    <!-- /. navbar-nav : left -->

    <!-- /. navbar-nav : center -->
    <ul class="navbar-nav navbar-nav__logo">
        <li class="nav-item">
            <a class="nav-link nav-link__logo" href="https://gapensi.or.id" target="_blank">
                <img src="{{ asset('images/logo-gapensi/logo-wide-white-text.png') }}"
                    alt="logo gapensi wide color">
            </a>
        </li>
    </ul>
    <!-- /. navbar-nav : center -->

    <!-- /. navbar-nav : right -->
    <ul class="navbar-nav ml-lg-auto">
        <!-- /. nav-item dropdown -->
        <li class="nav-item dropdown">
            <!-- /. nav-link icon -->
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-house-user"></i>
            </a>
            <!-- /. nav-link icon -->

            <!-- /. dropdown-menu -->
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- /. photo profil & description -->
                <a href="#" class="dropdown-item">
                    <!-- /. user description -->
                    <div class="gapensi-header__user">
                        <div class="gapensi-header__user-content">
                            <h3 class="user-content__title">
                                PT. Total Solusi Konstruksi
                            </h3>
                            <p class="user-content__email">pttsk@gmail.com</p>
                        </div>
                    </div>
                    <!-- /. user description -->
                </a>
                <!-- /. photo profil & description -->

                <!-- /. button -->
                <a href="#"
                    class="gapensi-header__btn gapensi-header__btn-dark dropdown-item dropdown-footer">Lihat
                    Minisite</a>
                <a href="#"
                    class="gapensi-header__btn gapensi-header__btn-light dropdown-item dropdown-footer">Keluar</a>
                <!-- /. button -->
            </div>
            <!-- /. dropdown-menu -->
        </li>
        <!-- /. nav-item dropdown -->
    </ul>
    <!-- /. navbar-nav : right -->
</nav>
