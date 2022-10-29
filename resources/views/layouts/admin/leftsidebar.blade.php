<div class="leftside-menu">

    <!-- LOGO -->
    <a href="#" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="{{ asset('assets/images/logo_mechanic_dark.png') }}" alt="" height="30">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('assets/images/logo_mechanic_sm_dark.png') }}" alt="" height="30">
        </span>
    </a>

    <!-- LOGO -->
    <a href="#" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('assets/images/logo_mechanic.png') }}" alt="" height="30">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('assets/images/logo_mechanic_sm.png') }}" alt="" height="30">
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar="">

        <!--- Sidemenu -->
        <ul class="side-nav">
            <li class="side-nav-item">
                <a class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#inventario" aria-expanded="false" aria-controls="inventario"
                    class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> Inventario </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="inventario">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('categorias') }}">Categorias</a>
                        </li>
                        <li>
                            <a href="">Marcas</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>

        <!-- End Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
