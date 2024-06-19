    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5">
        <div class="row gx-4 d-none d-lg-flex">
            <div class="col-lg-6 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="fa fa-map-marker-alt text-white"></small>
                    </div>
                    <small>Carlos, Ortiz Vélez 194, Chiclayo</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="fa fa-envelope-open text-white"></small>
                    </div>
                    <small>Informes@odindeveloper.net</small>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="fa fa-phone-alt text-white"></small>
                    </div>
                    <small>+51 958 922 415 - +51 934 480 964</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="far fa-clock text-white"></small>
                    </div>
                    <small>Lunes - Sabado : 9AM - 6PM</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
            <h2 class="m-0 text-primary">Odin Developer</h2>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-4 py-lg-0">
                <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Inicio</a>
                <a href="{{ url('/about') }}" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">Acerca de</a>
                <a href="{{ url('/service') }}" class="nav-item nav-link {{ request()->is('service') ? 'active' : '' }}">Servicios</a>
                <a href="{{ url('/project') }}" class="nav-item nav-link {{ request()->is('project') ? 'active' : '' }}">Proyectos</a>
                <a href="{{ url('/contact') }}" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contacto</a>
            </div>
            
            <div class="h-100 d-lg-inline-flex align-items-center d-none">
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" target="_blank" href="https://www.facebook.com/ODINDEVELOPERCHICLAYO/"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" target="_blank" href="https://api.whatsapp.com/send/?phone=51934480964&text&type=phone_number&app_absent=0"><i class="fab fa-whatsapp"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" target="_blank" href="https://pe.linkedin.com/in/odin-s-a-c-852126248"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-0" target="_blank" href="https://www.instagram.com/odindeveloper.cix/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->