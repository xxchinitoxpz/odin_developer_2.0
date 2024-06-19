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

    <!-- Header -->
    @include('project.projects')

    <!-- Footer -->
    @include('page.footer')
</body>

</html>
