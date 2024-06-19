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
    <div class="container-fluid page-header py-5 mb-5" bis_skin_checked="1">
        <div class="container py-5" bis_skin_checked="1">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Sobre nosotros</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>


    <!-- About -->
    @include('home.about')

    <section class="d-flex bg-primary justify-content-center align-items-center" style="height: 20vh;">
        <div class="text-center text-white">
            <h1 class="display-4 font-weight-bold text-white">"Transformando ideas en innovación digital"</h1>
        </div>
    </section>

    <!-- Features -->
    @include('page.feature')



    <!-- Footer -->
    @include('page.footer')
</body>

</html>
