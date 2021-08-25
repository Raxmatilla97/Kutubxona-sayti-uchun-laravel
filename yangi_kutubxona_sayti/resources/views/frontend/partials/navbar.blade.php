<style>
    .navbar-dark .navbar-nav .nav-link.active,
    .navbar-dark .navbar-nav .show>.nav-link {
        color: #000;
        font-size: 16px;
    }

    .navbar-dark .navbar-nav .nav-link {
        color: rgb(0 0 0 / 55%);
        font-size: 16px;
    }

    .navbar-dark .navbar-nav .nav-link:focus,
    .navbar-dark .navbar-nav .nav-link:hover {
        color: rgb(0 0 0 / 75%);
    }

</style>


<!-- NAVBAR START -->
<nav class="navbar navbar-expand-lg py-lg-3 navbar-dark" style="background-color: white;">
    <div class="container">

        <!-- logo -->
        <a href="index.html" class="navbar-brand me-lg-5">
            <img src="{{ 'assets/images/logo.png' }}" alt="" class="logo-dark" height="18">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>

        <!-- menus -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">

            <!-- left menu -->
            <ul class="navbar-nav me-auto align-items-center">
                <li class="nav-item mx-lg-1">
                    <a class="nav-link active" href="">Bosh sahifa</a>
                </li>
                <li class="nav-item mx-lg-1">
                    <a class="nav-link" href="">Yangi qo'shilgan kitoblar</a>
                </li>
                <li class="nav-item mx-lg-1">
                    <a class="nav-link" href="">Katalogizatsiya</a>
                </li>
                <li class="nav-item mx-lg-1">
                    <div class="dropdown">
                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Kutubxonaning asosiy bo'limlari
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </li>



            </ul>

            <!-- right menu -->
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item me-0">
                    <a href="{{ route('login') }}" class="btn btn-sm btn-light btn-rounded d-none d-lg-inline-flex">
                        <i class="mdi mdi-account-arrow-left me-2"></i> Profilga kirish
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
<!-- NAVBAR END -->
