<!DOCTYPE html>
<html lang="en">

<head>
    @include('page.homecss')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Cargando...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Header -->
    @include('page.header')

    <!-- Carrousel -->
    @include('home.carrousel')

    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100 bg-dark p-4 p-xl-5">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="btn-square rounded-circle"
                                style="width: 64px; height: 64px; background: #000000;">
                                <img class="img-fluid" src="img/icon/icon-3.png" alt="Icon">
                            </div>
                            <h1 class="display-1 mb-0" style="color: #000000;">01</h1>
                        </div>
                        <h5 class="text-white">Innovación</h5>
                        <hr class="w-25">
                        <span class="text-justify">Nos esforzamos por estar a la vanguardia de la tecnología, ofreciendo
                            soluciones innovadoras que superan las expectativas de nuestros clientes.</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="h-100 bg-dark p-4 p-xl-5">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="btn-square rounded-circle"
                                style="width: 64px; height: 64px; background: #000000;">
                                <img class="img-fluid" src="img/icon/icon-4.png" alt="Icon">
                            </div>
                            <h1 class="display-1 mb-0" style="color: #000000;">02</h1>
                        </div>
                        <h5 class="text-white">Responsabilidad</h5>
                        <hr class="w-25">
                        <span>Asumimos la responsabilidad de nuestras acciones y nos comprometemos a cumplir con
                            nuestros compromisos de manera oportuna y profesional.</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 bg-dark p-4 p-xl-5">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="btn-square rounded-circle"
                                style="width: 64px; height: 64px; background: #000000;">
                                <img class="img-fluid" src="img/icon/icon-2.png" alt="Icon">
                            </div>
                            <h1 class="display-1 mb-0" style="color: #000000;">03</h1>
                        </div>
                        <h5 class="text-white">Servicio al Cliente</h5>
                        <hr class="w-25">
                        <span>Ponemos a nuestros clientes en el centro de todo lo que hacemos, ofreciendo un servicio
                            excepcional y soporte continuo.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->

    <!-- About -->
    @include('home.about')

    <!-- Service -->
    @include('home.service')

    <!-- Footer -->
    @include('page.footer')
</body>

</html>
